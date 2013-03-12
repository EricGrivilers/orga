<?php

namespace Caravane\DevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("updateTable")
     * @Template()
     */
    public function updateTableAction()
    {
        $em = $this -> getDoctrine() -> getEntityManager();
        $conn = $this->get('database_connection');

        $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAll();

        foreach($offres as $offre) {
        	if($job=$em->getRepository('CaravaneOrganicBundle:Job')->findOneBy(array('toffreid'=>$offre->getId()))) {
        		echo $offre->getId()." // ".$job->getId()."<br/>";
        		$offre->setJobId($job);
        		$em->persist($offre);
        	}
        }
        $em->flush();

		//$sql="update NodeTypeRawHtml set content = replace(content,'http://www.etno.caravanemedia.net/','/')";
		//$result = $conn->query($sql);
		return array();
    }


     /**
     * @Route("fill_slice2invoice")
     * @Template()
     */
    public function fillSlice2InvoiceAction() {
        $em = $this -> getDoctrine() -> getEntityManager();
        $invoices=$em->getRepository('CaravaneOrganicBundle:Invoice')->findAll();

        foreach($invoices as $invoice) {
           
                if($slice=$em->getRepository('CaravaneOrganicBundle:Slice2job')->findOneby(array('invoiceid'=>$invoice->getId(),'sliceid'=>$invoice->getCslice()))) {
                    echo "yes ".$slice->getId()."<br/>";
                    $invoice->setSliceid($slice);
                    $invoice->setSliceDescription($slice->getComments());
                    $em->persist($slice);
                }
                
            
        }
        $em->flush();
        return array();
        
    }
}
