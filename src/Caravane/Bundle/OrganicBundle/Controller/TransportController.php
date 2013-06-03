<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Transport;
use Caravane\Bundle\OrganicBundle\Form\TransportType;

/**
 * Transport controller.
 *
 */
class TransportController extends Controller
{
    /**
     * Lists all Transport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaravaneOrganicBundle:Transport')->findAll();

        return $this->render('CaravaneOrganicBundle:Transport:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Transport entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Transport();
        $form = $this->createForm(new TransportType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transport_edit', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Transport:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Transport entity.
     *
     */
    public function newAction()
    {
        $entity = new Transport();
        $form   = $this->createForm(new TransportType(), $entity);

        return $this->render('CaravaneOrganicBundle:Transport:new.html.twig', array(
            'entity' => $entity,
            'edit_form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Transport entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Transport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Transport:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Transport entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Transport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transport entity.');
        }

        $editForm = $this->createForm(new TransportType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Transport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Transport entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Transport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TransportType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transport_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Transport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Transport entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Transport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Transport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('transport'));
    }

    /**
     * Creates a form to delete a Transport entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }



    public function getAvailableAction() {
        $em=$this->getDoctrine()->getManager();
        $entities=$em->getRepository('CaravaneOrganicBundle:Transport')->findAll();
        return $this->render('CaravaneOrganicBundle:Transport:available.html.twig', array(
            'entities'=>$entities
        ));
    }
}
