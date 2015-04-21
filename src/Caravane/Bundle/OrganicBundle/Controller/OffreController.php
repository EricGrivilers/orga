<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Entity\Client;
use Caravane\Bundle\OrganicBundle\Entity\Job;
use Caravane\Bundle\OrganicBundle\Form\OffreType;



use Caravane\Bundle\OrganicBundle\Managers\OffreManager;
use Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use Caravane\Bundle\OrganicBundle\Managers\PdfManager;

use Caravane\Bundle\OrganicBundle\Managers\DocumentManager;
use Caravane\Bundle\OrganicBundle\Managers\ExportManager;

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

        $users=$em->getRepository('CaravaneUserBundle:User')->findBy(array('enabled'=>true));
        $user=null;
        $userId=null;
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

        $entities=$em->getRepository('CaravaneOrganicBundle:Offre')->listAll($type,$ob,$page,$offset, $userId);
        $nbpages=(Integer)(count($entities)/$offset)+1;


        /*
        foreach($entities as $entity) {
            $offreManager2=$this->get('caravane_organic.offre_manager');
            $offreManager2->loadEntity($entity);
            $offreManager2->getIssues();
        }
*/


        return $this->render('CaravaneOrganicBundle:Offre:index.html.twig', array(
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

            $entity->setPublic(true);
            $offreManager=$this->get('caravane_organic.offre_manager');
            $offreManager->loadEntity($entity);
            $offreManager->persist();
            $offreManager->getIssues();

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/offres/'.$entity->getId());

            $offreManager2=$this->get('caravane_organic.offre_manager');
            $offreManager2->loadEntity($entity);
            $offreManager2->getIssues();

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $entity->getId())));
        }
        else {
        //   var_dump($request->request);
           echo $form->getErrorsAsString() ;

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

            $offreManager=$this->get('caravane_organic.offre_manager');
            $offreManager->loadEntity($entity);
            $offreManager->persist();

            $entity->setPublic(true);
            if($entity->getStatus()=='CONFIRMÉ' && $entity->getJobid()=='') {

                $job=$offreManager->createJob();
                $entity->setJobid($job);
                $em->persist($entity);
                $em->flush();

            }

            $documentManager=new DocumentManager($entity,$em);
            $documentManager->moveAttachedDocument('/docs/offres/'.$entity->getId());


            $rank=1;
            if($products=$em->getRepository('CaravaneOrganicBundle:Product2offre')->findBy(array('offreid'=>$entity->getId()),array('rank'=>'asc') )) {
                foreach($products as $product) {
                    $product->setRank($rank);
                    $product->setProductid($rank);
                    $em->persist($product);
                    $rank++;
                }
                $em->flush();
            }
            $request->request->get('hash')?$hash=$request->request->get('hash'):$hash='';

            $em->clear();
            $offreManager2=$this->get('caravane_organic.offre_manager');
            $offreManager2->loadEntity($entity);
            $offreManager2->getIssues();
            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)).$hash);
        }
        else {
          //var_dump($request->request);
            $this->customErrors[]=$editForm->getErrorsAsString();



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
        //$tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tentid);

        if(preg_match("/,/",$tentid)) {
            $tentid=explode(",",$tentid);
            foreach($tentid as $tid) {
                $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tid);
                $this->addTent($tent,$offre, $request);
            }
        }
        else {
            $tent=$em->getRepository('CaravaneOrganicBundle:Tent')->find($tentid);
            $this->addTent($tent,$offre, $request);
        }

        /*
        $rank=$this->getRank($offre);
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

            $product->setRank($rank);
            $product->setproductid($rank);


            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }
    */
        return new Response('ok');
    }



    private function addTent($tent,$offre, $request) {
        echo $tent->getId();
        $em = $this->getDoctrine()->getManager();
        $rank=$this->getRank($offre);
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

            $product->setRank($rank);
            $product->setproductid($rank);


            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }
    }


    public function addTransportProductAction(Request $request,$id,$transportid) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $transport=$em->getRepository('CaravaneOrganicBundle:Transport')->find($transportid);

        $rank=$this->getRank($offre);
        if($transport) {

            $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2offre();

            $product->setOffreid($offre);

            $product->setInsertdate(new \Datetime('now'));
            $product->setUpdatedate(new \Datetime('now'));
            $product->setIsoption(false);
            $product->setPrice($transport->getCost());
            $product->setDescription($transport->getName()."(".$transport->getZip().")");

            $product->setRank($rank);
            $product->setproductid($rank);

            $em->persist($product);
            $offre->addProduct($product);
            $em->persist($offre);
            $em->flush();
        }

        return new Response('ok');
    }

    public function addProductAction(Request $request,$id) {
        $em = $this->getDoctrine()->getManager();
        $offre=$em->getRepository('CaravaneOrganicBundle:Offre')->find($id);
        $products=$em->getRepository('CaravaneOrganicBundle:Product2offre')->findByOffreid($id);
        $rank=$this->getRank($offre);

        $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2offre();
        $product->setOffreid($offre);
        $product->setProductid($rank);
        $product->setRank($rank);
        $product->setDescription('New product');
        $product->setPrice(0);
        $product->setInsertdate(new \Datetime('now'));
        $product->setUpdatedate(new \Datetime('now'));
        $product->setIsoption($request->request->get('option'));

        $em->persist($product);
        $offre->addProduct($product);
        $em->persist($offre);
        $em->flush();
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
        $html2pdf = $this->get('html2pdf_factory');
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
            $product->setProductid($rank);
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


            "validity"=>"Validity",
            "jobId"=>"Job",
            "insertDate"=>"Creation date",
            "updateDate"=>"Last update",

        );



        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CaravaneOrganicBundle:Offre')->findBy(array('deleted'=>false, 'public'=>true));

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
                    else if($k=='jobId') {
                        if($entity->getJobId()) {
                            $value=$entity->getJobId()->getReference();
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




    /**
     * Creates a new Offre entity.
     *
     */
    public function duplicateAction(Request $request, $id)
    {
        $em = $em=$this->getDoctrine()->getManager();;
        if($sourceOffre = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id)) {
            $sourceOffre->setReference('');
            if($sourceOffre->getJobid()) {
                $job = new Job();
                $sourceOffre->setJobid(null);
            }
            $sourceOffre->setStatus('draft');
            $sourceOffre->setInsertDate(new \Datetime('now'));
            $sourceOffre->setUpdateDate(new \Datetime('now'));
            $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();

            $form   = $this->createForm(new OffreType(), $sourceOffre);

            return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
                'entity' => $sourceOffre,
                'edit_form'   => $form->createView(),
                'productCategories' =>$productCategories,
                'customErrors'=>$this->customErrors
            ));

        }
        throw $this->createNotFoundException('Unable to find Offre entity.');
    }



    private function getRank($offre) {
        $em=$this->getDoctrine()->getManager();
        $rank=0;
        if($products=$em->getRepository('CaravaneOrganicBundle:Product2offre')->findBy(array('offreid'=>$offre->getId()),array('rank'=>'asc') )) {
            $rank=count($products);
        }
        $rank++;
        return $rank;
    }

}
