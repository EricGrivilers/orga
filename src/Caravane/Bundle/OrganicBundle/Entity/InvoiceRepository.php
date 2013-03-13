<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class InvoiceRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1) {
		$dql = "SELECT I FROM CaravaneOrganicBundle:Invoice I ";
		$dql.=" WHERE 1=1 ";
		if($type) {
			switch($type) {
				case 'open':
					$dql.=" AND I.status='ok' ";
				break;
				case 'paid':
					$dql.=" AND I.status='paid' ";
				break;
				case 'draft':
					$dql.=" AND I.status='draft' ";
				break;

				default:
					$dql.="  ";
				break;
			}

		}
		if($ob) {
			$dql.=" ORDER BY I.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql)
                       ->setFirstResult(($page-1)*25)
                       ->setMaxResults(25);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}


	public function getNewReference($year) {
		if(is_null($year)) {
			$year=date('Y');
		}


		$dql = "SELECT I.reference FROM CaravaneOrganicBundle:Invoice I ";
		$dql.=" WHERE I.year='".$year."' AND I.reference IS NOT NULL AND I.reference!='' GROUP BY I.reference ";
		
		$query = $this->getEntityManager()->createQuery($dql);
		$invoices=$query->getResult();
		
		$reference=$year."-".str_pad(count($invoices)+1, 4, "0", STR_PAD_LEFT);
		
		return $reference;
		
	}
}
