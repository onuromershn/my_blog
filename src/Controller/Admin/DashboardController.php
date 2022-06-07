<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function dashboard()
    {
        return $this->render('admin/dashboard/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
