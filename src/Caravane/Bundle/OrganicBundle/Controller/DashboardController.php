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
            $em = $this->getDoctrine()->getManager();


            $messages=$em->getRepository('CaravaneOrganicBundle:Chat')->findBy(array('messagetype'=>'logs','target'=>5),array('messagedate'=>' desc'));
        $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findBy(array('userid'=>$this->getUser()->getId()),array('startbuild'=>' desc'));
        $jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findBy(array('userid'=>$this->getUser()->getId()),array('startbuild'=>' desc'));


    	return $this->render('CaravaneOrganicBundle:Dashboard:index.html.twig', array(
                'offres'=>$offres,
                'jobs'=>$jobs
                ,'messages'=>$messages
            ));
    }
}
