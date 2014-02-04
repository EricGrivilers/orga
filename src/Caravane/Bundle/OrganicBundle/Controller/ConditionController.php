<?php

namespace Caravane\Bundle\OrganicBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Caravane\Bundle\OrganicBundle\Entity\Condition;
use Caravane\Bundle\OrganicBundle\Form\ConditionType;

/**
 * Condition controller.
 *
 * @Route("/condition")
 */
class ConditionController extends Controller
{
    /**
     * Lists all Condition entities.
     *
     * @Route("/", name="condition")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CaravaneOrganicBundle:Condition')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Condition entity.
     *
     * @Route("/", name="condition_create")
     * @Method("POST")
     * @Template("CaravaneOrganicBundle:Condition:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Condition();
        $form = $this->createForm(new ConditionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('condition_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Condition entity.
     *
     * @Route("/new", name="condition_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Condition();
        $form   = $this->createForm(new ConditionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Condition entity.
     *
     * @Route("/{id}", name="condition_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Condition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Condition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Condition entity.
     *
     * @Route("/{id}/edit", name="condition_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Condition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Condition entity.');
        }

        $editForm = $this->createForm(new ConditionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Condition entity.
     *
     * @Route("/{id}", name="condition_update")
     * @Method("PUT")
     * @Template("CaravaneOrganicBundle:Condition:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CaravaneOrganicBundle:Condition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Condition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ConditionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('condition_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Condition entity.
     *
     * @Route("/{id}", name="condition_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CaravaneOrganicBundle:Condition')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Condition entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('condition'));
    }

    /**
     * Creates a form to delete a Condition entity by id.
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
}
