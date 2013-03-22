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
        $ta=explode('-',$entity->getReference());
        $entity->setReference($ta[0]."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$ta[3]);
       

        return $entity->getReference();
    }




}


?>