<?php

namespace Caravane\Bundle\OrganicBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * PllaningRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Planning2JobRepository extends EntityRepository
{

	public function findAllByMonth($month=null) {


		$qb = $this->getEntityManager()->getRepository("CaravaneOrganicBundle:Planning2Job")->createQueryBuilder('O')
		  ->select("O");
		   if($month) {
		  	$qb->where("O.startdate LIKE '%".$month."%' OR O.enddate LIKE '%".$month."%'");
		  }
		  $qb->addOrderBy("O.startdate","asc");
		$query=  $qb->getQuery();



		$entities = $query->getResult();
		return $entities;
	}
}
