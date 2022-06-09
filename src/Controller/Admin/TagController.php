<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/admin/tag/list", name="admin_tag_list")
     */
    public function listTags()
    {
        return $this->render('admin/tag/list.html.twig', [
            'controller_name' => 'tagController',
        ]);
    }

    /**
     * @Route("/admin/tag/add", name="admin_tag_add")
     */
    public function addTag()
    {
        return $this->render('admin/tag/add.html.twig', [
            'controller_name' => 'tagController',
        ]);
    }

    /**
     * @Route("/admin/tag/edit", name="admin_tag_edit")
     */
    public function editTag()
    {
        return $this->render('admin/tag/edit.html.twig', [
            'controller_name' => 'tagController',
        ]);
    }
}
