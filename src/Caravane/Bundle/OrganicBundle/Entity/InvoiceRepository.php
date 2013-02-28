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

				default:
					$dql.=" AND I.status='draft' ";
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
}
