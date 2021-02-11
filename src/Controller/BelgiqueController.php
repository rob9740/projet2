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
        return $this->render('country/index.html.twig', [
            'titlePage' => 'BelgiqueController',
            'country' => 'Belgique',
            'articles' => $articleRepository->findBy( ['country' => 'belgique'] ),
            'hasSlider' => true
        ]);
    }
}
