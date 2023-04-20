<?php

namespace App\Controller;

use App\Model\ActualityManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectAll('date', 'DESC');

        return $this->twig->render('Home/index.html.twig', ['actuality' => $article]);
    }
}
