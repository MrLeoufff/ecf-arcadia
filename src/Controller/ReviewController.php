<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Service\NoXSS;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
    private NoXSS $noXSS;

    public function __construct(NoXSS $noXSS)
    {
        $this->noXSS = $noXSS;
    }

    #[Route('/review/new', name: 'app_review_new', methods: ['GET', 'POST'])]
    public function new (
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $review->setPseudo($this->noXSS->nettoyage($review->getPseudo()));
            $review->setComment($this->noXSS->nettoyage($review->getComment()));

            $entityManager->persist($review);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');

            return $this->redirectToRoute('app_home');
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Erreur lors de la soumission de votre avis.');
        }

        return $this->render('review/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/employee/reviews', name: 'app_employee_reviews', methods: ['GET'])]
    public function index(ReviewRepository $reviewRepository): Response
    {
        $avisAAfficher = $reviewRepository->findAll();

        foreach ($avisAAfficher as $review) {
            $review->setComment($this->noXSS->nettoyage($review->getComment()));
            $review->setPseudo($this->noXSS->nettoyage($review->getPseudo()));
        }

        return $this->render('review/index.html.twig', [
            'reviews' => $avisAAfficher,
        ]);
    }

    #[Route('/employee/review/{id}/approve', name: 'app_review_approve', methods: ['POST'])]
    public function approve(
        Request $request,
        Review $review,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('approve' . $review->getId(), $request->request->get('_token'))) {
            $review->setValid(true);
            $entityManager->flush();

            $this->addFlash('success', 'L\'avis a été approuvé.');
        } else {
            $this->addFlash('error', 'Échec de l\'approbation de l\'avis.');
        }

        return $this->redirectToRoute('app_employee_reviews');
    }

    #[Route('/employee/review/{id}/delete', name: 'app_review_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Review $review,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $review->getId(), $request->request->get('_token'))) {
            $entityManager->remove($review);
            $entityManager->flush();

            $this->addFlash('success', 'L\'avis a été supprimé.');
        } else {
            $this->addFlash('error', 'Échec de la suppression de l\'avis.');
        }

        return $this->redirectToRoute('app_employee_reviews');
    }
}
