<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPasswordRequestType;
use App\Form\ResetPasswordType;
use App\Service\ResetPasswordService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/password-reset', name: 'app_password_reset_')]
class PasswordResetController extends AbstractController
{
    #[Route('/request', name: 'request', methods: ['GET', 'POST'])]
    public function request(
        Request $request,
        EntityManagerInterface $entityManager,
        ResetPasswordService $resetPasswordService
    ): Response
    {
        $form = $this->createForm(ResetPasswordRequestType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

            if ($user) {
                $resetPasswordService->sendResetPasswordEmail($user);
                $this->addFlash('success', 'Un email de réinitialisation du mot de passe a été envoyé.');
            } else {
                $this->addFlash('danger', 'Aucun compte trouvé pour cet email.');
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('admin/reset_password_request.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reset/{token}', name: 'reset', methods: ['GET', 'POST'])]
    public function reset(
        string $token,
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response
    {
        $user = $entityManager->getRepository(User::class)->findOneBy(['resetPasswordToken' => $token]);

        if (!$user) {
            $this->addFlash('danger', 'Le lien de réinitialisation du mot de passe est invalide.');
            return $this->redirectToRoute('app_home');
        }

        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();

            if ($plainPassword !== $confirmPassword) {
                $this->addFlash('danger', 'Les mots de passe ne correspondent pas.');
            } else {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $plainPassword
                    )
                );
                $user->setResetPasswordToken(null);
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');

                return $this->redirectToRoute('app_home');
            }
        }

        return $this->render('admin/reset_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
