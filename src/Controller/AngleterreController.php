<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;

class AngleterreController extends AbstractController
{
    /**
     * @Route("/angleterre", name="angleterre")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('country/index.html.twig', [
            'titlePage' => 'AngleterreController',
            'country' => 'Angleterre',
            'articles' => $articleRepository->findBy( ['country' => 'angleterre']),
            'hasSlider' => true
        ]);
    }
}
