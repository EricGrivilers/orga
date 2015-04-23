<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Entity\Issue;

class OffreManager
{
    protected $router;
    protected $em;
    protected $entity;
    protected $issueManager;

    public function __construct($router, $em, $issueManager)
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
        if($entity->getReference()=='temp' || $entity->getReference()=='') {
            $entity->setReference(date('Ym')."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$entity->getUserid()->getIso());
        }
        $ta=explode('-',$entity->getReference());
        $entity->setReference($ta[0]."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$ta[3]);

        return $entity->getReference();
    }


    public function persist() {
            $entity=$this->entity;
            $em=$this->em;

            $errors=array();

            $entity->setReference('temp');
            $entity->setLanguage($entity->getClientid()->getLanguage());
            //
            $entity->setInsertdate(new \Datetime('now'));
            $entity->setUpdatedate(new \Datetime('now'));

            $priceHt=0;
            foreach($entity->getProducts() as $product) {
                $product->setOffreid($entity);
                $product->setUpdatedate(new \Datetime('now'));
                if($product->getIsoption()==false) {
                    $priceHt+=$product->getPrice();
                }
                $em->persist($product);
            }
            $entity->setPrice($priceHt);
            $totalSlice=0;
            $totalSlicePriceHt=0;
             foreach($entity->getSlices() as $slice) {
                $slice->setOffreid($entity);
                if($slice->getSlice()>0 ) {
                    $slice->setPriceht(($slice->getSlice()*$entity->getPrice())/100);
                }
                else if($slice->getPriceht()>0) {
                    $slice->setSlice((100*$slice->getPriceht())/$entity->getPrice());
                }
                else {
                    $slice->setSlice(100/count($entity->getSlices()));
                    $slice->setPriceht(($slice->getSlice()*$entity->getPrice())/100);
                }

                //$totalSlice+=$slice->getSlice();
                //$totalSlicePriceHt+=$slice->getPriceht();
                $em->persist($slice);
            }
            //$entity->setTotalSlice($totalSlice);
            //$entity->setTotalSlicePriceht($totalSlicePriceHt);
            if($entity->getTotalSlicePriceht()!=$entity->getPrice() || $entity->getTotalSlice()!=100 ) {

                $errors[]=array('entity'=>$entity,"description"=>"Price error");
            }
            if(count($errors)>0) {
                foreach($errors as $error) {
                    $entity=$error['entity'];
                     $issue=new Issue();
                     $issue->setDescription($error['description']);
                     $em->persist($issue);
                     $entity->addIssue($issue);
                }
            }





            $em->persist($entity);
            $em->flush();

            return $entity;
    }


    public function postPersist() {
        $entity=$this->entity;
        $em=$this->em;
        $this->changeReference();
        $em->persist($entity);
        $em->flush();
    }


    function createJob() {
        $entity=$this->entity;
        $em=$this->em;
        $job=new \Caravane\Bundle\OrganicBundle\Entity\Job;

        $job->setEventdate($entity->getEventdate());
        $job->setInsertdate(new \Datetime('now'));
        $job->setUpdatedate(new \Datetime('now'));
        
        $job->setOffretype($entity->getOffretype());
        $job->setPlanningcomments($entity->getPlanningcomments());
        $job->setOffrecomments($entity->getOffrecomments());
        $job->setSurface($entity->getSurface());
        $job->setStartbuild($entity->getStartbuild());
        $job->setEndbuild($entity->getEndbuild());

        $job->setBuilddate($entity->getBuilddate());
        $job->setEndbuilddate($entity->getEndbuilddate());
        $job->setUnbuilddate($entity->getUnbuilddate());
        $job->setStartunbuilddate($entity->getStartunbuilddate());
        $job->setPreviewdate($entity->getPreviewdate());
        $job->setPreviewUser($entity->getPreviewUser());
        $job->setBuildUser($entity->getBuildUser());
        $job->setUnbuildUser($entity->getUnbuildUser());


        //$job->setBuildnotes($entity->getBuildnotes());
        $job->setRequestdate($entity->getRequestdate());
        $job->setStatus('ok');
        $job->setPricetype($entity->getPricetype());
        $job->setPrice($entity->getPrice());
        $job->setPricecomments($entity->getPricecomments());
        $job->setConditions($entity->getConditions());
        $job->setConditionsslices($entity->getConditionsslices());
        $job->setTentscomments($entity->getTentscomments());
        $job->setAddress($entity->getAddress());
        $job->setNumber($entity->getNumber());
        $job->setZip($entity->getZip());
        $job->setCity($entity->getCity());
        $job->setCountry($entity->getCountry());
        $job->setContact($entity->getContact());
        $job->setPhone($entity->getPhone());
        $job->setPhone2($entity->getPhone2());
        $job->setMobile($entity->getMobile());
        $job->setFax($entity->getFax());
        $job->setEmail($entity->getEmail());
        $job->setUrl($entity->getUrl());
        $job->setComments($entity->getComments());
        $job->setLanguage($entity->getLanguage());
        $job->setUserid($entity->getUserid());
        $job->setClientid($entity->getClientid());

         $job->setOffreid($entity);
       // $job->setOffreid($entity);
        $job->setPublic(true);
        $job->setReference('temp');

        $em->persist($job);

        foreach($entity->getTents2offre() as $t2o) {
            $tent2job=new \Caravane\Bundle\OrganicBundle\Entity\Tent2Job;
            $tent2job->setEtat($t2o->getEtat());
            $tent2job->setPlancher($t2o->getPlancher());
            $tent2job->setSurfaceplancher($t2o->getSurfaceplancher());
            $tent2job->setSol($t2o->getSol());
            $tent2job->setCanalisation($t2o->getCanalisation());
            $tent2job->setOther($t2o->getOther());
            $tent2job->setJobid($job);
            $tent2job->setTentid($t2o->getTentid());
            $em->persist($tent2job);
        }
/*
        foreach($entity->getPlannings() as $p) {
            $planning2job=new \Caravane\Bundle\OrganicBundle\Entity\Planning2job;
            $planning2job->setPlanningtype($p->getPlanningtype());
            $planning2job->setStartdate($p->getStartdate());
            $planning2job->setEnddate($p->getEnddate());
            $planning2job->setEtat($p->getEtat());
            $planning2job->setJobid($job);
            $planning2job->setUserid($p->getUserid());
            $em->persist($planning2job);
        }
*/
        foreach($entity->getSlices() as $p) {
            $slice2job=new \Caravane\Bundle\OrganicBundle\Entity\Slice2job;
            $slice2job->setSliceid($p->getSliceid());
            $slice2job->setSlice($p->getSlice());
            $slice2job->setPriceht($p->getPriceht());
            $slice2job->setComments($p->getComments());
            $slice2job->setStatus($p->getStatus());
            $slice2job->setJobid($job);
            $em->persist($slice2job);
        }

        foreach($entity->getProducts() as $p) {
            if($p->getIsoption()==false) {
                $product2job=new \Caravane\Bundle\OrganicBundle\Entity\Product2job;
                $product2job->setDescription($p->getDescription());
                $product2job->setPrice($p->getPrice());
                $product2job->setInsertdate(new \Datetime('now'));
                $product2job->setUpdatedate(new \Datetime('now'));
                $product2job->setRank($p->getRank());
                $product2job->setDatas($p->getDatas());
                $product2job->setTentid($p->getTentid());
                $product2job->setJobid($job);
                $em->persist($product2job);
            }

        }
        $entity->setJobid($job);
      $em->flush();


        return $job;

    }

    public function getIssues() {
        $entity=$this->entity;
        $this->issueManager->loadEntity($entity);
        $this->issueManager->getConflictIssues("Offre","Offre");
        $this->issueManager->getConflictIssues("Offre","Job");


    }

}


?>
