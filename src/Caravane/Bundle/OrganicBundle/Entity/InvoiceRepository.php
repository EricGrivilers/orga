<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class InvoiceRepository extends EntityRepository
{

	public function listAll($type=null,$ob=null,$page=1,$offset,$search=null) {
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
		if($search) {
			$dql.=" AND (I.reference LIKE ?1 OR I.name LIKE ?1 OR I.lastname LIKE ?1 OR I.firstname=?1 OR I.priceht LIKE ?1 ) ";
		}
		if($ob) {
			$dql.=" ORDER BY I.".$ob." ";
		}

		$query = $this->getEntityManager()->createQuery($dql);
        if($search) {
        	$query->setParameter('1','%'.$search.'%');
        }

        $query->setFirstResult(($page-1)*$offset)
                       ->setMaxResults($offset);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}


	public function getNewReference($year) {
		//if(is_null($year)) {
			$year=date('Y');
		//}


		$dql = "SELECT I.reference FROM CaravaneOrganicBundle:Invoice I ";
		$dql.=" WHERE I.year='".$year."' AND I.reference IS NOT NULL AND I.reference!='' GROUP BY I.reference ";
		
		$query = $this->getEntityManager()->createQuery($dql);
		$invoices=$query->getResult();
		
		$reference=$year."-".str_pad(count($invoices)+1, 4, "0", STR_PAD_LEFT);
		
		return $reference;
		
	}


	public function getConditions(){
		$dql = "SELECT I.conditions FROM CaravaneOrganicBundle:Invoice I GROUP BY I.conditions";
		$query = $this->getEntityManager()->createQuery($dql);
		return $query->getResult();

	}
}
