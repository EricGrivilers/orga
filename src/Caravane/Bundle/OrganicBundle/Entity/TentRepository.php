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
class TentRepository extends EntityRepository
{
	private $type;
	private $ob;
	private $page;


	public function listAll($type=null,$ob=null,$page=1) {
		$this->type=$type;
		$this->ob=$ob;
		$this->page=$page;


		if($type=='free') {
			return $this->getFree(true);
		}
		if($type=='reserved') {
			return $this->getFree(false);
		}
		$dql = "SELECT T FROM CaravaneOrganicBundle:Tent T ";
		$dql.=" WHERE T.public=1 ";
		if($type) {
			switch($type) {
				case "winter":
					$dql.=" AND  T.winter=1 ";
				break;
				
			}
			
		}
		
		if($ob) {
			$dql.=" ORDER BY T.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($page-1)*25)
                       ->setMaxResults(25);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}





	public function getFree($free=true, \Datetime $startDate=null,\Datetime $endDate=null) {
		if(is_null($startDate) && is_null($endDate)) {
			$startDate=new \Datetime();
			$endDate=new \Datetime();
		}

		$em=$this->getEntityManager();

		$dql="SELECT T FROM CaravaneOrganicBundle:Tent T ";
		$dql.=" WHERE T.public=1 ";

		//if($jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate)) {
		$jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate);
		$offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($startDate,$endDate);
			$usedTents=array();
			foreach($jobs as $job) {
				foreach($job->getTents2job() as $tent2job) {
					if($tent2job->getTentid()) {
						$usedTents[]=$tent2job->getTentid()->getId();
					}
					
				}
				
			}
			foreach($offres as $offre) {
				foreach($offre->getTents2offre() as $tent2offre) {
					if($tent2offre->getTentid()) {
						$usedTents[]=$tent2offre->getTentid()->getId();
					}
					
				}
				
			}
			$usedTents=array_unique($usedTents);
			if($usedTents) {
				if($free==true) {
					$dql.=" AND T.id NOT IN (".implode(",",$usedTents).") ";
				}
				else {
					$dql.=" AND T.id IN (".implode(",",$usedTents).") ";
				}
			}
			
			
		//}
		if($this->ob) {
			$dql.=" ORDER BY T.".$this->ob." ";
		}
		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($this->page-1)*25)
                       ->setMaxResults(25);

		$tents = new Paginator($query, $fetchJoinCollection = true);

		return $tents;
	}


	public function getByJobByDate($tent,\Datetime $startDate=null,\Datetime $endDate=null) {
		$jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate);
		$usedInJob=array();
		foreach($jobs as $job) {
				foreach($job->getTents2job() as $tent2job) {
					if($tent2job->getTentid()==$tent->getId()) {
						$usedInJob[]=$job;
					}
					
				}
				
			}
			return $usedInJob;
	}

	
}
