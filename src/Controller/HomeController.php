<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route("/home", "home.index")]
    public function index(): Response
    {
        return $this->render("home.html.twig");
    }
}
