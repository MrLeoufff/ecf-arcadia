<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use App\Repository\ServiceRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(
        AnimalRepository $animalRepository,
        ServiceRepository $serviceRepository,
        UserRepository $userRepository
    ): Response {
        $totalUsers = $userRepository->count([]);
        $totalAnimals = $animalRepository->count([]);
        $totalServices = $serviceRepository->count([]);

        return $this->render('admin/dashboard.html.twig', [
            'total_users' => $totalUsers,
            'total_animals' => $totalAnimals,
            'total_services' => $totalServices,
        ]);
    }
}
