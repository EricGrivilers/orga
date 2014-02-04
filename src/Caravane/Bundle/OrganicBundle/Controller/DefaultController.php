<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

    	return $this->redirect($this->generateUrl('dashboard'));
        //return $this->render('CaravaneOrganicBundle:Default:index.html.twig', array());
    }
}
