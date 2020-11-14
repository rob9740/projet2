<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AngleterreController extends AbstractController
{
    /**
     * @Route("/angleterre", name="angleterre")
     */
    public function index(): Response
    {
        return $this->render('angleterre/index.html.twig', [
            'controller_name' => 'AngleterreController',
        ]);
    }
}
