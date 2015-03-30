<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Client;
use Caravane\Bundle\OrganicBundle\Entity\Tent;
use Caravane\Bundle\OrganicBundle\Entity\ProductCategory;
use Caravane\Bundle\OrganicBundle\Form\TentType;

use Caravane\Bundle\OrganicBundle\Managers\DocumentManager;
use Caravane\Bundle\OrganicBundle\Managers\ExportManager;


/**
 * Tent controller.
 *
 */
class TentController extends Controller
{
    /**
     * Lists all Tent entities.
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
            $ob='reference asc';
        }
         if(!$page=$request->query->get('page')) {
            $page=1;
        }
        if(!$offset=$request->query->get('offset')) {
            $offset=25;
        }


        $jobs=array();
        $offres=array();
        $startDate=new \Datetime();
        $endDate=new \Datetime();
        //if($type=="reserved" ) {
            $startDate=new \Datetime($request->query->get('startDate'));
            $endDate=new \Datetime($request->query->get('endDate'));
            if(is_null($startDate)) {
                $startDate=new \Datetime();
            }
            if(is_null($endDate)) {
                $endDate=$startDate;
            }
            $jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate);
            $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($startDate,$endDate);
        //}

        $entities=$em->getRepository('CaravaneOrganicBundle:Tent')->listAll($type,$ob,$page,$startDate,$endDate,$jobs,$offres,$offset);
        $nbpages=(Integer)(count($entities)/$offset)+1;

        return $this->render('CaravaneOrganicBundle:Tent:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset,
            "jobs"=>$jobs,
            "offres"=>$offres,
            'startDate'=>$startDate,
            "endDate"=>$endDate
        ));
    }

    /**
     * Finds and displays a Tent entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Tent:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Tent entity.
     *
     */
    public function newAction()
    {
        $owner=new Client();
        $etats=$this->getEtats();
        $categories=$this->getCategories();

        $entity = new Tent();
        $form   = $this->createForm(new TentType($etats,$categories), $entity,array(
            'em' => $this->getDoctrine()->getManager(),
        ));

        return $this->render('CaravaneOrganicBundle:Tent:new.html.twig', array(
            'entity' => $entity,
            'categories'=>$categories,
            'edit_form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Tent entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $etats=$this->getEtats();
        $categories=$this->getCategories();
        $entity  = new Tent();
        $form = $this->createForm(new TentType($etats,$categories), $entity,array(
            'em' => $this->getDoctrine()->getManager(),
        ));


        $cName=$request->request->get('category');

        if(!$productCategory=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findOneByName($cName)) {
            $productCategory=new ProductCategory();
            $productCategory->setName($cName);
            $em->persist($productCategory);
            $em->flush();
        }


        $t=$request->request->get('caravane_bundle_organicbundle_tenttype');
        $t['productCategory']=$productCategory->getId();
        $request->request->set('caravane_bundle_organicbundle_tenttype', $t);



        $form->bind($request);
        if(!$entity->getOwnerid()->getId()) {
            $entity->setOwnerid(null);
        }


        if ($form->isValid()) {

            $entity->setInsertdate(new \Datetime("now"));
            $entity->setUpdatedate(new \Datetime("now"));
            $entity->setPublic(true);
            $em->persist($entity);


            $em->flush();

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/products/'.$entity->getId());

            return $this->redirect($this->generateUrl('tent_edit', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Tent:new.html.twig', array(
            'entity' => $entity,
            'categories'=>$categories,
            'edit_form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tent entity.
     *
     */
    public function editAction($id)
    {
        $etats=$this->getEtats();
        $categories=$this->getCategories();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tent entity.');
        }

        $editForm = $this->createForm(new TentType($etats,$categories), $entity,array(
            'em' => $this->getDoctrine()->getManager(),
        ));
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Tent:edit.html.twig', array(
            'entity'      => $entity,
            'categories'=>$categories,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Tent entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $etats=$this->getEtats();
        $categories=$this->getCategories();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TentType($etats,$categories), $entity,array(
            'em' => $this->getDoctrine()->getManager(),
        ));


        $cName=$request->request->get('category');

        if(!$productCategory=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findOneByName($cName)) {
            $productCategory=new ProductCategory();
            $productCategory->setName($cName);
            $em->persist($productCategory);
            $em->flush();
        }

        $t=$request->request->get('caravane_bundle_organicbundle_tenttype');
        $t['productCategory']=$productCategory->getId();
        $request->request->set('caravane_bundle_organicbundle_tenttype', $t);


        $editForm->bind($request);



        if(!$entity->getOwnerid()->getId()) {
            $entity->setOwnerid(null);
        }

        if($entity->getReference()=='') {
                $entity->setReference(date('Y')."-".$entity->getId());
        }

        if ($editForm->isValid()) {
            $entity->setUpdatedate(new \Datetime("now"));
            $em->persist($entity);
            $em->flush();

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/products/'.$entity->getId());

            return $this->redirect($this->generateUrl('tent_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Tent:edit.html.twig', array(
            'entity'      => $entity,
            'categories'=>$categories,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tent entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tent entity.');
            }

            $entity->setPublic(false);
            $em->persist($entity);
           // $em->remove($entity);
            $em->flush();
            return new Response("deleted");
        //}

        return $this->redirect($this->generateUrl('tent'));
    }

    private function getEtats() {
        $em = $this->getDoctrine()->getManager();
        $etats=$em->getRepository('CaravaneOrganicBundle:Tent')->getEtats();
        return $etats;
    }

    private function getCategories() {
        $em = $this->getDoctrine()->getManager();
        $categories=$em->getRepository('CaravaneOrganicBundle:Tent')->getCategories();
        return $categories;
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }


    public function removeDocumentAction($id,$documentid) {
        $em=$this->getDoctrine()->getManager();
        $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($id);
        if($document=$em->getRepository('CaravaneOrganicBundle:Document')->find($documentid)) {


            $tent->removeDocument($document);

            $documentManager=new DocumentManager($document,$em);
            $documentManager->deleteDocument();

            $em->persist($tent);
            $em->flush();
        }

        return new Response('oki');
    }

    public function getAvailableFromRouteAction() {
        $request=$this->get('request');


        if($request->query->get('categoryId')) {
            $categoryId=$request->query->get('categoryId');
        }
        if($request->query->get('startDate')) {
            $startDate= new \Datetime($request->query->get('startDate'));
        }
        if($request->query->get('endDate')) {
            $endDate= new \Datetime($request->query->get('endDate'));
        }
        if($request->query->get('entityId')) {
            $em = $this->getDoctrine()->getManager();
            $entity=$em->getRepository('CaravaneOrganicBundle:Offre')->find($request->query->get('entityId'));
        }
        return $this->getAvailableAction($entity,$categoryId,$startDate,$endDate);
    }

    public function getAvailableAction($entity,$categoryId,$startDate,$endDate) {

        $request=$this->get('request');


        if($request->query->get('categoryId')) {
            $categoryId=$request->query->get('categoryId');
        }
        if($request->query->get('startDate')) {
            $startDate= new \Datetime($request->query->get('startDate'));
        }
        if($request->query->get('endDate')) {
            $endDate= new \Datetime($request->query->get('endDate'));
        }
        if(!$type=$request->query->get('type')) {
            $type='';
        }
        if(!$ob=$request->query->get('ob')) {
            $ob='reference asc';
        }
         if(!$page=$request->query->get('page')) {
            $page=1;
        }


        $exclude=array();
        if($entity->getProducts()) {
            foreach($entity->getProducts() as $prod) {
                if($prod->getTentid()) {
                    $exclude[]=$prod->getTentid()->getId();
                }

            }
        }


        $em = $this->getDoctrine()->getManager();
        $category=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->find($categoryId);
        $jobs=$em->getRepository('CaravaneOrganicBundle:Job')->findAllBetweenDates($startDate,$endDate);
        $offres=$em->getRepository('CaravaneOrganicBundle:Offre')->findAllBetweenDates($startDate,$endDate);
        $options=array('ownerid'=>0,'job'=>true,'offre'=>false,'jobs'=>$jobs,'offres'=>$offres,'category'=>$category,'page'=>$page,'exclude'=>$exclude);
        $entities=$em->getRepository('CaravaneOrganicBundle:Tent')->getFree(false,$startDate,$endDate,$options);
        $nbpages=(Integer)(count($entities)/25)+1;

        return $this->render('CaravaneOrganicBundle:Tent:available.html.twig', array(
            'entities'      => $entities,
            'offres'=>$offres,
            'jobs'=>$jobs,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            'nbpages'=>$nbpages,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'categoryId'=>$categoryId,
            'entityId'=>$entity->getId(),
            'entity'=>$entity
        ));
    }
}
