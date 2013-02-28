<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
/**
 * OffreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OffreRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1) {
		$dql = "SELECT O FROM CaravaneOrganicBundle:Offre O ";
		
		$dql.=" WHERE O.public=1 ";
		if($type) {
			switch($type) {
				case 'canceled':
					$dql.=" AND (O.status='cancel' OR O.status='ANNULÉ') ";
				break;
				case 'confirmed':
					$dql.=" AND O.jobid IS NOT NULL ";
				break;
				case 'running':
					$dql.=" AND (O.status!='ok' OR O.status!='draft' OR O.status='') AND O.jobid IS NULL ";
				break;
				

				
			}
			
		}
		
		if($ob) {
			$dql.=" ORDER BY O.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($page-1)*25)
                       ->setMaxResults(25);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}


	public function findAllBetweenDates(\Datetime $startDate=null,\Datetime $endDate=null) {
		
		$em=$this->getEntityManager();

		$dql="SELECT O FROM CaravaneOrganicBundle:Offre O ";
		$dql.=" WHERE O.public=1 ";
		$dql.=" AND O.startbuild BETWEEN '".$startDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
		$dql.=" OR O.endbuild BETWEEN '".$startDate->format('Y-m-d H:i:s')."' AND '".$endDate->format('Y-m-d H:i:s')."' ";
		$dql.=" OR O.startbuild <= '".$startDate->format('Y-m-d H:i:s')."' AND O.endbuild >= '".$endDate->format('Y-m-d H:i:s')."' ";
		$query = $this->getEntityManager()->createQuery($dql);
		$offres=$query->getResult();
		return $offres;
	}
}
