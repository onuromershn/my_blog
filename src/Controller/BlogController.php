<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/homepage", name="blog_list")
     */
    public function list(): Response
    {
        return $this->render('blog/list.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog/view", name="blog_view")
     */
    public function view(): Response
    {
        return $this->render('blog/view.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
