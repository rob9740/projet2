<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class FranceController extends AbstractController
{
    /**
     * @Route("/france", name="france")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('country/index.html.twig', [
            'titlePage' => 'franceController',
            'country' => 'france',
            'articles' => $articleRepository->findBy( ['country' => 'france']),
            'hasSlider' => true
        ]);
    }
}
