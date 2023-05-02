<?php

namespace App\Controller;

use App\Model\BoardMemberManager;

class AdminAssociationController extends AbstractController
{
    public function index(): string
    {
        $boardMemberManager = new BoardMemberManager();
        $boardMembers = $boardMemberManager->selectAll();

        return $this->twig->render('Admin/Association/index.html.twig', [
            'boardMembers' => $boardMembers,
        ]);
    }
}
