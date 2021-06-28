<?php

namespace App\Controller\PublicPath;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/public/path/home", name="public_path_home")
     */
    public function index(): Response
    {
        return $this->render('public_path/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
