<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\MarquesRepository;
use App\Repository\PartialsRepository;
use App\Repository\UserRepository;
use App\Repository\VoituresRepository;
use App\Repository\ImagesVoituresRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//! création home page
class HomeController extends AbstractController {
    #[Route('/home', 'home', methods: ['GET'])]
    public function index(): Response {
        return $this->render('home.html.twig', [
            
        ]);
    }


    // public function list()
    // public function footer(MarquesRepository $footer): Response {
    //     return $this->render('home.html.twig', [
    //         "footer" => $footer->find(1),
    //     ]);
    // }
}
