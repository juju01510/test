<?php

namespace App\Controller;

use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('projects/projects.html.twig');
    }
}

