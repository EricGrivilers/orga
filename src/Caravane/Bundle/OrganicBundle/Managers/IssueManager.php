<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Entity\Issue;

class IssueManager
{
    protected $router;
    protected $em;
    protected $entity;

    protected $type;
    protected $issues;


    public function __construct($router,$em)
    {
        $this->router=$router;
        $this->em=$em;
        $this->issues=array();
    }

    public function loadEntity($entity) {
        $this->entity=$entity;
    }

    public function save() {
        $em=$this->em;
        if(!$entity=$em->getRepository('CaravaneOrganicBundle:'.$this->type)->find($this->entity->getId())) {
            //echo "not found "; die();
        }
        foreach($this->issues as $issue) {
            //echo $issue->getSource()." -- ".$issue->getTarget()." -> ".$issue->getDescription()."<br/>";
            $em->persist($issue);
            if($issue->getSource()==$this->type.":".$entity->getId()) {
                $entity->addIssue($issue);
                //echo "save me.<br>";
            }
            else {
                if($s=explode(':', $issue->getSource())) {
                    if($t=$em->getRepository('CaravaneOrganicBundle:'.$s[0])->find($s[1])) {
                        $t->addIssue($issue);
                        $em->persist($t);
                        //echo "save them.<br>";
                    }
                }
            }

        }
        $em->persist($entity);
//die();
        $em->flush();
    }
    public function getIssues() {

    }

    public function getGeneralIssues($a) {
        $em=$this->em;
        $this->type=$a;
        $entity=$this->entity;


        //clean up

        $issues=$em->getRepository('CaravaneOrganicBundle:Issue')->findBySource($a.":".$entity->getId());
        foreach($issues as $issue) {
            $em->remove($issue);
        }

        $issues=$em->getRepository('CaravaneOrganicBundle:Issue')->findByTarget($a.":".$entity->getId());
        foreach($issues as $issue) {
            $em->remove($issue);
        }

        $em->flush();




        //slices
        if($entity->getTotalSlicePriceht()!=$entity->getPrice() ) {
            $issue=new Issue();
            $issue->setReference($entity->getReference());
            $issue->setSource($a.":".$entity->getId());
            $issue->setTarget(null);
            $issue->setDescription("Conditions total price mismatch.");
            //$em->persist($issue);
            //$entity->addIssue($issue);
            $this->issues[]=$issue;
        }
        if($entity->getTotalSlice()!=100 ) {
            $issue=new Issue();
            $issue->setReference($entity->getReference());
            $issue->setSource($a.":".$entity->getId());
            $issue->setTarget(null);
            $issue->setDescription("Conditions total percents mismatch.");
            $this->issues[]=$issue;
           // $em->persist($issue);
            //$entity->addIssue($issue);
        }

        //$this->entity=$entity;
        //$em->persist($entity);
        //$em->flush();
    }



    public function getConflictIssues($a="Offre",$b="Offre") {

        //echo $a."<->".$b."<br/>";
        $entity=$this->entity;
        $em=$this->em;


        $from= new \Datetime('now');
        $to= new \Datetime('now');
        $to->modify('+5 years');
        //$offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($from, $to);
        //$tents=$em->getRepository('CaravaneOrganicBundle:Tent')->findAll();

        //echo "--------------> C=".count($offres)."<br/>";

        $dql="SELECT A, B
        FROM CaravaneOrganicBundle:".$a." A
        JOIN CaravaneOrganicBundle:".$b." B WITH ( A.builddate BETWEEN B.builddate AND B.unbuilddate
        or A.unbuilddate BETWEEN  B.builddate AND B.unbuilddate";
        if($a==$b) {
            $dql.=" and A.id != B.id ";
        }
        else if($a=="Offre" && $b=="Job") {
            $dql.=" AND B.offreid!=A.id ";
        }
        else if($a=="Job" && $b=="Offre") {
            $dql.=" AND A.offreid!=B.id ";
        }

        $dql.=" )";



        $dql.="WHERE A.public=1
        and B.public=1
        and A.offretype='rent'
        and B.offretype='rent' ";

        $dql.=" AND ( (A.builddate BETWEEN '".$from->format('Y-m-d H:i:s')."' AND '".$to->format('Y-m-d H:i:s')."' ) ";
        $dql.=" OR ( A.unbuilddate BETWEEN '".$from->format('Y-m-d H:i:s')."' AND '".$to->format('Y-m-d H:i:s')."' ) ";
        $dql.=" OR ( A.builddate <= '".$from->format('Y-m-d H:i:s')."' AND A.unbuilddate >= '".$to->format('Y-m-d H:i:s')."' ) )";


        $dql.=" AND ( (B.builddate BETWEEN '".$from->format('Y-m-d H:i:s')."' AND '".$to->format('Y-m-d H:i:s')."' ) ";
        $dql.=" OR ( B.unbuilddate BETWEEN '".$from->format('Y-m-d H:i:s')."' AND '".$to->format('Y-m-d H:i:s')."' ) ";
        $dql.=" OR ( B.builddate <= '".$from->format('Y-m-d H:i:s')."' AND B.unbuilddate >= '".$to->format('Y-m-d H:i:s')."' ) )";

        $dql.=" AND A.id='".$entity->getId()."' ";
        if($a==$b) {
            $dql.=" AND B.id!=A.id ";
        }
        else if($a=="Offre" && $b=="Job") {
            $dql.=" AND B.offreid!=A.id ";
        }
        else if($a=="Job" && $b=="Offre") {
            $dql.=" AND A.offreid!=B.id ";
        }
        //$dql.= " ORDER BY A.id ";

       // echo $dql;
        $query = $em->createQuery($dql);
        $offres=$query->getResult();

       // echo "offres --------------> C=".count($offres)."<br/>";

        $p2os = $entity->getProducts();
        $products =array();
        foreach($p2os as $p2o) {
            if($tent = $p2o->getTentId()) {
                $products[]=$tent->getId();
            }
        }

        //print_r($products);


        foreach($offres as $o) {
            //echo $o->getId()."!=".$entity->getId()."<br/>";

            if($o->getId()!=$entity->getId()) {
                //echo "offre: ".$o->getReference()."<br/>";
                /*if($issues=$entity->getIssue()) {
                    foreach($issues as $i) {
                        if($i->getReference()==$o->getReference()) {
                            $entity->removeIssue($i);
                        }
                    }
                }*/
                /*if($issues=$o->getIssue()) {
                    foreach($issues as $i) {
                        if($i->getReference()==$entity->getReference()) {
                            $o->removeIssue($i);
                        }
                    }
                }*/
                $p2os = $o->getProducts();
                foreach($p2os as $p2o) {
                    if($tent = $p2o->getTentId()) {
                        //echo "product: ".$tent->getReference()."<br/>";
                        if(in_array($tent->getId(), $products)) {
                            //echo "- ----------conflict-- -- - -- - - - - - - - ----------> product: ".$tent->getReference()."<br/>";
                            $issue1=new Issue();
                            $issue1->setReference($entity->getReference());
                            $link1=$this->router->generate(strtolower($a).'_edit', array('id'=>$entity->getId()));
                            $issue1->setDescription("Product ".$tent->getReference()." - ".$a." <a href='".$link1."#tab_products'>".$entity->getReference()."</a>");
                            $issue1->setTarget($a.":".$entity->getId());
                            $issue1->setSource($b.":".$o->getId());
                            $issue1->setType($tent->getProductCategory());
                            $this->issues[]=$issue1;
                            //$em->persist($issue1);


                            $issue2=new Issue();
                            $issue2->setReference($o->getReference());
                            $link2=$this->router->generate(strtolower($b).'_edit', array('id'=>$o->getId()));
                            $issue2->setDescription("Product ".$tent->getReference()." - ".$b." <a href='".$link2."#tab_products'>".$o->getReference()."</a>");
                            $issue2->setTarget($b.":".$o->getId());
                            $issue2->setSource($a.":".$entity->getId());
                            $issue2->setType($tent->getProductCategory());
                            $this->issues[]=$issue2;
                            //$em->persist($issue2);

                            //$entity->addIssue($issue2);
                            //$o->addIssue($issue1);

                        }
                    }
                }



            }
            //$em->persist($o);
        }
        //$em->flush();
        //$this->entity=$entity;
        //$em->persist($entity);
        //die();



    }
}


?>
