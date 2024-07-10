<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\HabitatRepository;
use App\Repository\ReviewRepository;
use App\Repository\ScheduleRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ReviewRepository $reviewRepository,
        ScheduleRepository $scheduleRepository,
        ServiceRepository $serviceRepository,
        Request $request,
        EntityManagerInterface $em,
        HabitatRepository $habitatRepository,
    ): Response
    {
        $avisAAfficher = $reviewRepository->findBy(['valid' => true]);
        $schedules = $scheduleRepository->findAll();
        $services = $serviceRepository->findAll();
        $user = $this->getUser();
        $habitats = $habitatRepository->findAll();



        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($review);
            $em->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('default/index.html.twig', [
            'reviews' => $avisAAfficher,
            'form' => $form->createView(),
            'schedules' => $schedules,
            'user' => $user,
            'services' => $services,
            'habitats' => $habitats
        ]);
    }

    #[Route('/habitat', name: 'app_habitat')]
    public function habitat(HabitatRepository $habitatRepository): Response
    {
        $habitat = $habitatRepository->findAll();

        return $this->render('default/habitat.html.twig', [
            'habitats' => $habitat
        ]);
    }

    #[Route('/service', name: 'app_service')]
    public function service(ServiceRepository $serviceRepository): Response
    {
        $service = $serviceRepository->findAll();

        return $this->render('default/service.html.twig', [
            'service' => $service
        ]);
    }
}
