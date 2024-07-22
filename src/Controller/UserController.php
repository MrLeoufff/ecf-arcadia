<?php

namespace App\Controller;


use App\Document\AnimalView;
use App\Entity\User;
use App\Form\ResetPasswordRequestType;
use App\Form\ResetPasswordType;
use App\Form\UserType;
use App\Service\MailerService;
use App\Service\NoXSS;
use App\Service\ResetPasswordService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/admin/user', name: 'app_user_')]
class UserController extends AbstractController
{
    private NoXSS $noXSS;
    private Security $security;

    public function __construct(NoXSS $noXSS, Security $security)
    {
        $this->noXSS = $noXSS;
        $this->security = $security;
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
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        MailerService $mailer
    ): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $cleanEmail = $this->noXSS->nettoyage($form->get('email')->getData());
                $user->setEmail($cleanEmail);
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
                $entityManager->persist($user);
                $entityManager->flush();

                $mailer->sendUserCreationEmail($user);

                $roles = implode(', ', $user->getRoles());
                $this->addFlash('success', sprintf('Nouvel utilisateur créé avec le rôle: %s', $roles));

                return $this->redirectToRoute('app_user_list');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur s\'est produite lors de la création de l\'utilisateur.');
            }
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez vérifier les champs.');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        User $user,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
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
                $entityManager->flush();

                $this->addFlash('success', 'Utilisateur modifié avec succès.');

                return $this->redirectToRoute('app_user_list');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur s\'est produite lors de la modification de l\'utilisateur.');
            }
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez vérifier les champs.');
        }

        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(
        Request $request,
        User $user,
        EntityManagerInterface $entityManager
    ):Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($user);
                $entityManager->flush();

                $this->addFlash('success', 'Utilisateur supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur s\'est produite lors de la suppression de l\'utilisateur.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide. Échec de la suppression de l\'utilisateur.');
        }

        return $this->redirectToRoute('app_user_list');
    }

    #[Route('/dashboard', name: 'dashboard', methods: ['GET'])]
    public function dashboard(DocumentManager $documentManager): Response
    {
        $animalViews = $documentManager->getRepository(AnimalView::class)->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'animalViews' => $animalViews,
        ]);
    }

}
