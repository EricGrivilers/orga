<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Entity\Issue;
use Caravane\Bundle\OrganicBundle\Form\JobType;
use Caravane\Bundle\OrganicBundle\Managers\IssueManager;
use Caravane\Bundle\OrganicBundle\Managers\PdfManager;
use Caravane\Bundle\OrganicBundle\Managers\DocumentManager;

use Caravane\Bundle\OrganicBundle\Entity\Product2job;
use Caravane\Bundle\OrganicBundle\Managers\ExportManager;


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

         $users=$em->getRepository('CaravaneUserBundle:User')->findBy(array('enabled'=>true));
         $user=null;
         $userId=null;
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

        if($request->query->get('user')) {
            if($request->query->get('user')=='any') {
                $userId=null;
            }
            else {
                if(!$user=$em->getRepository('CaravaneUserBundle:User')->find($request->query->get('user'))) {
                   $user=$this->getUser();
                }
                $userId=$user->getId();
            }
        }


        $entities=$em->getRepository('CaravaneOrganicBundle:Job')->listAll($type,$ob,$page,$offset, $userId);
        $nbpages=(Integer)(count($entities)/$offset)+1;

/*
foreach($entities as $entity) {
    $jobManager2=$this->get('caravane_organic.offre_manager');
    $jobManager2->loadEntity($entity);
    $jobManager2->getIssues();
}
*/


        return $this->render('CaravaneOrganicBundle:Job:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset,
            'userId'=>$userId,
            "users"=>$users
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
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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

            $jobManager2=$this->get('caravane_organic.job_manager');
            $jobManager2->loadEntity($entity);
            $jobManager2->getIssues();

            return $this->redirect($this->generateUrl('job_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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
                $is=new Issue();
                $is->setReference("price");
                $is->setDescription("Price error");
                $em->persist($is);
                $entity->addIssue($is);
                $issue++;
            }

            //$entity->setIssue($issue);

            $em->persist($entity);
            $em->flush();


            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/jobs/'.$entity->getId());

            $rank=1;
            if($products=$em->getRepository('CaravaneOrganicBundle:Product2job')->findBy(array('jobid'=>$entity->getId()),array('rank'=>'asc') )) {
                foreach($products as $product) {
                    $product->setRank($rank);
                    $product->setProductid($rank);
                    $em->persist($product);
                    $rank++;
                }
                $em->flush();
            }

            $em->clear();
            $jobManager2=$this->get('caravane_organic.job_manager');
            $jobManager2->loadEntity($entity);
            $jobManager2->getIssues();

            return $this->redirect($this->generateUrl('job_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
             'productCategories' =>$productCategories,
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Job')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $entity->setPublic(false);
            $em->persist($entity);
           // $em->remove($entity);
            $em->flush();
            return new Response("deleted");
        //}

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
        $product2job=$em->getRepository('CaravaneOrganicBundle:Product2job')->find($productid);
        if($product2job->getTentid()) {
            if($product2job->getTentid()->getProductCategory()->getFloor()) {
                $products=$em->getRepository('CaravaneOrganicBundle:Product2job')->findBy(array('jobid'=>$id));
                foreach($products as $p) {
                    if($p->getTentid()) {
                        if($p->getTentid()->getProductCategory()->getFloor()) {
                            $job->removeProduct($p);
                            $em->remove($p);
                        }
                    }
                }
            }
            else {
                $job->removeProduct($product2job);
                $em->remove($product);
            }
        }
        else {
            $job->removeProduct($product2job);
            $em->remove($product);
        }
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
        if(preg_match("/,/",$tentid)) {
            $tentid=explode(",",$tentid);
            foreach($tentid as $tid) {
                $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tid);
                $this->addTent($tent,$job);
            }
        }
        else {
            $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tentid);
            $this->addTent($tent,$job);
        }
        
/*
        $rank=$this->getRank($job);
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

            $product->setRank($rank);
            $product->setproductid($rank);

            $em->persist($product);
            $em->persist($job);
            $em->flush();

        }
        else {

        }
*/
        return new Response('ok');
    }

    private function addTent($tent,$job) {
        $em = $this->getDoctrine()->getManager();
        $rank=$this->getRank($job);
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

            $product->setRank($rank);
            $product->setproductid($rank);

            $em->persist($product);
            $em->persist($job);
            $em->flush();

        }
    }


    public function addTransportProductAction(Request $request,$id,$transportid) {
        $em = $this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $transport=$em->getRepository('CaravaneOrganicBundle:Transport')->find($transportid);

        $rank=$this->getRank($job);
        if($transport) {

            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2job();

            $product->setJobid($job);

            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            $product->setPrice($transport->getCost());
            $product->setDescription($transport->getName()."(".$transport->getZip().")");

            $product->setRank($rank);
            $product->setproductid($rank);

            $em->persist($product);
            $job->addProduct($product);
            $em->persist($job);
            $em->flush();
        }

        return new Response('ok');
    }


    public function addProductAction(Request $request,$id) {
        $em = $this->getDoctrine()->getManager();
        $job=$em->getRepository('CaravaneOrganicBundle:Job')->find($id);
        $products=$em->getRepository('CaravaneOrganicBundle:Product2job')->findByJobid($id);
        $rank=$this->getRank($job);
        
        $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2job();
        $product->setJobid($job);
        $product->setProductid($rank);
        $product->setRank($rank);
        $product->setDescription('New product');
        $product->setPrice(0);
        $product->setInsertdate(new \Datetime('now'));
        $product->setUpdatedate(new \Datetime('now'));


        $em->persist($product);
        $job->addProduct($product);
        $em->persist($job);
        $em->flush();
        return new Response('ok');

    }


    public function pdfAction(Request $request, $id,$_locale='all') {
        $templating=$this->container->get('templating');
        //$html2pdf = $this->get('html2pdf_factory');
        $html2pdf = $this->get('html2pdf_factory');
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
            $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Job:pdf.html.twig",$file,$_locale,true, $this->getProducts($entity));
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


   public function exportAction() {


        $filename = "offers";

        $fields = array(
            "id"=>"ID",
            "clientId"=>"Client",
           
            "reference"=>"Reference",
            "offreType"=>"Type",
            "status"=>"Status",
            "offreComments"=>"Comments",
            "surface"=>"Surface",
            "eventdate"=>"Event date",
            "builddate"=>"From",
            "unbuilddate"=>"To",
            "buildNotes"=>"Build notes",
            "unbuildNotes"=>"Unbuild notes",
            "planningComments"=>"Planning comments",
            "requestDate"=>"Request date",
            
            "userId"=>"Account manager",
            "priceType"=>"Price type",
            "price"=>"Price",
            "priceComments"=>"Price comments",
            "conditions"=>"Conditions",
            "conditionsSlices"=>"",
            "tents"=>"Stock products",
            "tentsComments"=>"Products comments",
            "contact"=>"Contact",
            "address"=>"Street",
            "number"=>"Number",
            "zip"=>"Postal code",
            "city"=>"City",
            "country"=>"Country",
            "phone"=>"Phone",
            "phone2"=>"Phone2",
            "mobile"=>"Mobile",
            "fax"=>"Fax",
            "email"=>"Email",
            "url"=>"Website",
            "comments"=>"Place comments",
             "language"=>"Language",
           // "introText"=>"",
            "issue"=>"Issues", 
            //"deleted"=>"",
            //"public"=>"",
           
            
             "offreId"=>"Offre",
            "insertDate"=>"Creation date",
            "updateDate"=>"Last update",

        );

        

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CaravaneOrganicBundle:Job')->findBy(array('public'=>true));
        
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
                    if($k=='insertDate' || $k=='updateDate' || $k=="builddate" || $k=="unbuilddate" || $k=="requestDate" || $k=="eventdate") {
                        $value=$entity->$getter()->format('Y-m-d');
                    }
                    else if($k=='userId') {
                        if($entity->getUserId()) {
                            $value=$entity->getUserId()->getName();
                        }
                    }
                    else if($k=='offreId') {
                        if($entity->getOffreId()) {
                            $value=$entity->getOffreId()->getReference();
                        }        
                    }
                    else if($k=='clientId') {
                        if($entity->getClientId()) {
                            $value=$entity->getClientId()->getReference();
                        }
                        
                    }
                    else if($k=='tents') {
                        $tents=array();
                        if($tTents=explode(", ",$entity->getTents())) {
                            foreach($tTents as $x=>$t) {
                                if($tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($t)) {
                                    $tents[]=$tent->getReference();
                                }
                            }
                        }
                        
                        $value=implode(",",$tents);
                    }
                    else if($k=='issue') {
                        if($issues=$entity->getIssue()) {
                            $value=count($issues);
                        }

                    }
                    else {
                        $value=$entity->$getter();

                    }
                } 
                $col = $exportManager->num2alpha($l).$r;
                //echo $col." : ".$getter." : ".$value." <br/>";
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue($col, (string)$value);
                $l++;
            }
           
        }
        
        $phpExcelObject->getActiveSheet()->setTitle($filename);
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

     private function getRank($job) {
        $em=$this->getDoctrine()->getManager();
        $rank=0;
        if($products=$em->getRepository('CaravaneOrganicBundle:Product2job')->findBy( array('jobid'=>$job->getId()),array('rank'=>'asc') )) {
            $rank=count($products);
        }
        $rank++;
        return $rank;
    }


    private function getProducts($entity) {
        $products=array();
        foreach($entity->getProducts() as $product) {
            $o="required";
            $t="free";
            if($tent=$product->getTentid()) {
                if($tent->getProductCategory()->getFloor()) {
                    $t="floor";
                }
                else {
                    $t="tent";
                }
            }
            $products[$o][$t][]=$product;
        }
        return $products;
    }

}
