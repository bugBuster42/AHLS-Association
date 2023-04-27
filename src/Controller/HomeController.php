<?php

namespace App\Controller;

use App\Model\MagazineManager;
use App\Model\PartnerManager;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $magazineManager = new MagazineManager();
        $copy = $magazineManager->selectAll('month', 'DESC');
        $partnerManager = new PartnerManager();
        $partners = $partnerManager->selectAll();
        return $this->twig->render('Home/index.html.twig', ['partners' => $partners, 'magazines' => $copy]);
    }
}
