<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {

    	if(!$this->get('security.context')->isGranted('ROLE_USER', $this->getUser())) {
    		
    		return $this->redirect($this->generateUrl('fos_user_security_login'));
    	}
    	return $this->render('CaravaneOrganicBundle:Dashboard:index.html.twig', array());
    }
}
