<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DEA\CourriersBundle\Entity\Affectdepart;
use DEA\CourriersBundle\Form\AffectdepartType;

/**
 * Affectdepart controller.
 *
 */
class AffectdepartController extends Controller
{

    /**
     * Lists all Affectdepart entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CourriersBundle:Affectdepart')->findAll();

        return $this->render('CourriersBundle:Affectdepart:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Affectdepart entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Affectdepart();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectdepart_show', array('id' => $entity->getId())));
        }

        return $this->render('CourriersBundle:Affectdepart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Affectdepart entity.
     *
     * @param Affectdepart $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Affectdepart $entity)
    {
        $form = $this->createForm(new AffectdepartType(), $entity, array(
            'action' => $this->generateUrl('affectdepart_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Affectdepart entity.
     *
     */
    public function newAction()
    {
        $entity = new Affectdepart();
        $form   = $this->createCreateForm($entity);

        return $this->render('CourriersBundle:Affectdepart:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Affectdepart entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectdepart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectdepart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Affectdepart:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Affectdepart entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectdepart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectdepart entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Affectdepart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Affectdepart entity.
    *
    * @param Affectdepart $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Affectdepart $entity)
    {
        $form = $this->createForm(new AffectdepartType(), $entity, array(
            'action' => $this->generateUrl('affectdepart_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Affectdepart entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectdepart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectdepart entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affectdepart_edit', array('id' => $id)));
        }

        return $this->render('CourriersBundle:Affectdepart:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Affectdepart entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CourriersBundle:Affectdepart')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Affectdepart entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affectdepart'));
    }

    /**
     * Creates a form to delete a Affectdepart entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affectdepart_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
