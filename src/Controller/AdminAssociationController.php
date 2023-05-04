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

    public function create(): string
    {
        $errors = $boardMember = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $boardMember = array_map('trim', $_POST);
            $maxLength = 255;

            if (empty($boardMember['lastname'])) {
                $errors[] = 'Le champ nom est obligatoire';
            }

            if (mb_strlen($boardMember['lastname']) > $maxLength) {
                $errors[] = 'Le champ nom doit faire moins de ' . $maxLength . ' caractères';
            }
            if (empty($boardMember['firstname'])) {
                $errors[] = 'Le champ prénom est obligatoire';
            }
            if (mb_strlen($boardMember['firstname']) > $maxLength) {
                $errors[] = 'Le champ prénom doit faire moins de ' . $maxLength . ' caractères';
            }
            if (empty($boardMember['job'])) {
                $errors[] = 'Le champ statut est obligatoire';
            }
            if (mb_strlen($boardMember['job']) > $maxLength) {
                $errors[] = 'Le champ statut doit faire moins de ' . $maxLength . ' caractères';
            }

            if (empty($errors)) {
                $boardMemberManager = new BoardMemberManager();
                $boardMemberManager->insert($boardMember);

                header('Location: /admin/association');
            }
        }
        return $this->twig->render('Admin/Association/create.html.twig', [
            'errors' => $errors, 'boardMember' => $boardMember,
        ]);
    }
}
