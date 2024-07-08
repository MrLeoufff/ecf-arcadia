<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/animal', name: 'app_animal_')]
#[IsGranted('ROLE_ADMIN', message: 'Access denied')] // Ensure only admin can access these routes
#[IsGranted('ROLE_EMPLOYEE', message: 'Access denied')] // Ensure only employees can access these routes
class AnimalController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(AnimalRepository $animalRepository): Response
    {
        return $this->render('animal/index.html.twig', [
            'animals' => $animalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                try {
                    $image->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $animal->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image.');
                    return $this->render('animal/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
            }

            $habitat = $form->get('habitat')->getData();
            if ($habitat) {
                $animal->setHabitat($habitat);
            } else {
                $this->addFlash('error', 'Please select a habitat.');
                return $this->render('animal/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('app_animal_index');
        }

        return $this->render('animal/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                try {
                    $image->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $animal->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                    return $this->render('animal/edit.html.twig', [
                        'form' => $form->createView(),
                        'animal' => $animal,
                    ]);
                }
            }

            $habitat = $form->get('habitat')->getData();
            if ($habitat) {
                $animal->setHabitat($habitat);
            } else {
                $this->addFlash('error', 'Please select a habitat.');
                return $this->render('animal/edit.html.twig', [
                    'form' => $form->createView(),
                    'animal' => $animal,
                ]);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_animal_index');
        }

        return $this->render('animal/edit.html.twig', [
            'form' => $form->createView(),
            'animal' => $animal,
        ]);
    }

    #[Route('/{id}/', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_animal_index');
    }
}
