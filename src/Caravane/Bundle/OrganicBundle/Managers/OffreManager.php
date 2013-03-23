<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Offre;

class OffreManager
{
    protected $em;
    protected $entity;

    public function __construct(Offre $entity,$em)
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


    public function persist() {
            $entity=$this->entity;
            $em=$this->em;

            $issue=0;

            $entity->setReference('temp');
            $entity->setLanguage($entity->getClientid()->getLanguage());
            //
            $entity->setInsertdate(new \Datetime('now'));
            $entity->setUpdatedate(new \Datetime('now'));

            foreach($entity->getPlannings() as $planning) {
                $planning->setOffreid($entity);
                $em->persist($planning);
            }

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
                    $slice->setSlice(100/count($entity.getSlices()));
                    $slice->setPriceht(($slice->getSlice()*$entity->getPrice())/100);
                }

                //$totalSlice+=$slice->getSlice();
                //$totalSlicePriceHt+=$slice->getPriceht();
                $em->persist($slice);
            }
            //$entity->setTotalSlice($totalSlice);
            //$entity->setTotalSlicePriceht($totalSlicePriceHt);
            if($entity->getTotalSlicePriceht()!=$entity->getPrice() || $entity->getTotalSlice()!=100 ) {
                $issue++;
            }

            $entity->setIssue($issue);




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

    public function setReference() {

        $entity=$this->entity;
        $em=$this->em;

        if($entity->getReference()=='temp') {
            $entity->setReference(date('Ym')."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$entity->getUserid()->getIso());

        }

        return $entity->getReference();
    }

}


?>
