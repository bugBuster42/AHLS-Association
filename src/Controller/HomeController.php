<?php

namespace App\Controller;

use App\Model\ActualityManager;
use App\Model\MagazineManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectAll('date', 'DESC');

        $magazineManager = new MagazineManager();
        $copy = $magazineManager->selectAll('number', 'DESC');

        return $this->twig->render('Home/index.html.twig', ['actuality' => $article, 'magazine' => $copy]);
    }
}
