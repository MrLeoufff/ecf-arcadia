<?php

namespace App\Controller;


use App\Document\AnimalView;
use App\Entity\User;
use App\Form\UserType;
use App\Service\NoXSS;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/user', name: 'app_user_')]
class UserController extends AbstractController
{
    private NoXSS $noXSS;

    public function __construct(NoXSS $noXSS)
    {
        $this->noXSS = $noXSS;
    }
    #[Route('/', name: 'list', methods: ['GET'])]
    public function list(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(User::class)->findAll();

        return $this->render('user/list.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request,EntityManagerInterface $em,UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cleanEmail = $this->noXSS->nettoyage($form->get('email')->getData());
            $user->setEmail($cleanEmail);
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_list');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cleanEmail = $this->noXSS->nettoyage($form->get('email')->getData());
            $user->setEmail($cleanEmail);
            if ($form->get('password')->getData()) {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }
            $em->flush();

            return $this->redirectToRoute('app_user_list');
        }
        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $em):Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $em->remove($user);
            $em->flush();
        }
        return $this->redirectToRoute('app_user_list');
    }

    #[Route('/dashboard', name: 'dashboard', methods: ['GET'])]
    public function dashboard(DocumentManager $dm): Response
    {
        $animalViews = $dm->getRepository(AnimalView::class)->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'animalViews' => $animalViews,
        ]);
    }

}
