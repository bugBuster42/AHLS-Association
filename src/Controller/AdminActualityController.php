<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ActualityManager;

class AdminActualityController extends AbstractController
{
    public function index(): string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectAll();
        return $this->twig->render('Actuality/admin_actuality.html.twig', [
            'article' => $article,
        ]);
    }
}