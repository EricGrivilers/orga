<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Client;

class ClientManager
{
    protected $em;
    protected $client;

    public function __construct(Client $client,$em)
    {
        $this->em=$em;
    	$this->client = $client;
        
    }
    

    public function persist() {
        $entity=$this->client;
        $entity->setReference('temp');
        $entity->setInsertDate(new \Datetime("now"));
        $entity->setUpdateDate(new \Datetime("now"));
        $entity->setPublic(true);
        $this->em->persist($entity);
        $this->em->flush();
        $entity->setReference(strtoupper(substr($entity->getClientType(),0,1))."-".strtoupper(substr(preg_replace('/ /','',$entity->getName()),0,5))."-".$entity->getId());
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }



}


?>