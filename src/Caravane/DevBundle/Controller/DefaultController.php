<?php

namespace Caravane\DevBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
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


     /**
     * @Route("fill_product2offre")
     * @Template()
     */
    public function fillProduct2offreAction() {
        $em = $this -> getDoctrine() -> getEntityManager();
        $tent2offre=$em->getRepository('CaravaneOrganicBundle:Tent2offre')->findAll();

        foreach($tent2offre as $tent) {
            if($offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($tent->getOffreid())) {
                echo "offre: ".$offre->getId();
                echo "<br/>";
                if($tent->getTentid()) {
                    echo "tent:".$tent->getTentid()->getId();
                    echo "<br/>";
                    $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2offre();
                    $product->setOffreid($offre);
                    $product->setInsertdate(new \Datetime('now'));
                    $product->setUpdatedate(new \Datetime('now'));
                    $product->setIsoption(false);

                    $product->setDescription($tent->getTentid()->getName()."(".$tent->getTentid()->getReference().")");
                    $product->setTentid($tent->getTentid());
                    $datas=array();
                    $datas['etat']=$tent->getEtat();
                    $datas['plancher']=$tent->getPlancher();
                    $datas['surfaceplancher']=$tent->getSurfaceplancher();
                    $datas['sol']=$tent->getSol();
                    $datas['canalisation']=$tent->getCanalisation();
                    $datas['other']=$tent->getOther();
                    $product->setDatas(json_encode($datas));

                    $product->setPrice(0);

                  //  $em->persist($product);
                }


            }
        }
        $em->flush();
        return new Response('ok');

    }
}
