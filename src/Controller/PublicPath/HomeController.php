<?php

namespace App\Controller\PublicPath;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="public_path_home")
     */
    public function index(): Response
    {
        return $this->render('public_path/home/homePage.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/test-article", name="public_path_testArticle")
     */
    public function testArticle(): Response
    {
        $article = new Article();
        $articleForm = $this->createForm(ArticleType::class, $article);

        return $this->render('public_path/my_test/index.html.twig', [
            'articleForm' => $articleForm->createView(),
        ]);
    }
}
