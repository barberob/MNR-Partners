<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Model\Contact;
use App\Service\DataProvider;
use App\Service\MailService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        Request $request,
        DataProvider $dataProvider,
        MailService $mailService,
        LoggerInterface $mailLogger,
        #[Autowire('%env(APP_ENV)%')] string $appEnv,
    ) {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $mailService->sendContactEmail($contact);
                $mailLogger->info('Contact email sent', ['contact' => $contact]);
                $this->addFlash('success', 'Votre message à bien été envoyé.');
            } catch (\Exception $e) {
                if ('dev' === $appEnv) {
                    throw $e;
                }

                $mailLogger->error('Contact email error', ['contact' => $contact, 'error' => $e->getMessage()]);
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message.');

                return $this->redirectToRoute('app_home');
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('page/index.html.twig', [
            ...$dataProvider->getHomeData(),
            'contactForm' => $form->createView(),
        ]);
    }
}
