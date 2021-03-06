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
use Caravane\Bundle\OrganicBundle\Managers\ExportManager;

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
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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
            'products'=>$this->getProducts($entity)
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
            $p->setTentid($product->getTentid());
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



        $message = \Swift_Message::newInstance()
            ->setSubject('New invoice requested')
            ->setFrom("organic@caravanemedia.com")
            ->setTo($this->container->getParameter('contact_email'))
            ->setCc("eric@caravanemedia.com")
            ->setBody($this->container->get('templating')->render('CaravaneOrganicBundle:Invoice:email.new.html.twig',
                array('invoice' => $entity)),
                'text/html'
            );
        $this->container->get('mailer')->send($message);


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


       public function addTransportProductAction(Request $request,$id,$transportid) {
            $em = $this->getDoctrine()->getManager();
            $invoice=$em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);
            $transport=$em->getRepository('CaravaneOrganicBundle:Transport')->find($transportid);
            $rank=$this->getRank($invoice);

            echo $transport->getId();
            echo $transport->getCost();
            echo $transport->getname();


            if($transport) {

                $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2invoice();

                $product->setInvoiceid($invoice);
                $product->setProductid($rank);
                $product->setRank($rank);
                $product->setInsertdate(new \Datetime('now'));
                $product->setUpdatedate(new \Datetime('now'));
                $product->setPrice($transport->getCost());
                $product->setDescription($transport->getName()."(".$transport->getZip().")");



                $em->persist($product);
                $invoice->addProduct($product);
                $em->persist($invoice);
                $em->flush();
            }

            return new Response('ok transport');
        }


    public function addProductAction(Request $request,$id) {
        $em = $this->getDoctrine()->getManager();
        $invoice=$em->getRepository('CaravaneOrganicBundle:Invoice')->find($id);
        $products=$em->getRepository('CaravaneOrganicBundle:Product2invoice')->findByInvoiceid($id);
        $rank=$this->getRank($invoice);

        $product=new \Caravane\Bundle\OrganicBundle\Entity\Product2invoice();
        $product->setInvoiceid($invoice);
        $product->setProductid($rank);
        $product->setRank($rank);
        $product->setDescription('New product');
        $product->setPrice(0);
        $product->setInsertdate(new \Datetime('now'));
        $product->setUpdatedate(new \Datetime('now'));


        $em->persist($product);
        $invoice->addProduct($product);
        $em->persist($invoice);
        $em->flush();
        return new Response('ok');

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
            'em' => $this->getDoctrine()->getManager(),
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
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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
            'em' => $this->getDoctrine()->getManager(),
        ));
        $deleteForm = $this->createDeleteForm($id);

/**/
        return $this->render('CaravaneOrganicBundle:Invoice:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors,
            'conditions'=>$em->getRepository('CaravaneOrganicBundle:Invoice')->getConditions(),
            'products'=>$this->getProducts($entity)
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
            'em' => $this->getDoctrine()->getManager(),
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
            'customErrors'=>$this->customErrors,
            'products'=>$this->getProducts($entity)
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
        $html2pdf = $this->get('html2pdf_factory');
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
                $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Invoice:pdf.".$type.".html.twig",$file,$_locale,$force, $this->getProducts($entity));
                switch($type) {
                    default:
                    case "r1":
                        $entity->setR1date(new \Datetime('now'));
                    break;
                    case "r2":
                        $entity->setR2date(new \Datetime('now'));
                    break;
                    case "med":
                        $entity->setMeddate(new \Datetime('now'));
                    break;
                }
                $em->persist($entity);
                $em->flush();
            }
            else {

                $file=array(
                    'path'=>__DIR__."/../../../../../".$this->container->getParameter('web_dir')."/docs/invoices",
                    'filename'=>$entity->getReference()."-".$_locale.".pdf"
                );
                $pdfManager->createPdf($entity,"CaravaneOrganicBundle:Invoice:pdf.html.twig",$file,$_locale,$force, $this->getProducts($entity));
            }
            return $this->redirect("/docs/invoices/".$file['filename']);
        }

    }


    public function sortProductsAction(Request $request,$id) {


        $em=$this->getDoctrine()->getManager();
        if(!$entity=$em->getRepository('CaravaneOrganicBundle:Invoice')->find($id)) {
            return new Response("error");
        }

        $list=$request->request->get('list');
        $rank=1;
        foreach($list as $productId) {
            $product=$em->getRepository('CaravaneOrganicBundle:Product2invoice')->find($productId);
            $product->setRank($rank);
            $rank++;
            $em->persist($product);
        }
        $em->flush();
        return new Response("ok");



    }

    public function cronAction() {


        $invoices=array();
        $em=$this->getDoctrine()->getManager();
        $r1=$em->getRepository('CaravaneOrganicBundle:Invoice')->findDues(1,15);
        $r2=$em->getRepository('CaravaneOrganicBundle:Invoice')->findDues(2,8);
        $med=$em->getRepository('CaravaneOrganicBundle:Invoice')->findDues(3,15);

        $invoices['r1']=$r1;
        $invoices['r2']=$r2;
        $invoices['med']=$med;


        if(count($r1)>0 || count($r2)>0 || count($med)>0) {
            echo "count ok";
            $message = \Swift_Message::newInstance()
            ->setSubject('Reminders')
            ->setFrom("organic@caravanemedia.com")
           // ->setTo($this->container->getParameter('contact_email'))
             ->setTo("vincent@organic-concept.com")
            ->setCc("eric@caravanemedia.com")
            ->setBody($this->container->get('templating')->render('CaravaneOrganicBundle:Invoice:email.cron.html.twig',
                array('invoices' => $invoices)),
                'text/html'
            );
            if($this->container->get('mailer')->send($message)) {
                echo "message ok";
                foreach($invoices as $k=>$it) {
                    echo "---rrrr";
                    foreach($it as $invoice) {
                        if($k=='r1') {
                            echo "r1 ".$invoice->getReference()." (".$invoice->getInvoicedate()->format('Y-m-d').")<br/>";
                            $invoice->setR1(true);
                        }
                        else if ($k=='r2') {
                            echo "r2 ".$invoice->getReference()." (".$invoice->getInvoicedate()->format('Y-m-d').")<br/>";
                            
                            $invoice->setR2(true);
                        }
                        else if($k=='med'){
                            echo "med ".$invoice->getReference()." (".$invoice->getInvoicedate()->format('Y-m-d').")<br/>";
                            
                            $invoice->setMed(true);
                        }
                        $em->persist($invoice);




                        //echo "<br/>";
                            //echo $invoice->getId();
                    }
                }
                $em->flush();
            }
            else {
                echo "error";
            }
        }
        else {
            echo "no mail";
        }









        return new Response('ok');
    }



    public function exportAction() {


        $filename = "invoices";

        $fields = array(
            "id"=>"ID",
            "reference"=>"Reference",
            "invoicedate"=>"Date",
            "year"=>"Year",
            "jobId"=>"Job",
            "offreType"=>"Type",
            "slice"=>"Percent slice",
            "sliceDescription"=>"Slice description",
            "cSlice"=>"Slice nb",
            //"nbSlices"=>"",
            "clientId"=>"Client",
            "status"=>"Status",
            "paymentDate"=>"Payment date",
            "priceHT"=>"Price HT",
            "priceType"=>"Price type",
            "creditNote"=>"Is credit note",
            "comments"=>"Comments",
            "conditions"=>"Conditions",
            "conditions1"=>"Conditions 1",
            "conditions2"=>"Conditions 2",
            "content"=>"Content",
            
            "clientType"=>"Client type",
            "cieType"=>"Cie type",
            "clientTitle"=>"Title",
            "name"=>"Name",
            "lastname"=>"Lastname",
            "firstname"=>"Firstname",
            "vat"=>"VAT",
            "address"=>"Street",
            "number"=>"Number",
            "zip"=>"Postal Code",
            "city"=>"City",
            "country"=>"Country",
            "account"=>"Account amnager",
            "r1"=>"Reminder 1",
            "r1Date"=>"Reminder 1 date",
            "r2"=>"Reminder 2",
            "r2Date"=>"Reminder 2 date",
            "med"=>"Commandment",
            "medDate"=>"Commandment date",
            "language"=>"Language",
            //"sliceid"=>"Slice",
            
            "discount"=>"Discount",
            "discountDescription"=>"Discount description",
            "insertDate"=>"Creation date"

        );

        

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CaravaneOrganicBundle:Invoice')->findAll();
        
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
                if($k=="account") {
                    if($entity->getJobId()) {
                        if($entity->getJobId()->getUserId()) {
                            $value = $entity->getJobId()->getUserId()->getName();
                        }
                    }
                }
                else if($entity->$getter()) {
                    if($k=='insertDate' || $k=='paymentDate' || $k=="r1Date" || $k=="r2Date" || $k=="medDate" || $k=="invoicedate" ) {
                        //echo $getter."<br/>";
                        $value=$entity->$getter()->format('Y-m-d');
                        if($value=='-0001-11-30') {
                            $value="";
                        }   
                    }
                   
                    else if($k=='jobId') {
                        $value=$entity->getJobId()->getReference();
                    }
                    else if($k=='clientId') {
                        $value=$entity->getClientId()->getName();
                    }
                    else if($k=='sliceid') {
                        $value=$entity->getSliceId()->getSlice();
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


     private function getRank($invoice) {
        $em=$this->getDoctrine()->getManager();
        $rank=0;
        if($products=$em->getRepository('CaravaneOrganicBundle:Product2invoice')->findBy( array('invoiceid'=>$invoice->getId()),array('rank'=>'asc') )) {
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
