<?php

namespace App\Controller\PublicPath;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyTestController extends AbstractController
{
    /**
     * @Route("/public/path/my/test", name="public_path_my_test")
     */
    public function index(): Response
    {
        return $this->render('public_path/my_test/index.html.twig', [
            'controller_name' => 'MyTestController',
        ]);
    }
}
