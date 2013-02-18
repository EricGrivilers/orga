<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Caravane\Bundle\OrganicBundle\Entity\Tent;
use Caravane\Bundle\OrganicBundle\Form\TentType;

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

        $entities = $em->getRepository('CaravaneOrganicBundle:Tent')->findAll();

        return $this->render('CaravaneOrganicBundle:Tent:index.html.twig', array(
            'entities' => $entities,
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
        $entity = new Tent();
        $form   = $this->createForm(new TentType(), $entity);

        return $this->render('CaravaneOrganicBundle:Tent:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Tent entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Tent();
        $form = $this->createForm(new TentType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tent_show', array('id' => $entity->getId())));
        }

        return $this->render('CaravaneOrganicBundle:Tent:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tent entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tent entity.');
        }

        $editForm = $this->createForm(new TentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CaravaneOrganicBundle:Tent:edit.html.twig', array(
            'entity'      => $entity,
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
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tent entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TentType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tent_edit', array('id' => $id)));
        }

        return $this->render('CaravaneOrganicBundle:Tent:edit.html.twig', array(
            'entity'      => $entity,
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

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Tent')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tent entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tent'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
