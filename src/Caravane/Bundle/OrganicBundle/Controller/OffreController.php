<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Entity\Client;
use Caravane\Bundle\OrganicBundle\Form\OffreType;



use Caravane\Bundle\OrganicBundle\Managers\OffreManager;
use Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use Caravane\Bundle\OrganicBundle\Managers\PdfManager;

use Caravane\Bundle\OrganicBundle\Managers\DocumentManager;
/**
 * Offre controller.
 *
 */
class OffreController extends Controller
{
    private $planningTypes;
    private $customErrors;

    public function __construct() {
        $this->planningTypes=array('preview','build','inplace','unbuild');
        $this->customErrors=array();
    }
    /**
     * Lists all Offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();




        $request=$this->get('request');
        if(!$type=$request->query->get('type')) {
            $type='running';
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

        $entities=$em->getRepository('CaravaneOrganicBundle:Offre')->listAll($type,$ob,$page,$offset);
        $nbpages=(Integer)(count($entities)/$offset)+1;

        return $this->render('CaravaneOrganicBundle:Offre:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset
        ));
    }

    /**
     * Finds and displays a Offre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Offre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Offre entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();

        $entity = new Offre();
        $slice=new \Caravane\Bundle\OrganicBundle\Entity\Slice2offre();
        $slice->setComments('100%');
        $slice->setSlice(100);
        $entity->addSlice($slice);


        foreach($this->planningTypes as $planningType) {
            $planning=new \Caravane\Bundle\OrganicBundle\Entity\Planning2offre();
            $planning->setPlanningtype($planningType);
            $planning->setStartdate(new \Datetime('now'));
            $planning->setEnddate(new \Datetime('now'));
            $planning->setEtat('TO DO');
            $entity->addPlanning($planning);
        }
        $client=new \Caravane\Bundle\OrganicBundle\Entity\Client();
        if($clientId=$this->get('request')->query->get('clientId')) {
            if(!$client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId)) {
                $client=new \Caravane\Bundle\organicBundle\Entity\Client();
            }
        }

        $entity->setUserid($this->getUser());
        $entity->setClientid($client);
        $form   = $this->createForm(new OffreType(), $entity);

        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }




    /**
     * Creates a new Offre entity.
     *
     */
    public function createAction(Request $request)
    {
        //var_dump($request->request);

        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        $entity  = new Offre();


        $form = $this->createForm(new OffreType(), $entity);
        $form->bind($request);

        if(!$clientId=$this->get('request')->request->get('clientid')) {
            if(!$newClient=$entity->getClientid()) {
                $newClient=new Client();
            }
            $newClient->setUserid($this->getUser());
            $clientManager=new ClientManager($newClient,$em);
            $client=$clientManager->persistNew();

        }
        else if(!$client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId)){
            $client=new Client();
        }

        if ($form->isValid()) {

            $em->persist($client);
            $entity->setClientid($client);


            $offreManager=new offreManager($entity,$em);
            $offreManager->persist();

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/offres/'.$entity->getId());

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $entity->getId())));
        }
        else {
           // var_dump($request->request);
           // echo $form->getErrorsAsString() ;

        }
        //return new Response('nok');
        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Displays a form to edit an existing Offre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }
        if(count($entity->getPlannings())!=4) {
            foreach($this->planningTypes as $planningType) {
                $planning=new \Caravane\Bundle\OrganicBundle\Entity\Planning2offre();
                $planning->setPlanningtype($planningType);
                $planning->setStartdate(new \Datetime('now'));
                $planning->setEnddate(new \Datetime('now'));
                $planning->setEtat('TO DO');
                $planning->setOffreid($entity);
                $em->persist($planning);
                $em->flush();
                $entity->addPlanning($planning);

            }
            $this->customErrors[]="Planning error, please double check the dates.";
        }
        if(count($entity->getSlices())<1) {
            $this->customErrors[]="Conditions error, please verify the slices.";
        }
        $editForm = $this->createForm(new OffreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Edits an existing Offre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die();*/
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();

        $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $originalProducts = array();


        foreach ($entity->getProducts() as $product) {
            $originalProducts[] = $product;
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new OffreType(), $entity);
        $editForm->bind($request);
        if(!$clientId=$this->get('request')->request->get('clientid')) {
            $newClient=$entity->getClientid();
            $newClient->setUserid($this->getUser());
            $clientManager=new ClientManager($newClient,$em);
            $client=$clientManager->persistNew();

        }
        else {

            if($this->get('request')->request->get('clientId')!=$entity->getClientid()->getId()) {
                $client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId);
                $entity->setClientid($client);
            }
        }


        $issue=0;
        if ($editForm->isValid()) {

            $offreManager=new offreManager($entity,$em);
            $offreManager->persist();


            if($entity->getStatus()=='CONFIRMÉ' && $entity->getJobid()=='') {

                $job=$offreManager->createJob();
                $entity->setJobid($job);
                $em->persist($entity);
                $em->flush();
            }

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/offres/'.$entity->getId());


            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Deletes a Offre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offre entity.');
            }

            $entity->setPublic(false);
            $em->persist($entity);
           // $em->remove($entity);
            $em->flush();
            return new Response("deleted");
        //}

        return $this->redirect($this->generateUrl('offre'));
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
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $product=$em->getRepository('CaravaneOrganicBundle:Product2offre')->find($productid);
        $offre->removeProduct($product);
        $em->remove($product);
        $em->persist($offre);
        $em->flush();
        return new Response('ok');
    }

     public function removeSliceAction($id,$productid) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $slice=$em->getRepository('CaravaneOrganicBundle:Slice2offre')->find($productid);
        $offre->removeSlice($slice);
        $em->remove($slice);
        $em->persist($offre);
        $em->flush();
        return new Response('ok');
    }


    public function removeDocumentAction($id,$documentid) {
        $em=$this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $document=$em->getRepository('CaravaneOrganicBundle:Document')->find($documentid);
        $offre->removeDocument($document);

         $documentManager=new DocumentManager($document,$em);
        $documentManager->deleteDocument();

        $em->persist($offre);
        $em->flush();
        return new Response('oki');
    }

    public function addStockProductAction(Request $request,$id,$tentid) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tentid);

        if($tent) {
            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2offre();
            $product->setOffreid($offre);
            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            $product->setIsoption(false);

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
            $product->setIsoption($request->request->get('option'));

            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }

        return new Response('ok');
    }

    public function addTransportProductAction(Request $request,$id,$transportid) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $transport=$em->getRepository('CaravaneOrganicBundle:Transport')->find($transportid);

        if($transport) {

            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2offre();

            $product->setOffreid($offre);

            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            $product->setIsoption(false);
            $product->setPrice($transport->getCost());
            $product->setDescription($transport->getName()."(".$transport->getZip().")");



            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }

        return new Response('ok');
    }


    public function resolveIssueAction() {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($this->get('request')->query->get('offreId'));
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($this->get('request')->query->get('jobId'));
        $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($this->get('request')->query->get('tentId'));
        return $this->render('CaravaneOrganicBundle:Offre:resolve.html.twig', array(
            'offre'      => $offre,
            'job'      => $job,
            'tent'      => $tent,
        ));
    }

    public function resolveConfirmAction() {

    }





    public function pdfAction(Request $request, $id,$_locale='all') {
        $templating=$this->container->get('templating');
        $html2pdf=$this->get('html2pdf');
        $em = $this->getDoctrine()->getManager();
        $entity=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);



        $pdfManager=new PdfManager($em,$templating,$html2pdf);
        if($_locale=='all') {
            foreach(array('en','fr','nl') as $l) {
                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/offres",
                    'filename'=>$entity->getReference()."-".$l.".pdf"
                );
                if(file_exists($file['path']."/".$file['filename'])) {
                    unlink($file['path']."/".$file['filename']);
                }
            }
            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }
        else {
            $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/offres",
                    'filename'=>$entity->getReference()."-".$_locale.".pdf"
            );
            $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Offre:pdf.html.twig",$file,$_locale,true);
            return $this->redirect("/docs/offres/".$file['filename']);
        }

    }


    public function sortProductsAction(Request $request,$id) {


        $em=$this->getDoctrine()->getManager();
        if(!$entity=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id)) {
            return new Response("error");
        }

        $list=$request->request->get('list');
        $rank=1;
        foreach($list as $productId) {
            $product=$em->getRepository('CaravaneOrganicBundle:Product2offre')->find($productId);
            $product->setRank($rank);
            $rank++;
            $em->persist($product);
        }
        $em->flush();
        return new Response("ok");



    }

}
