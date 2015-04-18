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


    public function __construct($router,$em)
    {
        $this->router=$router;
        $this->em=$em;
    }

    public function loadEntity($entity) {
        $this->entity=$entity;
    }

    public function getIssues() {

    }

    public function getConflictIssues($a="Offre",$b="Offre") {
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

        echo $dql;
        $query = $em->createQuery($dql);
        $offres=$query->getResult();

        echo "offres --------------> C=".count($offres)."<br/>";

        $p2os = $entity->getProducts();
        $products =array();
        foreach($p2os as $p2o) {
            if($tent = $p2o->getTentId()) {
                $products[]=$tent->getId();
            }
        }

        print_r($products);


        foreach($offres as $o) {
            if($o->getId()!=$entity->getId()) {
                echo "offre: ".$o->getReference()."<br/>";
                if($issues=$entity->getIssue()) {
                    foreach($issues as $i) {
                        if($i->getReference()==$o->getReference()) {
                            $entity->removeIssue($i);
                        }
                    }
                }
                if($issues=$o->getIssue()) {
                    foreach($issues as $i) {
                        if($i->getReference()==$entity->getReference()) {
                            $o->removeIssue($i);
                        }
                    }
                }
                $p2os = $o->getProducts();
                foreach($p2os as $p2o) {
                    if($tent = $p2o->getTentId()) {
                        echo "product: ".$tent->getReference()."<br/>";
                        if(in_array($tent->getId(), $products)) {
                            echo "- ------------ -- - -- - - - - - - - ----------> product: ".$tent->getReference()."<br/>";
                            $issue1=new Issue();
                            $issue1->setReference($entity->getReference());
                            $issue1->setDescription("Product ".$tent->getReference()." - ".$a." <a href='#'>".$entity->getReference()."</a>");
                            $em->persist($issue1);
                            $o->addIssue($issue1);
                            $em->persist($o);

                            $issue2=new Issue();
                            $issue2->setReference($o->getReference());
                            $issue2->setDescription("Product ".$tent->getReference()." - ".$b." <a href='#'>".$o->getReference()."</a>");
                            $em->persist($issue2);
                            $entity->addIssue($issue2);
                        }
                    }
                }
            }
        }
        $em->flush();


    }
}


?>
