<?php

namespace App\Controller;

use App\Model\PartnerManager;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $partnerManager = new PartnerManager();
        $partners = $partnerManager->selectAll();
        return $this->twig->render('Home/index.html.twig', ['partners' => $partners]);
    }
}
