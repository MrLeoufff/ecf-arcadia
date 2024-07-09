<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
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
        Request $request,
        EntityManagerInterface $em
    ): Response
    {
        $avisAAfficher = $reviewRepository->findBy(['valid' => true]);

        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($review);
            $em->flush();

            $this->addFlash('succes', 'Votre avis a été soumis et est en attente de validation.');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('default/index.html.twig', [
            'reviews' => $avisAAfficher,
            'form' => $form->createView(),
        ]);
    }
}
