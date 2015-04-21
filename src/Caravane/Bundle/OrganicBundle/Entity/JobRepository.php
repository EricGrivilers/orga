<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class JobRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1,$offset=25, $userId=null) {
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
		if($userId) {
			$dql.=" AND C.userid = ".$userId." ";
		}
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
		if(!$startDate || !$endDate) {
			return array();
		}
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



	public function autocomplete($keyword,$controller,$type=null) {

		$query = $this->getEntityManager()->createQuery("
			SELECT C FROM CaravaneOrganicBundle:Job C
			WHERE LOWER(C.reference) LIKE ?1
			ORDER BY C.reference"
		);
		$query->setParameter(1,  '%'.strtolower($keyword).'%');

		$result=$query->getResult();
		$invoices=array();
		foreach($result as $invoice) {
			if($invoice->getClientId()) {
				$name=$invoice->getClientid()->getname();
			}
			$invoices[]="<li class='job'>job <a href=\"".$controller->generateUrl('job_edit',array('id'=>$invoice->getId()))."\" >".$invoice->getReference()." (".$name.")</a></li>";
		}
		switch($type) {
			default:
				return $invoices;
			break;
			case 'json':
				return json_encode($invoices);
			break;
		}

	}


    public function findAllByMonth($month=null) {


        $qb = $this->getEntityManager()->getRepository("CaravaneOrganicBundle:Job")->createQueryBuilder('O')
            ->select("O");
        if($month) {
            $qb->where("O.builddate LIKE '%".$month."%' OR O.unbuilddate LIKE '%".$month."%'");
        }
        $qb->addOrderBy("O.builddate","asc");
        $query=  $qb->getQuery();



        $entities = $query->getResult();
        return $entities;
    }
}


