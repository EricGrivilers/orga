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


	public function listAll($type=null,$ob=null,$page=1,$startDate,$endDate,$jobs=null,$offres=null,$offset=25, $category=null) {
		$this->type=$type;
		$this->ob=$ob;
		$this->page=$page;

        if($category=='free') {

        }
		if($type=='free') {
			return $this->getFree(false,$startDate,$endDate,array('offre'=>true,'job'=>true,'offres'=>$offres,'jobs'=>$jobs,'page'=>$page, 'category'=>$category));
		}
		if($type=='reserved') {
			return $this->getFree(true,$startDate,$endDate,array('offre'=>false,'job'=>true,'offres'=>$offres,'jobs'=>$jobs,'page'=>$page, 'category'=>$category));
		}
		if($type=='option') {
			return $this->getFree(true,$startDate,$endDate,array('offre'=>true,'job'=>false,'offres'=>$offres,'jobs'=>$jobs,'page'=>$page, 'category'=>$category));
		}

		$dql = "SELECT T FROM CaravaneOrganicBundle:Tent T ";
		$dql.=" WHERE T.public=1 ";
        if($category) {
            $dql.=" AND T.productCategory = ".$category;
            if($cat=$this->getEntityManager()->getRepository('CaravaneOrganicBundle:ProductCategory')->find($category)) {
                if($cat->getFloor()) {
                    return $this->findFloors($cat);
                }
            }
        }
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
                       ->setFirstResult(($page-1)*$offset)
                       ->setMaxResults($offset);

		$entities = new Paginator($query, $fetchJoinCollection = true);


		//return array('entities'=>$paginator);
		return $entities;
	}





	public function getFree($in=true, \Datetime $startDate=null,\Datetime $endDate=null,$options=array('job'=>true,'offre'=>true,'jobs'=>null,'offres'=>null)) {

		if(isset($options['page'])) {
			$page=$options['page'];
		}
		else {
			$page=$this->page;
		}


		if(is_null($startDate) && is_null($endDate)) {
			$startDate=new \Datetime();
			$endDate=new \Datetime();
		}

		$em=$this->getEntityManager();

		$dql="SELECT T FROM CaravaneOrganicBundle:Tent T ";
		$dql.=" WHERE T.public=1 ";

		//if($jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate)) {


		$usedTents=array();
		if(isset($options['exclude'])) {
			$usedTents=$options['exclude'];
		}
		if($options['job']==true) {
			foreach($options['jobs'] as $job) {
				foreach($job->getProducts() as $tent2job) {
					if($tent2job->getTentid()) {
						$usedTents[]=$tent2job->getTentid()->getId();
					}

				}

			}
		}
		if($options['offre']==true) {
			foreach($options['offres'] as $offre) {
				foreach($offre->getProducts() as $tent2offre) {
					if($tent2offre->getTentid()) {
						$usedTents[]=$tent2offre->getTentid()->getId();
					}

				}

			}
		}
		if(isset($options['ob'])) {
			$ob=$options['ob'];
			$this->ob=$ob;

		}

		$usedTents=array_unique($usedTents);
		if($usedTents) {
			if($in==true) {
				$dql.=" AND T.id IN (".implode(",",$usedTents).") ";
			}
			else {

				$dql.=" AND T.id NOT IN (".implode(",",$usedTents).") ";
			}
		}


		if(isset($options['category'])) {
			$dql.=" AND T.productCategory='".$options['category']->getId()."' ";
		}
		if(isset($options['ownerid'])) {
			if($options['ownerid']==0) {
				$dql.=" AND T.ownerid IS NULL ";
			}

		}
		//}

		if($this->ob) {
			$dql.=" ORDER BY T.".$this->ob." ";
		}



		$query = $this->getEntityManager()->createQuery($dql);

		//	$query->setFirstResult(($page-1)*25)
        //               ->setMaxResults(25);


		$tents = new Paginator($query, $fetchJoinCollection = true);

		return $tents;
	}


	public function getByJobByDate($tent,\Datetime $startDate=null,\Datetime $endDate=null) {
		$jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate);
		$usedInJob=array();
		foreach($jobs as $job) {
				foreach($job->getProducts() as $tent2job) {
					if($tent2job->getTentid()==$tent->getId()) {
						$usedInJob[]=$job;
					}

				}

			}
			return $usedInJob;
	}

	public function getEtats() {
		$em=$this->getEntityManager();
		$dql="SELECT T FROM CaravaneOrganicBundle:Tent T ";
		$dql.=" WHERE T.public=1 GROUP BY T.etat ORDER BY T.etat";
		$query = $this->getEntityManager()->createQuery($dql);
		$tents=$query->getResult();
		$etats=array();
		foreach($tents as $tent) {
			$etats[]=$tent->getEtat();
		}
		return $etats;
	}

	public function getCategories() {
		$em=$this->getEntityManager();
		$dql="SELECT P FROM CaravaneOrganicBundle:Productcategory P ";
		$dql.=" GROUP BY P.name ORDER BY P.name";
		$query = $this->getEntityManager()->createQuery($dql);
		$result=$query->getResult();
		$categories=array();
		foreach($result as $category) {
			$categories[$category->getId()]=$category->getName();
		}
		return $categories;
	}



    public function findFloors($category) {
        $floors=$this->findBy(array('productCategory'=>$category));
        $entities=array();
        foreach($floors as $entity) {
            $entities[($entity->getWidth()*100)."x".($entity->getLength()*100)][]=$entity;
        }
        return $entities;
    }

}
