<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/admin/blog/list", name="admin_blog_list")
     */
    public function listBlogs()
    {
        return $this->render('admin/blog/list.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/admin/blog/add", name="admin_blog_add")
     */
    public function addBlog()
    {
        return $this->render('admin/blog/add.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/admin/blog/edit", name="admin_blog_edit")
     */
    public function editBlog()
    {
        return $this->render('admin/blog/edit.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/admin/blog/view", name="admin_blog_view")
     */
    public function viewBlog()
    {
        return $this->render('admin/blog/view.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
