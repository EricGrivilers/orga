<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Client;
use Caravane\Bundle\OrganicBundle\Form\ClientType;

use Caravane\Bundle\OrganicBundle\Managers\ClientManager;
use Caravane\Bundle\OrganicBundle\Managers\ExportManager;
/**
 * Client controller.
 *
 */
class ClientController extends Controller
{

    private $customErrors;

    public function __construct() {
        $this->customErrors=array();
    }

    /**
     * Lists all Client entities.
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
            $ob='name asc';
        }
        if(!$offset=$request->query->get('offset')) {
            $offset=25;
        }
         if(!$page=$request->query->get('page')) {
            $page=1;
        }
       // $entities = $em->getRepository('CaravaneOrganicBundle:Client')->listAll();
        $entities=$em->getRepository('CaravaneOrganicBundle:Client')->listAll($type,$ob,$page,$offset);
        $nbpages=(Integer)(count($entities)/$offset)+1;


        return $this->render('CaravaneOrganicBundle:Client:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages,
            'offset'=>$offset
        ));
    }

    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Client:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Client entity.
     *
     */
    public function newAction()
    {
        $entity = new Client();
        $form   = $this->createForm(new ClientType(), $entity);

        return $this->render('CaravaneOrganicBundle:Client:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors

        ));
    }

    /**
     * Creates a new Client entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity  = new Client();
        $form = $this->createForm(new ClientType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $clientManager=new ClientManager($entity,$em);
            $client=$clientManager->persistNew();
/*
            $entity->setReference(strtoupper(substr($entity->getClientType(),0,1))."-".strtoupper(substr($entity->getName(),0,5))."-".$entity->getId());
            $entity->setInsertDate(new \Datetime("now"));
            $entity->setUpdateDate(new \Datetime("now"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $entity->setReference(strtoupper(substr($entity->getClientType(),0,1))."-".strtoupper(substr($entity->getName(),0,5))."-".$entity->getId());
            $em->persist($entity);
            $em->flush();
*/
            return $this->redirect($this->generateUrl('client_edit', array('id' => $entity->getId())));
        }
        else {
           // print_r($form->getErrors());
            print_r($form->getErrorsAsString()) ;
        }

        return $this->render('CaravaneOrganicBundle:Client:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $editForm = $this->createForm(new ClientType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Edits an existing Client entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ClientType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $entity->setUpdateDate(new \Datetime("now"));


            $em->persist($entity);
            $em->flush();


            return $this->redirect($this->generateUrl('client_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'customErrors'=>$this->customErrors
        ));
    }

    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Client')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Client entity.');
            }

            $entity->setPublic(false);
            $em->persist($entity);
           // $em->remove($entity);
            $em->flush();
            return new Response("deleted");
       // }

        return $this->redirect($this->generateUrl('client'));
    }

    public function autocompleteAction() {
        $keyword=$this->get('request')->query->get('query');
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('CaravaneOrganicBundle:Client')->autocomplete($keyword,$this,'json');
        return new Response($clients);

    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function exportAction() {


        $filename = "clients";

        $fields = array(
            "id" => "ID",
            "reference" => "Reference",
            "clientType" => "Type",
            "isOwner" => "Is owner",
            "name" => "Name",
            "firstname" => "Firstname",
            "lastname" => "lastname",
            "clientTitle" => "Title",
            "cieType" => "Cie type",
            "vat" => "VAT",
            "address" => "Street",
            "number" => "Number",
            "zip" => "Postal Code",
            "city" => "City",
            "country" => "Country",
            "phone" => "Phone",
            "phone2" => "Phone2",
            "mobile" => "Mobile",
            "fax" => "Fax",
            "email" => "Email",
            "url" => "Website",
            "language" => "Language",
            "userId" => "Account Manager",
            "origin" => "Origin",
            "insertDate" => "Creation date",
            "updateDate" => "Last update"
        );

        

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CaravaneOrganicBundle:Client')->findBy(array('public'=>true));
        
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
                    else if($k=='userId') {
                        $value=$entity->getUserId()->getName();
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




    public function getDataAction($id) {
        $em = $this->getDoctrine()->getManager();
        $datas=array();
        if($client=$em->getRepository('CaravaneOrganicBundle:Client')->find($id)) {
            $datas['name']=$client->getName();
            $datas['lastname']=$client->getLastname();
            $datas['firstname']=$client->getFirstname();
            $datas['clienttitle']=$client->getClienttitle();
            $datas['clienttype']=$client->getClienttype();
            $datas['vat']=$client->getVat();
            $datas['cietype']=$client->getCietype();

            $datas['address']=$client->getAddress();
            $datas['number']=$client->getNumber();
            $datas['zip']=$client->getZip();
            $datas['city']=$client->getCity();
            $datas['country']=$client->getCountry();

            return new Response(json_encode($datas));
        }
        return new Response('ok');

    }




}
