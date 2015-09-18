<?php

namespace DEA\CourriersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        $um = $this->get('fos_user.user_manager');
        $users = $um->findUsers();
        return $this->render('CourriersBundle:User:index.html.twig', [
            "users" => $users,
        ]);
    }
}
