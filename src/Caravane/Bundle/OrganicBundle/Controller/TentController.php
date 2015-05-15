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

        if(!$floorCat=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findOneBy(array('floor'=>true))) {
            $floorCat=new ProductCategory();
            $floorCat->setName("Floor");
            $floorCat->setFloor(true);
            $em->persist($floorCat);


            for($i=1;$i<=1000;$i++) {
                $plancher=new Tent();
                $plancher->setName("All floors");
                $plancher->setReference("floor-100x250-".$i);
                $plancher->setM2(2.5);
                $plancher->setWidth(1);
                $plancher->setLength(2.5);
                $plancher->setStatus('OK');
                $plancher->setPublic(true);
                $plancher->setInsertdate(new \datetime('now'));
                $plancher->setUpdatedate(new \datetime('now'));
                $plancher->setProductCategory($floorCat);
                $em->persist($plancher);
            }

            $em->flush();

        }
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
        $categories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        if(!$category=$request->query->get('category')) {
            $category=$categories[0]->getId();
        }
        $entities=$em->getRepository('CaravaneOrganicBundle:Tent')->listAll($type,$ob,$page,$startDate,$endDate,$jobs,$offres,$offset, $category);
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
            "endDate"=>$endDate,
            "categories"=>$categories,
            "category"=>$category
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

        $entityType="Offre";
        if($request->query->get('entityType')) {
            $entityType=$request->query->get('entityType');
        }
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
            $entity=$em->getRepository('CaravaneOrganicBundle:'.$entityType)->find($request->query->get('entityId'));
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
            $ob='insertdate desc';
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
        $options=array('ownerid'=>0,'job'=>true,'offre'=>false,'jobs'=>$jobs,'offres'=>$offres,'category'=>$category,'page'=>$page,'exclude'=>$exclude, 'ob'=>$ob);
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
            'category'=>$category,
            'entityId'=>$entity->getId(),
            'entity'=>$entity
        ));
    }





    public function exportAction() {


        $filename = "clients";

        $fields = array(
            "id"=>"ID",
            "name"=>"Name",
            "reference"=>"Reference",
            "kit"=>"Kit",
            "owner"=>"Owner",
            "ownerId"=>"Owner reference",
            "color"=>"Color",
            "length"=>"Length",
            "width"=>"Width",
            "height"=>"Height",
            "m2"=>"Surface",
            "weight"=>"Weight",
            "piquets"=>"Piquet",
            //"status"=>"Status",
            "etat"=>"State",
            "comments"=>"Comments",
            "winter"=>"Winter",
            "winterOffreId"=>"Winter offer",
            "issue"=>"Issues",
            "insertDate" => "Creation date",
            "updateDate" => "Last update"
        );

        

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CaravaneOrganicBundle:Tent')->findBy(array('public'=>true));
        
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $exportManager=new ExportManager;

        $r=1;
        $l=0;
        foreach($fields as $k=>$value) {
            $col = $exportManager->num2alpha($l).$r;
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $value);
            $l++;
        }

        foreach($entities as $entity) {
            $r++;
            $l=0;
            foreach($fields as $k=>$v) {
                $getter="get".ucwords($k);
                $value="";
                if($entity->$getter()) {
                    if($k=='insertDate' || $k=='updateDate') {
                        $value=$entity->$getter()->format('Y-m-d');
                    }
                    else if($k=='clientId') {
                        $value=$entity->getClientId()->getReference();
                    }
                    else if($k=='client') {
                        $value=$entity->getClientId()->getName();
                    }
                    else if($k=='ownerId') {
                        $value=$entity->getOwnerId()->getReference();
                    }
                    else if($k=='winterOffreId') {
                        $value=$entity->getWinterOffreId()->getReference();
                    }
                    
                    else {
                        $value=$entity->$getter();
                    }
                } 
                $col = $exportManager->num2alpha($l).$r;
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, $value);
                $l++;
            }
        }
        
        $phpExcelObject->getActiveSheet()->setTitle('Clients');
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
