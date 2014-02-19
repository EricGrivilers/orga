<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Planning2offre;
use Caravane\Bundle\OrganicBundle\Form\Planning2offreType;
use Caravane\Bundle\OrganicBundle\Controller\PlanningController;

/**
 * Planning controller.
 *
 */
class Planning2offreController extends PlanningController
{
    /**
     * Lists all Planning entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaravaneOrganicBundle:Planning')->findAll();

        return $this->render('CaravaneOrganicBundle:Planning:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Planning entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Planning:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Planning entity.
     *
     */
    public function newAction()
    {
        $entity = new Planning();
        $form   = $this->createForm(new Planning2offreType(), $entity);

        return $this->render('CaravaneOrganicBundle:Planning:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Planning entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Planning();
        $form = $this->createForm(new Planning2offreType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planning_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Planning:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Planning entity.
     *
     */
    public function editAction($id)
    {

      
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning2offre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $editForm = $this->createForm(new Planning2offreType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Planning:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Planning entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Planning entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new Planning2offreType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planning_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Planning:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Planning entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Planning')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Planning entity.');
            }

            $entity->setPublic(false);
            $em->persist($entity);
           // $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('planning'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
