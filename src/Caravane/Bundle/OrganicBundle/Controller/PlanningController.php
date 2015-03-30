<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Planning;
use Caravane\Bundle\OrganicBundle\Form\PlanningType;

use Caravane\Bundle\OrganicBundle\Managers\ExportManager;


/**
 * Planning controller.
 *
 */
class PlanningController extends Controller
{
    /**
     * Lists all Planning entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users=$em->getRepository('CaravaneUserBundle:User')->findAll();
/*
        $entities = $em->getRepository('CaravaneOrganicBundle:Planning')->findAll();

        return $this->render('CaravaneOrganicBundle:Planning:index.html.twig', array(
            'entities' => $entities,
        ));
        */
        $request=$this->getRequest();
        $user=$this->getUser();
        if($request->query->get('user')) {
            if($request->query->get('user')=='any') {
                $user=null;
            }
            else {
                if(!$user=$em->getRepository('CaravaneUserBundle:User')->find($request->query->get('user'))) {
                   $user=$this->getUser();
                };
            }
        }
         return $this->render('CaravaneOrganicBundle:Planning:index.html.twig', array(
            'user' => $user,
            "users"=>$users,
            'show_inplace'=>$request->query->get('show_inplace')
        ));

    }

    /**
     * Finds and displays a Planning entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Planning:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Planning entity.
     *
     */
    public function newAction()
    {
        $entity = new Planning();
        $form   = $this->createForm(new PlanningType(), $entity);

        return $this->render('CaravaneOrganicBundle:Planning:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Planning entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Planning();
        $form = $this->createForm(new PlanningType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planning_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Planning:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Planning entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $editForm = $this->createForm(new PlanningType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Planning:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Planning entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlanningType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planning_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Planning:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Planning entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Planning entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('planning'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }


    public function loadEventsAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $startDatetime = new \DateTime();
        $startDatetime->setTimestamp($request->get('start'));

        $endDatetime = new \DateTime();
        $endDatetime->setTimestamp($request->get('end'));

        //$events = $this->container->get('event_dispatcher')->dispatch(CalendarEvent::CONFIGURE, new CalendarEvent($startDatetime, $endDatetime))->getEvents();
        $jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDatetime,$endDatetime);

        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->headers->set('Content-Type', 'application/json');

        $userId=$request->get('user');

        $user=$this->getUser();
        if($userId>0) {
            if(!$user=$em->getRepository('CaravaneUserBundle:User')->find($userId)) {
                $user=$this->getUser();
            }
        }



        $return_events = array();

        foreach($jobs as $job) {
            $users=array();
            $users[]=$job->getUserid();
            foreach($job->getPlannings() as $p) {
                $users[]=$p->getUserid();
            }
            if(in_array($user,$users) || $request->get('user')=='any') {
                $hasInplace=false;
                foreach($job->getPlannings() as $p) {
                    if($p->getPlanningtype()!="inplace" ) {
                        if($p->getStartdate() && $p->getEnddate() ) {
                            $return_events[] = array(
                                'start'=>$p->getStartdate()->format("Y-m-d\TH:i:sP"),
                                'end'=>$p->getEnddate()->format("Y-m-d\TH:i:sP"),
                                'className'=>$p->getPlanningtype()." ".$job->getOffreType(),
                                'title'=>$p->getStartdate()->format("H:i")." - ".$job->getReference(),
                                'client'=>$job->getClientid()->getName(),
                                'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                                'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                            );
                            if($p->getPlanningtype()=="build") {
                                $startBuild=$p->getStartdate();

                            }
                             if($p->getPlanningtype()=="unbuild") {
                                $startUnbuild=$p->getStartdate();
                            }
                        }

                        
                    }
                }
                if($request->query->get('show_inplace')=='true') {
                    $return_events[] = array(
                        'start'=>$startBuild->format("Y-m-d\TH:i:sP"),
                        'end'=>$startUnbuild->format("Y-m-d\TH:i:sP"),
                        'className'=>'inplace',
                        'title'=>$job->getReference(). " inplace",
                        'client'=>$job->getClientid()->getName(),
                        'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                        'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                    );
                }

            }
                /*
                $return_events[] = array(
                    'start'=>$job->getStartbuild()->format("Y-m-d\TH:i:sP"),
                    'end'=>$job->getEndbuild()->format("Y-m-d\TH:i:sP"),
                    'title'=>$job->getReference(),
                    'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId()))
                );
                */

        }

        $response->setContent(json_encode($return_events));

        return $response;
    }
}
