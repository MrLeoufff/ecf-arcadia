<?php

namespace App\Controller;

use App\Entity\Schedule;
use App\Form\ScheduleType;
use App\Repository\ScheduleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/admin/schedule', name: 'app_schedule_')]
class ScheduleController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ScheduleRepository $scheduleRepository): Response
    {
        return $this->render('schedule/index.html.twig', [
            'schedules' => $scheduleRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        ScheduleRepository$scheduleRepository,
        EntityManagerInterface $entityManager
    ): Response
    {

        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingSchedule = $scheduleRepository->findOneBy(['day' => $schedule->getDay()]);

            if ($existingSchedule) {
                $this->addFlash('info', 'Un horaire pour ce jour existe déjà. Vous êtes redirigé vers sa page de modification.');
                return $this->redirectToRoute('app_schedule_edit', ['id' => $existingSchedule->getId()]);
            }

            $entityManager->persist($schedule);
            $entityManager->flush();

            $this->addFlash('success', 'L\'horaire a été créé avec succès.');

            return $this->redirectToRoute('app_schedule_index');
        }

        return $this->render('schedule/new.html.twig', [
            'schedule' => $schedule,
            'form' =>$form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Schedule $schedule,
        EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'L\'horaire a été modifié avec succès.');

            return $this->redirectToRoute('app_schedule_index');
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Échec de la modification de l\'horaire.');
        }

        return $this->render('schedule/edit.html.twig', [
            'schedule' => $schedule,
            'form' =>$form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Schedule $schedule,
        EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$schedule->getId(), $request->request->get('_token'))) {
            $entityManager->remove($schedule);
            $entityManager->flush();

            $this->addFlash('success', 'L\'horaire a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Échec de la suppression de l\'horaire.');
        }


        return $this->redirectToRoute('app_schedule_index');
    }

}
