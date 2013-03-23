<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Doctrine\ORM\Event\LifecycleEventArgs;

use Caravane\Bundle\OrganicBundle\Entity\Client;

class ClientManager
{
    protected $em;
    protected $client;

    public function __construct(Client $client=null,$em=null)
    {
        $this->em=$em;
    	$this->client = $client;

    }


    public function persistNew() {
        $entity=$this->client;
       /* if(!$entity->getReference()) {
            $entity->setReference('temp');
            $entity->setInsertdate(new \Datetime("now"));
            $entity->setUpdatedate(new \Datetime("now"));
            $entity->setPublic(true);
            $this->em->persist($entity);
            $this->em->flush();
            $entity->setReference(strtoupper(substr($entity->getClientType(),0,1))."-".strtoupper(substr(preg_replace('/ /','',$entity->getName()),0,5))."-".$entity->getId());
        }*/
        //$entity=$this->prePersist();
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }


    public function prePersist() {

        $entity=$this->client;
         if(!$entity->getReference()) {
            $entity->setReference('temp');
            $entity->setInsertdate(new \Datetime("now"));
            $entity->setUpdatedate(new \Datetime("now"));
            $entity->setPublic(true);
        }
        //return $entity;
    }

    public function postPersist() {

         $entity=$this->client;
         if($entity->getReference()=='temp') {
            $entity->setReference(strtoupper(substr($entity->getClientType(),0,1))."-".strtoupper(substr(preg_replace('/ /','',$entity->getName()),0,5))."-".$entity->getId());
            $this->em->persist($entity);
            $this->em->flush();
        }
    }


}


?>
