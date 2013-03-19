<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Form\OffreType;

/**
 * Offre controller.
 *
 */
class OffreController extends Controller
{
    private $planningTypes;

    public function __construct() {
        $this->planningTypes=array('preview','build','inplace','unbuild');
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

        $entities=$em->getRepository('CaravaneOrganicBundle:Offre')->listAll($type,$ob,$page);
        $nbpages=(Integer)(count($entities)/25)+1;

        return $this->render('CaravaneOrganicBundle:Offre:index.html.twig', array(
            'entities' => $entities,
            'type'=>$type,
            'ob'=>$ob,
            'page'=>$page,
            "nbpages"=>$nbpages
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
        $slice->setComments('');
        $entity->addSlice($slice);


        foreach($this->planningTypes as $planningType) {
            $planning=new \Caravane\Bundle\OrganicBundle\Entity\Planning2offre();
            $planning->setPlanningtype($planningType);
            $planning->setStartdate(new \Datetime('now'));
            $planning->setEnddate(new \Datetime('now'));
            $planning->setEtat('TO DO');
            $entity->addPlanning($planning);
        }
        $client=new \Caravane\Bundle\organicBundle\Entity\Client();
        if($clientId=$this->get('request')->query->get('clientId')) {
            if(!$client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId)) {
                $client=new \Caravane\Bundle\organicBundle\Entity\Client();
            }
        }
        $entity->setClientid($client);
        $form   = $this->createForm(new OffreType(), $entity);

        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'productCategories' =>$productCategories
        ));
    }




    /**
     * Creates a new Offre entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $productCategories=$em->getRepository('CaravaneOrganicBundle:ProductCategory')->findAll();
        $entity  = new Offre();
        if($clientId=$this->get('request')->request->get('clientId')) {
            $client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId);
            $entity->setClientid($client);
        }
        else {
            $client=$entity->getClientid();
        }

        $form = $this->createForm(new OffreType(), $entity);
        $form->bind($request);

        $issue=0;
        if ($form->isValid()) {
            $iso="TMP";

            if($this->get('security.context')->isGranted('ROLE_USER', $this->getUser())) {
                $iso=$this->getUser()->getIso();
            }
            $entity->setLanguage($entity->getClientid()->getLanguage());
            $entity->setReference(date('Ym')."-".$entity->getId()."-O-".$iso);
            $entity->setInsertdate(new \Datetime('now'));
            $entity->setUpdatedate(new \Datetime('now'));
            $em->persist($client);
            $entity->setClientid($client);
            foreach($entity->getPlannings() as $planning) {
                $planning->setOffreid($entity);
                $em->persist($planning);
            }

            $priceHt=0;
            foreach($entity->getProducts() as $product) {
                $product->setOffreid($entity);
                $product->setUpdatedate(new \Datetime('now'));
                if($product->getIsoption()==false) {
                    $priceHt+=$product->getPrice();
                }
                $em->persist($product);
            }
            $entity->setPrice($priceHt);
            $totalSlice=0;
            $totalSlicePriceHt=0;
             foreach($entity->getSlices() as $slice) {
                $slice->setOffreid($entity);
                if($slice->getSlice()==0 && $slice->getPriceht()>0) {
                    $slice->setSlice((100*$slice->getPriceht())/$entity->getPrice());
                }
                else if($slice->getSlice()>0 && $slice->getPriceht()==0) {
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
            $entity->setReference(date('Ym')."-".$entity->getId()."-O".strtoupper(substr($entity->getOffretype(),0,1))."-".$this->getUser()->getIso());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $entity->getId())));
        }
        else {
           // print_r($form->getErrors());
            print_r($form->getErrorsAsString()) ;
        }
        //return new Response('nok');
        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
            'productCategories' =>$productCategories
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

        $editForm = $this->createForm(new OffreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'productCategories' =>$productCategories
        ));
    }

    /**
     * Edits an existing Offre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
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

        $issue=0;
        if ($editForm->isValid()) {
            $priceHt=0;
            foreach($entity->getProducts() as $product) {
                $product->setOffreid($entity);
                $product->setUpdatedate(new \Datetime('now'));
                if($product->getIsoption()==false) {
                    $priceHt+=$product->getPrice();
                }
                $em->persist($product);
            }
            $entity->setPrice($priceHt);
            $totalSlice=0;
            $totalSlicePriceHt=0;
             foreach($entity->getSlices() as $slice) {
                $slice->setOffreid($entity);
                if($slice->getSlice()==0 && $slice->getPriceht()>0) {
                    $slice->setSlice((100*$slice->getPriceht())/$entity->getPrice());
                }
                else if($slice->getSlice()>0 && $slice->getPriceht()==0) {
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

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'productCategories' =>$productCategories
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

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Offre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

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

    public function addStockProductAction($id,$tentid) {
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

            $em->persist($product);
            $em->persist($offre);
            $em->flush();
        }

        return new Response('ok');
    }
}
