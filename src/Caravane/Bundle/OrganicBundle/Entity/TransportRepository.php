<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * TransportRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TransportRepository extends EntityRepository
{

	public function listAll($ob=null,$page=1,$offset=25) {
		$type=null;
		$dql = "SELECT O FROM CaravaneOrganicBundle:Transport O ";

		
		

		if($ob) {
			$dql.=" ORDER BY O.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($page-1)*$offset)
                       ->setMaxResults($offset);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}
}
