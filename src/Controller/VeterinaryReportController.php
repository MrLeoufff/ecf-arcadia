<?php

namespace App\Controller;

use App\Entity\VeterinaryReport;
use App\Form\VeterinaryReportType;
use App\Repository\VeterinaryReportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('veto/veterinary_report', name: 'app_veterinary_report_')]
class VeterinaryReportController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(VeterinaryReportRepository $veterinaryReportRepository): Response
    {
        return $this->render('veterinary_report/index.html.twig', [
            'veterinary_reports' => $veterinaryReportRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        VeterinaryReportRepository $veterinaryReportRepository
    ): Response
    {
        $veterinaryReport = new VeterinaryReport();
        $form = $this->createForm(VeterinaryReportType::class, $veterinaryReport);

        $existingFoods = $veterinaryReportRepository->findAllFoodOptions();



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingFood = $form->get('existing_food')->getData();
            $newFood = $form->get('food')->getData();

            if ($existingFood) {
                $veterinaryReport->setFood($existingFood);
            } elseif ($newFood) {
                $veterinaryReport->setFood($newFood);
            } else {
                $this->addFlash('error', 'Vous devez sélectionner ou entrer une nourriture.');
                return $this->render('veterinary_report/new.html.twig', [
                    'form' => $form->createView(),
                    'existing_foods' => $existingFoods
                ]);
            }
            $entityManager->persist($veterinaryReport);
            $entityManager->flush();

            $this->addFlash('success', 'Rapport vétérinaire créé avec succès.');

            return $this->redirectToRoute('app_veterinary_report_index');
        }

        return $this->render('veterinary_report/new.html.twig', [
            'veterinary_report' => $veterinaryReport,
            'form' => $form->createView(),
            'existing_foods' => $existingFoods,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(VeterinaryReport $veterinaryReport): Response
    {
        return $this->render('veterinary_report/show.html.twig', [
            'veterinary_report' => $veterinaryReport,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        VeterinaryReport $veterinaryReport,
        EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VeterinaryReportType::class, $veterinaryReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Rapport vétérinaire modifié avec succès.');

                return $this->redirectToRoute('app_veterinary_report_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur s\'est produite lors de la modification du rapport vétérinaire.');
            }
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez vérifier les champs.');
        }

        return $this->render('veterinary_report/edit.html.twig', [
            'veterinary_report' => $veterinaryReport,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(
        Request $request,
        VeterinaryReport $veterinaryReport,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete' . $veterinaryReport->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($veterinaryReport);
                $entityManager->flush();

                $this->addFlash('success', 'Rapport vétérinaire supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur s\'est produite lors de la suppression du rapport vétérinaire.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide. Échec de la suppression du rapport vétérinaire.');
        }

        return $this->redirectToRoute('app_veterinary_report_index');
    }
}
