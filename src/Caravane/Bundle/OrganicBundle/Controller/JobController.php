<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Form\JobType;
use Caravane\Bundle\OrganicBundle\Managers\PdfManager;
use Caravane\Bundle\OrganicBundle\Managers\DocumentManager;

use Caravane\Bundle\OrganicBundle\Entity\Product2job;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    private $planningTypes;
    private $customErrors;

    public function __construct() {
        $this->planningTypes=array('preview','build','inplace','unbuild');
        $this->customErrors=array();
    }

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction(Request $request)
    {




        $em = $this->getDoctrine()->getManager();

        $request=$this->get('request');
        if(!$type=$request->query->get('type')) {
            $type='';
        }
        if(!$ob=$request->query->get('ob')) {
            $ob='reference desc';
        }
         if(!$page=$request->query->get('page')) {
            $page=1;
        }
        if(!$offset=$request->query->get('offset')) {
            $offset=25;
        }

        $entities=$em->getRepository('CaravaneOrganicBundle:Job')->listAll($type,$ob,$page,$offset);
        $nbpages=(Integer)(count($entities)/$offset)+1;

        return $this->render('CaravaneOrganicBundle:Job:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Job:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Job entity.
     *
     */
    public function newAction()
    {
        $entity = new Job();
        $form   = $this->createForm(new JobType(), $entity);

        return $this->render('CaravaneOrganicBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Job();
        $form = $this->createForm(new JobType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/jobs/'.$entity->getId());

            return $this->redirect($this->generateUrl('job_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        $entity = $em->getRepository('CaravaneOrganicBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

         if(count($entity->getPlannings())!=4) {
            foreach($this->planningTypes as $planningType) {
                $planning=new \Caravane\Bundle\OrganicBundle\Entity\Planning2job();
                $planning->setPlanningtype($planningType);
                $planning->setStartdate(new \Datetime('now'));
                $planning->setEnddate(new \Datetime('now'));
                $planning->setEtat('TO DO');
                $planning->setJobid($entity);
                $em->persist($planning);
                $em->flush();
                $entity->addPlanning($planning);

            }
            $this->customErrors[]="Planning error, please double check the dates.";
        }
        if(count($entity->getSlices())<1) {
            $this->customErrors[]="Conditions error, please verify the slices.";
        }

        $editForm = $this->createForm(new JobType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
             'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Edits an existing Job entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die();
        */
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        $entity = $em->getRepository('CaravaneOrganicBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $originalProducts = array();


        foreach ($entity->getProducts() as $product) {
            $originalProducts[] = $product;
        }


        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new JobType(), $entity);
        $editForm->bind($request);

        $issue=0;
        if ($editForm->isValid()) {
            $priceHt=0;

            foreach($entity->getPlannings() as $planning) {

                if($planning->getPlanningtype()=='build') {
                    $entity->setStartbuild($planning->getStartdate());
                }
                if($planning->getPlanningtype()=='unbuild') {
                    $entity->setEndbuild($planning->getEnddate());
                }
            }

            foreach($entity->getProducts() as $product) {
                $product->setJobid($entity);
                $product->setUpdatedate(new \Datetime('now'));
                $priceHt+=$product->getPrice();
                $em->persist($product);
            }
            $entity->setPrice($priceHt);

            $totalSlice=0;
            $totalSlicePriceHt=0;
             foreach($entity->getSlices() as $slice) {
                $slice->setJobid($entity);

                if($slice->getSlice()>0) {
                    $slice->setPriceht(($slice->getSlice()*$entity->getPrice())/100);
                }
                else if($slice->getPriceht()>0) {
                    $slice->setSlice((100*$slice->getPriceht())/$entity->getPrice());
                }
                 else {
                    $slice->setSlice(100/count($entity->getSlices()));
                    $slice->setPriceht(($slice->getSlice()*$entity->getPrice())/100);
                }
                //$totalSlice+=$slice->getSlice();
                //$totalSlicePriceHt+=$slice->getPriceht();
                $em->persist($slice);
            }
            //$entity->setTotalSlice($totalSlice);
            //$entity->setTotalSlicePriceht($totalSlicePriceHt);
            if($entity->getTotalSlicePriceht()!=$entity->getPrice() || $entity->getTotalSlice()!=100 ) {
                $issue++;
            }

            $entity->setIssue($issue);

            $em->persist($entity);
            $em->flush();


            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/jobs/'.$entity->getId());

            return $this->redirect($this->generateUrl('job_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
             'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Job')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('job'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }



    public function removeProductAction($id,$productid) {
        $em = $this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $product=$em->getRepository('CaravaneOrganicBundle:Product2job')->find($productid);
        $job->removeProduct($product);
        $em->remove($product);
        $em->persist($job);
        $em->flush();
        return new Response('ok');
    }

     public function removeSliceAction($id,$productid) {
        $em = $this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $slice=$em->getRepository('CaravaneOrganicBundle:Slice2job')->find($productid);
        $job->removeSlice($slice);
        $em->remove($slice);
        $em->persist($job);
        $em->flush();
        return new Response('ok');
    }

    public function removeDocumentAction($id,$documentid) {
        $em=$this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $document=$em->getRepository('CaravaneOrganicBundle:Document')->find($documentid);
        $job->removeDocument($document);

        $documentManager=new DocumentManager($document,$em);
        $documentManager->deleteDocument();

        $em->persist($job);
        $em->flush();
        return new Response('oki');
    }

    public function addStockProductAction($id,$tentid) {
        $em = $this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tentid);
        if($tent) {
            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2job();
            $product->setJobid($job);
            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            //$product->setIsoption(false);

            $product->setDescription($tent->getName()."(".$tent->getReference().")");
            $product->setTentid($tent);
            $datas=array();
            //$datas['etat']=$tent->getEtat();
            $datas['plancher']='0';
            $datas['surfaceplancher']='';
            $datas['sol']='';
            $datas['canalisation']='0';
            $datas['other']='';

            $product->setDatas(json_encode($datas));
            $product->setPrice(0);

            $em->persist($product);
            $em->persist($job);
            $em->flush();

        }
        else {

        }

        return new Response('ok');
    }



    public function addTransportProductAction(Request $request,$id,$transportid) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $transport=$em->getRepository('CaravaneOrganicBundle:Transport')->find($transportid);

        if($transport) {

            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2job();

            $product->setJobid($offre);

            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            $product->setPrice($transport->getCost());
            $product->setDescription($transport->getName()."(".$transport->getZip().")");



            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }

        return new Response('ok');
    }


    public function pdfAction(Request $request, $id,$_locale='all') {
        $templating=$this->container->get('templating');
        $html2pdf=$this->get('html2pdf');
        $em = $this->getDoctrine()->getManager();
        $entity=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);



        $pdfManager=new PdfManager($em,$templating,$html2pdf);
        if($_locale=='all') {
            foreach(array('en','fr','nl') as $l) {
                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/jobs",
                    'filename'=>$entity->getReference()."-".$l.".pdf"
                );
                if(file_exists($file['path']."/".$file['filename'])) {
                    unlink($file['path']."/".$file['filename']);
                }
            }
            return $this->redirect($this->generateUrl('job_edit', array('id' => $id)));
        }
        else {
            $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/jobs",
                    'filename'=>$entity->getReference()."-".$_locale.".pdf"
            );
            $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Job:pdf.html.twig",$file,$_locale,true);
            return $this->redirect("/docs/jobs/".$file['filename']);
        }

    }


    public function sortProductsAction(Request $request,$id) {


        $em=$this->getDoctrine()->getManager();
        if(!$entity=$em->getRepository('CaravaneOrganicBundle:Job')->find($id)) {
            return new Response("error");
        }

        $list=$request->request->get('list');
        $rank=1;
        foreach($list as $productId) {
            $product=$em->getRepository('CaravaneOrganicBundle:Product2job')->find($productId);
            $product->setRank($rank);
            $rank++;
            $em->persist($product);
        }
        $em->flush();
        return new Response("ok");



    }

}
