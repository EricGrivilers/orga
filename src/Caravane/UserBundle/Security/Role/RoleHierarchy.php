<?php

namespace Caravane\UserBundle\Security\Role;

use Symfony\Component\Security\Core\Role\RoleHierarchy as BaseRoleHierarchy;
use Doctrine\ORM\EntityManager;
use Caravane\UserBundle\Entity\Role;


class RoleHierarchy extends BaseRoleHierarchy
{
    private $em;

    /**
     * @param array $hierarchy
     */
    public function __construct(array $hierarchy, EntityManager $em)
    {
    	//$this->hierarchy = $hierarchy;
    	//print_r($this->hierarchy);
        $this->em = $em;
        //$this->hierarchy=$this->buildRolesTree();
        parent::__construct($this->buildRolesTree($hierarchy));
      //  print_r($this->hierarchy);
    }

    /**
     * Here we build an array with roles. It looks like a two-levelled tree - just 
     * like original Symfony roles are stored in security.yml
     * @return array
     */
    private function buildRolesTree($hierarchy)
    {
        //$hierarchy = $this->hierarchy;
        //$hierarchy = array();
        $roles=$this->em->getRepository('CaravaneUserBundle:Role')->findAll();
        //$roles = $this->em->createQuery('select r from CaravaneUserBundle:Role r')->execute();
        foreach ($roles as $role) {
            /** @var $role Role */
            if ($role->getParent()) {
                if (!isset($hierarchy[$role->getParent()->getName()])) {
                    $hierarchy[$role->getParent()->getName()] = array();
                }
                $hierarchy[$role->getParent()->getName()][] = $role->getName();
            } else {
                if (!isset($hierarchy[$role->getName()])) {
                    $hierarchy[$role->getName()] = array();
                }
            }
        }

        //print_r($hierarchy);
        $this->hierarchy=$hierarchy;
        return $hierarchy;
    }
}


?>