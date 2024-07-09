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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $veterinaryReport = new VeterinaryReport();
        $form = $this->createForm(VeterinaryReportType::class, $veterinaryReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($veterinaryReport);
            $entityManager->flush();

            return $this->redirectToRoute('app_veterinary_report_index');
        }

        return $this->render('veterinary_report/new.html.twig', [
            'veterinary_report' => $veterinaryReport,
            'form' => $form,
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
    public function edit(Request $request, VeterinaryReport $veterinaryReport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VeterinaryReportType::class, $veterinaryReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_veterinary_report_index');
        }

        return $this->render('veterinary_report/edit.html.twig', [
            'veterinary_report' => $veterinaryReport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, VeterinaryReport $veterinaryReport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$veterinaryReport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($veterinaryReport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_veterinary_report_index');
    }
}
