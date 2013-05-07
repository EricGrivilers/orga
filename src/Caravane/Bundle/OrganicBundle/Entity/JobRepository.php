<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class JobRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1,$offset=25) {
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
                       ->setFirstResult(($page-1)*$offset)
                       ->setMaxResults($offset);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}



	public function findAllBetweenDates(\Datetime $startDate=null,\Datetime $endDate=null) {
		
		$em=$this->getEntityManager();

		$dql="SELECT J FROM CaravaneOrganicBundle:Job J ";
		$dql.=" WHERE J.public=1 ";
		$dql.=" AND (J.startbuild BETWEEN '".$startDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."') ";
		$dql.=" OR (J.endbuild BETWEEN '".$startDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."') ";
		$dql.=" OR (J.startbuild <= '".$startDate->format('Y-m-d H:i:s')."' AND J.endbuild >= '".$endDate->format('Y-m-d H:i:s')."') ";
		
		$query = $this->getEntityManager()->createQuery($dql);
		$jobs=$query->getResult();
		return $jobs;
	}
}


