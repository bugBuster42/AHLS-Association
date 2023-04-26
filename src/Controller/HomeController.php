<?php

namespace App\Controller;

use App\Model\MagazineManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $magazineManager = new MagazineManager();
        $copy = $magazineManager->selectAll('month', 'DESC');

        return $this->twig->render('Home/index.html.twig', ['magazines' => $copy]);
    }
}
