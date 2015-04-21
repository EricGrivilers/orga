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
        $users=$em->getRepository('CaravaneUserBundle:User')->findBy(array('enabled'=>true));
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
        $startDatetime = \DateTime::createFromFormat("Y-m-d", $request->get('start'));
        //$startDatetime = new \DateTime();
        //$startDatetime->setTimestamp($request->get('start'));

        $endDatetime = \DateTime::createFromFormat("Y-m-d", $request->get('end'));
        //$endDatetime = new \DateTime();
        //$endDatetime->setTimestamp($request->get('end'));

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
            $users[]=$job->getBuildUser();
            $users[]=$job->getUnbuildUser();
            /*foreach($job->getPlannings() as $p) {
                $users[]=$p->getUserid();
            }*/
            if(in_array($user,$users) || $request->get('user')=='any') {
                $hasInplace=false;
                //preview
                if($job->getPreviewdate()) {
                    $allDay=false;
                    $hour= $job->getPreviewdate()->format("H:i");
                    if($hour=='00:00' || $hour=='12:00') {
                        $allDay=true;
                    }
                    $return_events[] = array(
                        'start'=>$job->getPreviewdate()->format("Y-m-d\TH:i:sP"),
                        'end'=>$job->getPreviewdate()->format("Y-m-d\TH:i:sP"),
                        'allDay'=>$allDay,
                        'className'=>"preview ".$job->getOffreType(),
                        'title'=>$job->getReference(),
                        'client'=>$job->getClientid()->getName(),
                        'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                        'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                    );
                }




                //build
                $allDay=false;
                $hour= $job->getBuilddate()->format("H:i");
                if($hour=='00:00' || $hour=='12:00') {
                    $allDay=true;
                }
                $return_events[] = array(
                    'start'=>$job->getBuilddate()->format("Y-m-d\TH:i:sP"),
                    'end'=>$job->getEndbuilddate()->format("Y-m-d\TH:i:sP"),
                    'allDay'=>$allDay,
                    'className'=>"build ".$job->getOffreType(),
                    'title'=>$job->getReference(),
                    'client'=>$job->getClientid()->getName(),
                    'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                    'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                );


                //unbuild
                $allDay=false;
                $hour= $job->getStartunbuilddate()->format("H:i");
                if($hour=='00:00' || $hour=='12:00') {
                    $allDay=true;
                }
                $return_events[] = array(
                    'start'=>$job->getStartunbuilddate()->format("Y-m-d\TH:i:sP"),
                    'end'=>$job->getUnbuilddate()->format("Y-m-d\TH:i:sP"),
                    'allDay'=>$allDay,
                    'className'=>"unbuild ".$job->getOffreType(),
                    'title'=>$job->getReference(),
                    'client'=>$job->getClientid()->getName(),
                    'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                    'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                );


/*
                foreach($job->getPlannings() as $p) {
                    if($p->getPlanningtype()!="inplace" ) {
                        if($p->getStartdate() && $p->getEnddate() ) {
                            $return_events[] = array(
                                'start'=>$p->getStartdate()->format("Y-m-d\TH:i:sP"),
                                'end'=>$p->getEnddate()->format("Y-m-d\TH:i:sP"),
                                'allDay'=>($p->getStartdate()->format("H:i")=='00:00' || $p->getEnddate()->format("H:i")=='23:59')?true:false,
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
*/
                if($request->query->get('show_inplace')=='true') {
                    $return_events[] = array(
                        'start'=>$job->getStartunbuilddate()->format("Y-m-d\TH:i:sP"),
                        'end'=>$job->getStartunbuilddate()->format("Y-m-d\TH:i:sP"),
                        'allDay'=>true,
                        'className'=>"inplace ",
                        'title'=>$job->getReference(),
                        'client'=>$job->getClientid()->getName(),
                        'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                        'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                    );
                   /* $return_events[] = array(
                        'start'=>$startBuild->format("Y-m-d\TH:i:sP"),
                        'end'=>$startUnbuild->format("Y-m-d\TH:i:sP"),
                        'allDay'=>($startBuild->getStartdate()->format("H:i")=='00:00' || $startUnbuild()->format("H:i")=='23:59')?true:false,
                        'className'=>'inplace',
                        'title'=>$job->getReference(). " inplace",
                        'client'=>$job->getClientid()->getName(),
                        'url'=>$this->generateUrl('job_edit',array('id'=>$job->getId())),
                        'content'=>$this->renderView('CaravaneOrganicBundle:Job:popover.html.twig', array('job'=>$job))
                    );*/
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


    public function exportAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        if($userId=$request->query->get('u')) {
            $user= $em->getRepository('CaravaneUserBundle:User')->find($userId);
        }
        if(!$month=$request->query->get('m')) {
            $month= date('Y-m');
        }
        
        $filename = "clients";

        $fields = array(
            "id"=>"Job",
            "offreid"=>"Offre",
            "previewdate"=>"Preview",
            "builddate"=>"Build From",
            "endbuilddate"=>"To",
            "startunbuilddate"=>"Unbuild From",
            "unbuilddate"=>"To"
        );

        

        
        $jobentities = $em->getRepository('CaravaneOrganicBundle:Job')->findAllByMonth($month);
        $offreentities = $em->getRepository('CaravaneOrganicBundle:Offre')->findAllByMonth($month);
        
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $exportManager=new ExportManager;

        $r=1;
        $l=0;
        foreach($fields as $k=>$value) {
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $value);
            $l++;
        }

        foreach($jobentities as $entity) {
            $r++;
            $l=0;
            foreach($fields as $k=>$v) {
                $getter="get".ucwords($k);
                $value="";
                if($k=='offreid') {
                    /*if($job=$entity->getJobId()) {
                        if($offre=$job->getOffreId()) {
                            $value=$offre->getReference();
                        }
                        
                    }*/
                    $value="";
                }
                else if($entity->$getter()) {
                    if($k=='previewdate' || $k=='eventdate' || $k=='builddate' || $k=='endbuilddate' || $k=='startunbuilddate' || $k=='unbuilddate' ) {
                        $value=$entity->$getter()->format('Y-m-d');
                    }
                    else if($k=='jobid') {
                        $value=$entity->$getter()->getReference();
                    }
                    else {
                        $value=$entity->$getter();
                    }
                    
                }
                else {
                    $value="";
                }
                $col = $exportManager->num2alpha($l).$r;
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $value);
                $l++;
            }
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, "Job");
            $l++;
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $entity->getUserId()->getName());
            $l++;
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $entity->getClientId()->getName());
        }

        foreach($offreentities as $entity) {
            $r++;
            $l=0;
            foreach($fields as $k=>$v) {
                $getter="get".ucwords($k);
                $value="";
                if($k=='offreid') {
                    $value="";
                }
                else if($entity->$getter()) {
                    if($k=='previewdate' || $k=='eventdate' || $k=='builddate' || $k=='endbuilddate' || $k=='startunbuilddate' || $k=='unbuilddate' ) {
                        $value=$entity->$getter()->format('Y-m-d');
                    }
                     else if($k=='offreid') {
                        $value=$entity->$getter()->getReference();
                    }
                    else {
                        $value=$entity->$getter();
                    }
                    
                }
                else {
                    $value="";
                }
                $col = $exportManager->num2alpha($l).$r;
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $value);
                $l++;
            }
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, "Offer");
            $l++;
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $entity->getUserId()->getName());
            $l++;
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $entity->getClientId()->getName());
        }
        
        $phpExcelObject->getActiveSheet()->setTitle('Planning');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment;'.$filename.'-'.date('Y-m-d').'.xls');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');

        return $response;
    }
}
