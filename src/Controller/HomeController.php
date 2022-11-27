<?php

namespace App\Controller;

use App\Entity\User;

use App\Repository\ProjectsRepository;
use App\Repository\UserRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//! création home page
class HomeController extends AbstractController {
    #[Route('/accueil', 'home', methods: ['GET'])]
    public function index(UserRepository $userR, ProjectsRepository $projectsR): Response {
        return $this->render('home.html.twig', [
            'user' => $userR-> findAll(),
            'projects' => $projectsR -> findAll()

        ]);
    }


    // public function list()
    // public function footer(MarquesRepository $footer): Response {
    //     return $this->render('home.html.twig', [
    //         "footer" => $footer->find(1),
    //     ]);
    // }
}
