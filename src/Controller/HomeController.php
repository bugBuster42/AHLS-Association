<?php

namespace App\Controller;

use App\Model\NewspaperManager;
use App\Model\PartnerManager;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $newspaperManager = new NewspaperManager();
        $newspapers = $newspaperManager->showLastByNumber();
        $partnerManager = new PartnerManager();
        $partners = $partnerManager->selectAll();
        return $this->twig->render('Home/index.html.twig', ['partners' => $partners, 'newspapers' => $newspapers,]);
    }
}
