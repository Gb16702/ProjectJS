<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Projects;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/adminGG', name: 'admin')]
    public function index(): Response
    {

        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ProjectJS');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', "fa-solid fa-file-export", User::class);
        yield MenuItem::linkToCrud('Projects', "fa-solid fa-file-export", Projects::class);
        yield MenuItem::linktoRoute('Back to the website', 'fa-solid fa-rotate-left', 'home',);


    }
}
