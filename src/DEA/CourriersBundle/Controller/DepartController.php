<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DEA\CourriersBundle\Entity\Depart;
use DEA\CourriersBundle\Form\DepartType;

/**
 * Depart controller.
 *
 */
class DepartController extends Controller
{

    /**
     * Lists all Depart entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CourriersBundle:Depart')->findAll();

        return $this->render('CourriersBundle:Depart:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Depart entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Depart();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('depart_show', array('id' => $entity->getId())));
        }

        return $this->render('CourriersBundle:Depart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Depart entity.
     *
     * @param Depart $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Depart $entity)
    {
        $form = $this->createForm(new DepartType(), $entity, array(
            'action' => $this->generateUrl('depart_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Depart entity.
     *
     */
    public function newAction()
    {
        $entity = new Depart();
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAll();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAll();
        $form   = $this->createCreateForm($entity);

        return $this->render('CourriersBundle:Depart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'arrivees' => $arrivees,
            'departs' => $departs,
        ));
    }

    /**
     * Finds and displays a Depart entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Depart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Depart:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Depart entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Depart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depart entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Depart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Depart entity.
    *
    * @param Depart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Depart $entity)
    {
        $form = $this->createForm(new DepartType(), $entity, array(
            'action' => $this->generateUrl('depart_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Depart entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Depart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Depart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('depart_edit', array('id' => $id)));
        }

        return $this->render('CourriersBundle:Depart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Depart entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CourriersBundle:Depart')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Depart entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('depart'));
    }

    /**
     * Creates a form to delete a Depart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('depart_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
