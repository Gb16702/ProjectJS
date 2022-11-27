<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projets', name: 'projets')]
    public function index(ProjectsRepository $projects): Response
    {
        return $this->render('projects/index.html.twig', [
            'projets' => $projects -> findAll()
        ]);
    }
}
