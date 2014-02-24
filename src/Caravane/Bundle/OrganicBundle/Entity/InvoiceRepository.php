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

/**/
	}



	public function autocomplete($keyword,$controller,$type=null) {

		$query = $this->getEntityManager()->createQuery("
			SELECT C FROM CaravaneOrganicBundle:Invoice C
			WHERE LOWER(C.reference) LIKE ?1
			OR LOWER(C.name) LIKE ?1
			OR LOWER(C.firstname) LIKE ?1
			OR LOWER(C.lastname) LIKE ?1
			OR LOWER(C.vat) LIKE ?1
			ORDER BY C.reference"
		);
		$query->setParameter(1,  '%'.strtolower($keyword).'%');

		$result=$query->getResult();
		$invoices=array();
		foreach($result as $invoice) {
			if(!$name=$invoice->getName()) {
				$name=$invoice->getFirstname()." ".$invoice->getLastname();
			}
			$invoices[]="<li class='invoice'>inv <a href=\"".$controller->generateUrl('invoice_edit',array('id'=>$invoice->getId()))."\" >".$invoice->getReference()." (".$name.")</a></li>";
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

	public function findDues($step=1, $delta=15) {
		$today=new \Datetime();
		$today->modify('-'.$delta.' days');
		$sql="SELECT C FROM CaravaneOrganicBundle:Invoice C
				WHERE C.reference!=''
				AND C.status!='paid'
				AND C.priceht>0
				AND ( C.paymentdate='0000-00-00' OR C.paymentdate IS NULL) ";


		switch($step) {
			default:
			case 1:
				$sql.="
				AND C.invoicedate<?1
				AND C.r1=0
				AND ( C.r1date='0000-00-00' OR C.r1date IS NULL) ";
			break;

			case 2:
				$sql.="
				AND C.r1=1
				AND C.r1date<?1
				AND C.r1date!='0000-00-00' AND C.r1date IS NOT NULL
				AND C.r2=0
				AND ( C.r2date='0000-00-00' OR C.r2date IS NULL) ";
			break;

			case 3:
				$sql.="
				AND C.r1=1
				AND C.r2date<?1
				AND C.r1date!='0000-00-00' AND C.r1date IS NOT NULL
				AND C.r2=1
				AND C.r2date!='0000-00-00' AND C.r2date IS NOT NULL
				AND C.med=0
				AND ( C.meddate='0000-00-00' OR C.meddate IS NULL) ";
			break;

		}

		$sql.="ORDER BY C.reference";

echo $sql;
		//echo $today->format('Y-m-d')."<br/>";
		//echo htmlentities($sql)."<br/><br/>";
		$query = $this->getEntityManager()->createQuery($sql);
		$query->setParameter(1,  $today->format('Y-m-d'));
		$invoices=$query->getResult();
		return $invoices;
	}

}
