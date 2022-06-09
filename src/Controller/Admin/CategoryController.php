<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/admin/category/list", name="admin_category_list")
     */
    public function listCagetories()
    {
        return $this->render('admin/category/list.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    /**
     * @Route("/admin/category/add", name="admin_category_add")
     */
    public function addCagetory()
    {
        return $this->render('admin/category/add.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    /**
     * @Route("/admin/category/edit", name="admin_category_edit")
     */
    public function editCagetory()
    {
        return $this->render('admin/category/edit.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
