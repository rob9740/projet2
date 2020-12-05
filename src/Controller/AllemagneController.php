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
        return $this->render('allemagne/index.html.twig', [
            'controller_name' => 'AllemagneController',
            'articles' => $articleRepository->findAll(),
        ]);
    }
}
