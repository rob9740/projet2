<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class BelgiqueController extends AbstractController
{
    /**
     * @Route("/belgique", name="belgique")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('belgique/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
}
