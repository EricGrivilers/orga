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
class PlanningRepository extends EntityRepository
{

	public function export() {


		$query = $this->getEntityManager()->getRepository("CaravaneOrganicBundle:Planning2Job")->createQueryBuilder('O')
		  ->select("IDENTITY(O.jobid)","O.planningtype, O.startdate, O.enddate, O2.planningtype, O2.startdate, O2.enddate, O3.planningtype, O3.startdate, O3.enddate, O4.planningtype, O4.startdate, O4.enddate")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Job", "O2", "WITH", "O.jobid=O2.jobid AND O2.planningtype='build' ")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Job", "O3", "WITH", "O.jobid=O3.jobid AND O3.planningtype='inplace' ")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Job", "O4", "WITH", "O.jobid=O4.jobid AND O4.planningtype='unbuild' ")
		  ->where("O.planningtype='preview'")
		  ->getQuery();



		$jobentities = $query->getResult();

	//print_r($jobentities);
	//die();


		$query = $this->getEntityManager()->getRepository("CaravaneOrganicBundle:Planning2Offre")->createQueryBuilder('O')
		  ->select("O")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Offre", "O2", "WITH", "O.offreid=O2.offreid AND O2.planningtype='build' ")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Offre", "O3", "WITH", "O.offreid=O3.offreid AND O3.planningtype='inplace' ")
		  ->leftJoin("CaravaneOrganicBundle:Planning2Offre", "O4", "WITH", "O.offreid=O4.offreid AND O4.planningtype='unbuild' ")
		  ->where("O.planningtype='preview'")
		  ->getQuery();



		$offreentities = $query->getResult();

		//return array('entities'=>$paginator);
		return new ArrayCollection(
			array_merge($jobentities, $offreentities)
		);

	}
}
