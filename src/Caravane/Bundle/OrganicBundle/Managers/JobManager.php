<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Entity\Chat as Log;

class JobManager
{
    protected $em;
    protected $entity;

    public function __construct(Job $entity,$em)
    {
        $this->em=$em;
    	$this->entity = $entity;

    }


    public function changeReference() {


        $entity=$this->entity;
        if($entity->getReference()=='temp' || $entity->getReference()=='') {
            $entity->setReference(date('Ym')."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$entity->getUserid()->getIso());
        }
        $ta=explode('-',$entity->getReference());
        $entity->setReference($ta[0]."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$ta[3]);

        return $entity->getReference();
    }


    public function postPersist() {
         $entity=$this->entity;
         $em=$this->em;
         $this->changeReference();
        $em->persist($entity);
        $em->flush();
    }

     function checkAvailability() {
        $entity=$this->entity;
        $em=$this->em;
        $products=$entity->getproducts();
        $tents=array();
        $relativeOffre=$em->getRepository('CaravaneOrganicBundle:Offre')->findOneByJobid($entity->getId());
       //echo "offre:".$relativeOffre."<br/>";
        foreach($products as $p) {
            if($p->getTentid()) {
                $tents[]=$p->getTentid();
                echo $p->getTentid()->getReference()."<br/>";
            }
        }
        $overlapingOffres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($entity->getStartbuild(),$entity->getEndbuild());
        $mails=array();
        foreach($overlapingOffres as $offre) {
            //if($offre!=$relativeOffre && is_null($offre->getJobid())) {
            $messages=array();
            if($offre!=$relativeOffre ) {
                $products=$offre->getProducts();
                foreach($products as $p) {
                    if($tent=$p->getTentid()) {
                        
                        if(in_array($tent,$tents)) {
                            $p->setToremove(true);
                            $offre->setIssue(1);
                       //     echo "offre:".$offre->getReference()." / tent:".$p->getTentid()->getReference()."<br/>";
                            $em->persist($p);
                            $em->persist($offre);
                            $message="Product <b>".$p->getTentid()->getReference()."</b> (".$p->getTentid()->getId().") from bid <b>".$offre->getReference()."</b>b> has been attached to job <b>".$entity->getReference()."</b>. Please modify this bid.";
                            $log=new Log;
                            $log->setMessagedate(new \Datetime('now'));
                            $log->setUserid($entity->getUserid());
                            $log->setTarget($offre->getUserid());
                            $log->setMessageType('logs');
                            $log->setMessage($message);
                            $em->persist($log);
                            $messages[]=$message;
                        }
                        
                    }
                    
                }
            }
            
            $mails[$offre->getId()]=array('messages'=>$messages,'from'=>$entity->getUserid(),'to'=>$offre->getUserid());
        }
       //print_r($overlapingOffres);
        $em->flush();
        return $mails;

    }

}


?>
