<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Offre;
use Caravane\Bundle\OrganicBundle\Form\OffreType;

/**
 * Offre controller.
 *
 */
class OffreController extends Controller
{
    /**
     * Lists all Offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();


        

        $entities = $em->getRepository('CaravaneOrganicBundle:Offre')->findAll();

        return $this->render('CaravaneOrganicBundle:Offre:index.html.twig', array(
            'entities' => $entities,
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
        $entity = new Offre();
        $form   = $this->createForm(new OffreType(), $entity);

        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Offre entity.
     *
     */
    public function newFromClientAction($clientId)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Offre();
        $client=$em->getRepository('CaravaneOrganicBundle:Client')->find($clientId);
        $entity->setClientId($client);
        $form   = $this->createForm(new OffreType(), $entity);

        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }


    /**
     * Creates a new Offre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Offre();
        $form = $this->createForm(new OffreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offre_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Offre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Offre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

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
        ));
    }

    /**
     * Edits an existing Offre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Offre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new OffreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offre_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Offre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
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
}
