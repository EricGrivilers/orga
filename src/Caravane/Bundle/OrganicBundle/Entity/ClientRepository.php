<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null) {
		$dql = "SELECT C FROM CaravaneOrganicBundle:Client C ";
		if($type) {
			switch($type) {
				case 'owner':
					$dql.=" WHERE SIZE(C.tents) > 0 ";
				break;
				case 'renter':
					$dql.=" WHERE SIZE(C.tents) = 0 ";
				break;

				default:
					$dql.=" WHERE C.clienttype='".$type."' ";
				break;
			}
			
		}
		if($ob) {
			$dql.=" ORDER BY C.".$ob." ";
		}
		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(0)
                       ->setMaxResults(25);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}
}
