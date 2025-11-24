<?php

namespace App\Controller;

use App\Service\DataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(DataProvider $dataProvider)
    {
        return $this->render('page/index.html.twig', [
            ...$dataProvider->getHomeData(),
        ]);
    }
}
