<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BelgiqueController extends AbstractController
{
    /**
     * @Route("/belgique", name="belgique")
     */
    public function index(): Response
    {
        return $this->render('belgique/index.html.twig', [
            'controller_name' => 'BelgiqueController',
        ]);
    }
}
