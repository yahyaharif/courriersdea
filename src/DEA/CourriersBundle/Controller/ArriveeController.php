<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DEA\CourriersBundle\Entity\Arrivee;
use DEA\CourriersBundle\Form\ArriveeType;

/**
 * Arrivee controller.
 *
 */
class ArriveeController extends Controller
{

    /**
     * Lists all Arrivee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CourriersBundle:Arrivee')->findAll();

        return $this->render('CourriersBundle:Arrivee:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Arrivee entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Arrivee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('arrivee_show', array('id' => $entity->getId())));
        }

        return $this->render('CourriersBundle:Arrivee:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Arrivee entity.
     *
     * @param Arrivee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Arrivee $entity)
    {
        $form = $this->createForm(new ArriveeType(), $entity, array(
            'action' => $this->generateUrl('arrivee_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Arrivee entity.
     *
     */
    public function newAction()
    {
        $entity = new Arrivee();
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAll();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAll();
        $form = $this->createCreateForm($entity);

        return $this->render('CourriersBundle:Arrivee:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'arrivees' => $arrivees,
            'departs' => $departs,
        ));
    }

    /**
     * Finds and displays a Arrivee entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Arrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arrivee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Arrivee:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Arrivee entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Arrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arrivee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Arrivee:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Arrivee entity.
     *
     * @param Arrivee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Arrivee $entity)
    {
        $form = $this->createForm(new ArriveeType(), $entity, array(
            'action' => $this->generateUrl('arrivee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Arrivee entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Arrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Arrivee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('arrivee_edit', array('id' => $id)));
        }

        return $this->render('CourriersBundle:Arrivee:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Arrivee entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CourriersBundle:Arrivee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Arrivee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('arrivee'));
    }

    /**
     * Creates a form to delete a Arrivee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('arrivee_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }
}
