<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerUserController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_controller_user')]
    public function index(): Response
    {
        return $this->render('controller_user/index.html.twig', [
            'controller_name' => 'ControllerUserController',
        ]);
    }
}
