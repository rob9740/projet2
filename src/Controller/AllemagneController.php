<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class AllemagneController extends AbstractController
{
    /**
     * @Route("/allemagne", name="allemagne")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('country/index.html.twig', [
            'titlePage' => 'AllemagneController',
            'country' => 'Allemagne',
            'articles' => $articleRepository->findBy( ['country' => 'allemagne']),
            //'articles' => $articleRepository->findBy( ['country' => 'allemagne']),
        ]);
    }
}
