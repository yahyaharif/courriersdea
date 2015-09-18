<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DEA\CourriersBundle\Entity\Affectarrivee;
use DEA\CourriersBundle\Form\AffectarriveeType;

/**
 * Affectarrivee controller.
 *
 */
class AffectarriveeController extends Controller
{

    /**
     * Lists all Affectarrivee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CourriersBundle:Affectarrivee')->findAll();

        return $this->render('CourriersBundle:Affectarrivee:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Affectarrivee entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Affectarrivee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectarrivee_show', array('id' => $entity->getId())));
        }

        return $this->render('CourriersBundle:Affectarrivee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Affectarrivee entity.
     *
     * @param Affectarrivee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Affectarrivee $entity)
    {
        $form = $this->createForm(new AffectarriveeType(), $entity, array(
            'action' => $this->generateUrl('affectarrivee_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Affectarrivee entity.
     *
     */
    public function newAction()
    {
        $entity = new Affectarrivee();
        $form   = $this->createCreateForm($entity);

        return $this->render('CourriersBundle:Affectarrivee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Affectarrivee entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectarrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectarrivee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Affectarrivee:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Affectarrivee entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectarrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectarrivee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CourriersBundle:Affectarrivee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Affectarrivee entity.
    *
    * @param Affectarrivee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Affectarrivee $entity)
    {
        $form = $this->createForm(new AffectarriveeType(), $entity, array(
            'action' => $this->generateUrl('affectarrivee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Affectarrivee entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CourriersBundle:Affectarrivee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Affectarrivee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('affectarrivee_edit', array('id' => $id)));
        }

        return $this->render('CourriersBundle:Affectarrivee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Affectarrivee entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CourriersBundle:Affectarrivee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Affectarrivee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affectarrivee'));
    }

    /**
     * Creates a form to delete a Affectarrivee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affectarrivee_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
