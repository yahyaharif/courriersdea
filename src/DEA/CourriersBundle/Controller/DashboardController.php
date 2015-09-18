<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function entreeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function traiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function valideAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function retardAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function archiveAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function mescourriersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $arrivees = $em->getRepository("CourriersBundle:Arrivee")->findAllEntree();
        $departs = $em->getRepository("CourriersBundle:Depart")->findAllEntree();

        return $this->render('CourriersBundle:Dashboard:entree.html.twig', [
            "arrivees" => $arrivees,
            "departs" => $departs,
        ]);
    }

    public function indexAction()
    {
        return $this->render('CourriersBundle:Dashboard:index.html.twig');
    }
}
