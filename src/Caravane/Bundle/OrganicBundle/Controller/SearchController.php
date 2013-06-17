<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Invoice;
use Caravane\Bundle\OrganicBundle\Form\InvoiceType;

use Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use Caravane\Bundle\OrganicBundle\Managers\InvoiceManager;
use Caravane\Bundle\OrganicBundle\Managers\PdfManager;

/**
 * Search controller.
 *
 */
class SearchController extends Controller
{
	public function indexAction($query) {


		$finder = $this->container->get('fos_elastica.index.appli.invoice');
        $contacts = $finder->search($query);
echo count($contacts);
return array();
	}


  public function searchAction($query) {
    $result='';
      $em=$this->getDoctrine()->getManager();
      $query=strtolower($query);
      $clients=$em->getRepository('CaravaneOrganicBundle:Client')->autocomplete($query,$this);
      $invoices=$em->getRepository('CaravaneOrganicBundle:Invoice')->autocomplete($query,$this);
       $jobs=$em->getRepository('CaravaneOrganicBundle:Job')->autocomplete($query,$this);
       $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->autocomplete($query,$this);

       $result.=implode('',$clients);
       $result.=implode('',$invoices);
       $result.=implode('',$jobs);
       $result.=implode('',$offres);

         return new Response("<ul>".$result."</ul>");
  }

}
