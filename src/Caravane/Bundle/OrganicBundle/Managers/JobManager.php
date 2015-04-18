<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Entity\Chat as Log;

class JobManager
{
    protected $router;
    protected $em;
    protected $entity;
    protected $issueManager;

    public function __construct($router,$em, $issueManager)
    {
        $this->router=$router;
        $this->em=$em;
        $this->issueManager= $issueManager;
    }

    public function loadEntity($entity) {
        $this->entity=$entity;
    }

    public function changeReference() {

        $entity=$this->entity;
        $plannings=$entity->getPlannings();
        if(!$eventDate=$entity->getEventDate()) {
            foreach($plannings as $planning) {
                if($planning->getPlanningtype()=='build') {
                    $eventDate=$planning->getStartdate();
                }
            }
        }

        $name=$this->slugify($entity->getClientId()->getName())."_".$eventDate->format('Y-m-d')."_".$this->slugify($entity->getZip()."-".$entity->getCity());

       
        if($entity->getReference()=='temp' || $entity->getReference()=='') {
            //$entity->setReference(date('Ym')."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$entity->getUserid()->getIso());
            $entity->setReference(date('Ym')."-".$entity->getId()."-J".strtoupper(substr($entity->getOffretype(),0,1))."-".$entity->getUserid()->getIso()."_".$name );
        }
        $tb=explode('_',$entity->getReference());
        $ta=explode('-',$tb[0]);
        $entity->setReference( $ta[0]."-".$entity->getId()."-J".strtoupper(substr($entity->getOffretype(),0,1))."-".$ta[3]."_".$name );
        //$entity->setReference($ta[0]."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$ta[3]);

        return $entity->getReference();
    }


    public function postPersist() {

         $entity=$this->entity;
         $em=$this->em;
         $this->changeReference();
        $em->persist($entity);
        $em->flush();
    }

     function checkAvailability($container) {
        $entity=$this->entity;
        $em=$this->em;
        $products=$entity->getproducts();
        $tents=array();
        $relativeOffre=$em->getRepository('CaravaneOrganicBundle:Offre')->findOneByJobid($entity->getId());
      // echo "offre:".$relativeOffre."<br/>";
        foreach($products as $p) {
            if($p->getTentid()) {
                $tents[]=$p->getTentid();
                //echo $p->getTentid()->getReference()."<br/>";
            }
        }
        //echo date_format($entity->getStartbuild(),'Ymd His');
        $overlapingOffres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($entity->getStartbuild(),$entity->getEndbuild());
        $mails=array();
        foreach($overlapingOffres as $offre) {
            //echo "offre:".$offre->getReference()."<br/>";
            //if($offre!=$relativeOffre && is_null($offre->getJobid())) {
            $messages=array();
            if($offre!=$relativeOffre ) {
                $products=$offre->getProducts();
                foreach($products as $p) {
                    if($tent=$p->getTentid()) {

                        if(in_array($tent,$tents)) {
                            $p->setToremove(true);
                         //$offre->setIssue(1);
                            //echo "offre:".$offre->getReference()." / tent:".$p->getTentid()->getReference()."<br/>";
                            $em->persist($p);
                            $em->persist($offre);

                            $log=new Log;
                            $log->setMessagedate(new \Datetime('now'));
                            $log->setUserid($entity->getUserid());
                            $log->setTarget($offre->getUserid());
                            $log->setMessageType('logs');
                            $log->setMessage('t');
                            $em->persist($log);
                            $em->flush();
                            $message="Product <b>
                            <a href='".$container->get('router')->generate('tent_edit', array('id' => $p->getTentid()->getId()), true)."'>".$p->getTentid()->getReference()."</a></b> (".$p->getTentid()->getId().")
                            from bid <b>
                            <a href='".$container->get('router')->generate('offre_edit', array('id' => $offre->getId()), true)."'>".$offre->getReference()."</a></b>
                            has been attached to job <b>
                            <a href='".$container->get('router')->generate('job_edit', array('id' => $entity->getId()), true)."'>".$entity->getReference()."</a></b>. <br/>
                            Please take an action
                            <a href='".$container->get('router')->generate('offre_resolve', array('offreId' => $offre->getId(),'jobId' => $entity->getId(),'tentId' => $p->getTentid()->getId(),'logId'=>$log->getId()), true)."'>
                            here</a>.";
                            $log->setMessage($message);
                            $em->persist($log);
                            $em->flush();

                            $messages[]=$message;
                        }

                    }

                }
            }
            if(count($messages)>0) {
                $mails[$offre->getId()]=array('messages'=>$messages,'from'=>$entity->getUserid(),'to'=>$offre->getUserid());
            }

        }

       //print_r($overlapingOffres);
        $em->flush();
        return $mails;

    }


    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }


    public function getIssues()
    {
        $entity = $this->entity;
        $this->issueManager->loadEntity($entity);
        $this->issueManager->getConflictIssues("Job", "Job");
        $this->issueManager->getConflictIssues("Job", "Offre");
    }

}


?>
