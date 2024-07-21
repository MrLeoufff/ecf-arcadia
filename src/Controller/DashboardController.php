<?php

namespace App\Controller;

use App\Document\AnimalView;
use App\Form\VeterinaryReportFilterType;
use App\Repository\AnimalRepository;
use App\Repository\ServiceRepository;
use App\Repository\UserRepository;
use App\Repository\VeterinaryReportRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(
        AnimalRepository $animalRepository,
        ServiceRepository $serviceRepository,
        UserRepository $userRepository,
        DocumentManager $dm,
        VeterinaryReportRepository $veterinaryReportRepository,
        Request $request
    ): Response {
        $totalUsers = $userRepository->count([]);
        $totalAnimals = $animalRepository->count([]);
        $totalServices = $serviceRepository->count([]);
        $animalViews = $dm->getRepository(AnimalView::class)->findBy([], ['views' => 'DESC']);

        $filterForm = $this->createForm(VeterinaryReportFilterType::class);

        return $this->render('admin/dashboard.html.twig', [
            'total_users' => $totalUsers,
            'total_animals' => $totalAnimals,
            'total_services' => $totalServices,
            'animalViews' => $animalViews,
            'filter_form' => $filterForm->createView(),
        ]);
    }

    #[Route('/admin/dashboard/filter', name: 'app_admin_dashboard_filter', methods: ['POST'])]
    public function filterReports(Request $request, VeterinaryReportRepository $veterinaryReportRepository, LoggerInterface $logger): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            $logger->error('Invalid JSON received');
            return new JsonResponse(['error' => 'Invalid JSON'], 400);
        }

        $startDate = isset($data['start_date']) ? new \DateTime($data['start_date']) : null;
        $endDate = isset($data['end_date']) ? new \DateTime($data['end_date']) : null;
        $animalId = $data['animal'] ?? null;

        $queryBuilder = $veterinaryReportRepository->createQueryBuilder('r');

        if ($startDate) {
            $queryBuilder->andWhere('r.report_date >= :startDate')
                ->setParameter('startDate', $startDate);
        }

        if ($endDate) {
            $queryBuilder->andWhere('r.report_date <= :endDate')
                ->setParameter('endDate', $endDate);
        }

        if ($animalId) {
            $queryBuilder->andWhere('r.animal = :animalId')
                ->setParameter('animalId', $animalId);
        }

        try {
            $veterinaryReports = $queryBuilder->getQuery()->getResult();
        } catch (\Exception $e) {
            $logger->error('Error fetching veterinary reports: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Internal Server Error'], 500);
        }

        $reportData = [];
        foreach ($veterinaryReports as $report) {
            $reportData[] = [
                'reportDate' => $report->getReportDate()->format('Y-m-d H:i'),
                'animal' => ['name' => $report->getAnimalId()->getName()],
                'healthStatus' => $report->getHealthStatus(),
                'detail' => $report->getDetail(),
            ];
        }

        return new JsonResponse(['reports' => $reportData]);
    }
}





