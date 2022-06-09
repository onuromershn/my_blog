<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/admin/page/list", name="admin_page_list")
     */
    public function listPages()
    {
        return $this->render('admin/page/list.html.twig', [
            'controller_name' => 'pageController',
        ]);
    }

    /**
     * @Route("/admin/page/add", name="admin_page_add")
     */
    public function addPage()
    {
        return $this->render('admin/page/add.html.twig', [
            'controller_name' => 'pageController',
        ]);
    }

    /**
     * @Route("/admin/page/edit", name="admin_page_edit")
     */
    public function editPage()
    {
        return $this->render('admin/page/edit.html.twig', [
            'controller_name' => 'pageController',
        ]);
    }

    /**
     * @Route("/admin/page/view", name="admin_page_view")
     */
    public function viewPage()
    {
        return $this->render('admin/page/view.html.twig', [
            'controller_name' => 'pageController',
        ]);
    }
}
