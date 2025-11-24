<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Model\Contact;
use App\Service\DataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, DataProvider $dataProvider)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Votre message à bien été envoyé.');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('page/index.html.twig', array_merge(
            $dataProvider->getHomeData(),
            ['contactForm' => $form->createView()]
        ));
    }
}
