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
 * Invoice controller.
 *
 */
class InvoiceController extends Controller
{


    private $customErrors;

    public function __construct() {
        $this->customErrors=array();
    }

    /**
     * Lists all Invoice entities.
     *
     */
     public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $request=$this->get('request');
        if(!$type=$request->query->get('type')) {
            $type='';
        }
        if(!$ob=$request->query->get('ob')) {
            $ob='reference desc';
        }
        if(!$offset=$request->query->get('offset')) {
            $offset=25;
        }
         if(!$page=$request->query->get('page')) {
            $page=1;
        }
         if(!$search=$request->query->get('search')) {
            $search=null;
        }
       // $entities = $em->getRepository('CaravaneOrganicBundle:Client')->listAll();
        $entities=$em->getRepository('CaravaneOrganicBundle:Invoice')->listAll($type,$ob,$page,$offset,$search);
        $nbpages=(Integer)(count($entities)/$offset)+1;


        return $this->render('CaravaneOrganicBundle:Invoice:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset,
            'search'=>$search
        ));
    }

    /**
     * Finds and displays a Invoice entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();


        $entity = $em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invoice entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Invoice:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors
                    ));
    }

    /**
     * Displays a form to create a new Invoice entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statusChoices=array('draft'=>"Draft");
        $entity = new Invoice();

        $entity->setDiscountDescription('Discount');
        $form   = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $em,
        ));

        return $this->render('CaravaneOrganicBundle:Invoice:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors,
            'conditions'=>$em->getRepository('CaravaneOrganicBundle:Invoice')->getConditions()
        ));
    }


    /**
     * Displays a form to create a new Invoice entity.
     *
     */
    public function newFromJobAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $slice=$em->getRepository('CaravaneOrganicBundle:Slice2job')->find($id);

        $job=$slice->getJobid();
        $client=$job->getClientid();

        $statusChoices=array('draft'=>"Draft");
        $entity = new Invoice();

        $entity->setClientid($client);
        $entity->setJobid($job);
        foreach($job->getProducts() as $product) {
            $p=new \Caravane\Bundle\OrganicBundle\Entity\Product2invoice();
            $p->setProductid($product->getProductid());
            $p->setDescription($product->getDescription());
            $p->setPrice($product->getPrice());
            $p->setInsertDate($product->getInsertdate());
            $p->setUpdatedate($product->getUpdatedate());
            $p->setRank($product->getRank());
            $p->setIsfromjob(true);
            $entity->addProduct($p);

        }

        $entity->setOffretype($job->getOffretype());
        $entity->setInsertDate(new \Datetime('now'));
        $entity->setStatus('draft');
        
        $entity->setSlice($slice->getId());
        $entity->setSliceDescription($slice->getComments());
        $entity->setPriceht($slice->getPriceht());

        $invoiceManager=new invoiceManager($entity,$em);
        $entity=$invoiceManager->fillClient();
        $entity=$invoiceManager->persist();

        $slice->setInvoiceid($entity);
        $slice->setStatus('ready');
        $em->persist($slice);
        $em->flush();
        return $this->redirect($this->generateUrl('invoice_edit', array('id' => $entity->getId())));
        /*$form   = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $em,
        ));

        return $this->render('CaravaneOrganicBundle:Invoice:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors,
            'conditions'=>$em->getRepository('CaravaneOrganicBundle:Invoice')->getConditions()
        ));
        */
    }

    /**
     * Creates a new Invoice entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $statusChoices=array('draft'=>"Draft",'ok'=>"Sent to client");
        $entity  = new Invoice();
        $entity->setYear(date('Y'));
        $entity->setInsertdate(new \Datetime('now'));




        $form = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $this->getDoctrine()->getEntityManager(),
        ));
        $form->bind($request);

        $invoiceManager=new invoiceManager($entity,$em);
        $entity=$invoiceManager->fillClient();


        if ($form->isValid()) {
            $entity=$invoiceManager->persist();
            return $this->redirect($this->generateUrl('invoice_edit', array('id' => $entity->getId())));
        }
        else {
            print_r($form->getErrors());
            print_r($form->getErrorsAsString()) ;
        }

        return $this->render('CaravaneOrganicBundle:Invoice:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Displays a form to edit an existing Invoice entity.
     *
     */
    public function editAction($id)
    {
        $statusChoices=array('draft'=>"Draft",'ok'=>"Sent to client",'paid'=>"Paid");
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invoice entity.');
        }

        $editForm = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $this->getDoctrine()->getEntityManager(),
        ));
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Invoice:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors,
            'conditions'=>$em->getRepository('CaravaneOrganicBundle:Invoice')->getConditions()
        ));
    }

    /**
     * Edits an existing Invoice entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        $statusChoices=array('draft'=>"Draft",'ok'=>"Sent to client",'paid'=>"Paid");


        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invoice entity.');
        }

        $originalProducts = array();


        foreach ($entity->getProducts() as $product) {
            $originalProducts[] = $product;
        }




        $invoiceManager=new invoiceManager($entity,$em);
        $entity=$invoiceManager->fillClient();


        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $this->getDoctrine()->getEntityManager(),
        ));
        $editForm->bind($request);




        if ($editForm->isValid()) {
            $entity=$invoiceManager->persist();
            return $this->redirect($this->generateUrl('invoice_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Invoice:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Deletes a Invoice entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Invoice entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('invoice'));
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
        $invoice=$em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);
        $product=$em->getRepository('CaravaneOrganicBundle:Product2invoice')->find($productid);
        $invoice->removeProduct($product);
        $em->remove($product);
        $em->persist($invoice);
        $em->flush();
        return new Response('ok');
    }



    public function pdfAction(Request $request, $id,$_locale='all',$type='inv') {
        $templating=$this->container->get('templating');
        $html2pdf=$this->get('html2pdf');
        $em = $this->getDoctrine()->getManager();
        $entity=$em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);

        $request->query->get('force')?$force=true:$force=false;

        $pdfManager=new PdfManager($em,$templating,$html2pdf);
        if($_locale=='all') {
            foreach(array('en','fr','nl') as $l) {
                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/invoices",
                    'filename'=>$entity->getReference()."-".$l.".pdf"
                );
                if(file_exists($file['path']."/".$file['filename'])) {
                    unlink($file['path']."/".$file['filename']);
                }
            }
            return $this->redirect($this->generateUrl('invoice_edit', array('id' => $id)));
        }
        else {
            
            if($type!='inv') {
                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/invoices",
                    'filename'=>$entity->getReference()."-".$type."-".$_locale.".pdf"
                );
                $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Invoice:pdf.".$type.".html.twig",$file,$_locale,$force);
            }
            else {
               
                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/invoices",
                    'filename'=>$entity->getReference()."-".$_locale.".pdf"
                );
                $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Invoice:pdf.html.twig",$file,$_locale,$force); 
            }
            return $this->redirect("/docs/invoices/".$file['filename']);
        }
        
    }




}
