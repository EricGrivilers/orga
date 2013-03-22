<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Invoice;
use Caravane\Bundle\OrganicBundle\Form\InvoiceType;

use Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use Caravane\Bundle\OrganicBundle\Managers\InvoiceManager;

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
         if(!$page=$request->query->get('page')) {
            $page=1;
        }
       // $entities = $em->getRepository('CaravaneOrganicBundle:Client')->listAll();
        $entities=$em->getRepository('CaravaneOrganicBundle:Invoice')->listAll($type,$ob,$page);
        $nbpages=(Integer)(count($entities)/25)+1;


        return $this->render('CaravaneOrganicBundle:Invoice:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages
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
        $statusChoices=array('draft'=>"Draft");
        $entity = new Invoice();

        $form   = $this->createForm(new InvoiceType($statusChoices), $entity,array(
            'em' => $this->getDoctrine()->getEntityManager(),
        ));

        return $this->render('CaravaneOrganicBundle:Invoice:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors
        ));
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
            'customErrors'=>$this->customErrors
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



}
