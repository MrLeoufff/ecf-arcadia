<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/veto/habitat', name: 'app_habitat_')]

class HabitatController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(HabitatRepository $habitatRepository): Response
    {
        return $this->render('habitat/index.html.twig', [
            'habitats' => $habitatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger): Response
    {
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('image')->getData();
            $imageNames = [];


            if ($images) {
                foreach ($images as $image){
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                    try {
                        $image->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $this->addFlash('success', 'Image téléchargée avec succès.');
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une érreur est survenue lors de l\'envoie de la photo.');
                        return $this->render('habitat/new.html.twig', [
                            'habitat' => $habitat,
                            'form' => $form,
                        ]);
                    }

                    $imageNames [] = $newFilename;
                }
                $habitat->setImage($imageNames);
            } else {
                $this->addFlash('error', 'Aucune image trouvée.');
            }

            $entityManager->persist($habitat);
            $entityManager->flush();

            $this->addFlash('success', 'Habitat créé avec succès avec des images.');

            return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('habitat/new.html.twig', [
            'habitat' => $habitat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Habitat $habitat): Response
    {
        return $this->render('habitat/show.html.twig', [
            'habitat' => $habitat,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Habitat $habitat,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('image')->getData();
            $imageNames = [];

            if ($images) {
                foreach ($images as $image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                    try {
                        $image->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $this->addFlash('success', 'Image téléchargée avec succès.');
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image.');
                        return $this->render('habitat/edit.html.twig', [
                            'habitat' => $habitat,
                            'form' => $form,
                        ]);
                    }
                    $imageNames[] = $newFilename;
                }
                $habitat->setImage($imageNames);
            } else {
                $this->addFlash('error', 'Aucune image trouvée.');
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('habitat/edit.html.twig', [
            'habitat' => $habitat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Habitat $habitat,
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
    }
}
