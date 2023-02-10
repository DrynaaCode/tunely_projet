<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard.home',methods:'GET|POST')]
    public function home(): Response
    {
        // return $this->render('controller_dashboard/index.html.twig', [
        //     'controller_name' => 'ControllerDashboardController',
        // ]);
        return $this->render('/admin_interface/layout.html.twig');
    }
}
