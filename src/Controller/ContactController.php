<?php



namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contact', name: 'app_contact_')]
class ContactController extends AbstractController
{
    #[Route('/', name: '_')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $email = (new Email())
                ->from($contact->getEmail())
                ->to('mrleoufff@gmail.com') // replace with the zoo's email address
                ->subject('Nouvelle demande de contact: ' . $contact->getTitle())
                ->html(
                    '<p>Titre: ' . htmlspecialchars($contact->getTitle()) . '</p>' .
                    '<p>Description: ' . nl2br(htmlspecialchars($contact->getDescription())) . '</p>' .
                    '<p>Email de l\'expéditeur: ' . htmlspecialchars($contact->getEmail()) . '</p>'
                );

            $mailer->send($email);

            return $this->redirectToRoute('app_contact_confirmation');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/confirmation', name: 'confirmation')]
    public function confirmation(): Response
    {
        return $this->render('contact/confirmation.html.twig');
    }
}
