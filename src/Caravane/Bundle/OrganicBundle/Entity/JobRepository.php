<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class JobRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1) {
		$dql = "SELECT C FROM CaravaneOrganicBundle:Job C ";
		$dql.=" WHERE C.public=1 ";
		/*if($type) {
			switch($type) {
				case 'owner':
					$dql.=" AND SIZE(C.tents) > 0 ";
				break;
				case 'renter':
					$dql.=" AND SIZE(C.tents) = 0 ";
				break;

				default:
					$dql.=" AND C.clienttype='".$type."' ";
				break;
			}

		}
		*/
		if($ob) {
			$dql.=" ORDER BY C.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($page-1)*25)
                       ->setMaxResults(25);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}
}
