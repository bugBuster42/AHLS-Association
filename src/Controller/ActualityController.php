<?php

namespace App\Controller;

use App\Model\ActualityManager;

class ActualityController extends AbstractController
{
    public function index(): string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectAll('date', 'DESC');

        return $this->twig->render('Home/index.html.twig', ['news' => $article]);
    }

    /**
     * Show informations for a specific item
     */
    public function show(int $id): string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectOneById($id);

        return $this->twig->render('Item/show.html.twig', ['news' => $article]);
    }

    /**
     * Edit a specific item
     */
    public function edit(int $id): ?string
    {
        $actualityManager = new ActualityManager();
        $article = $actualityManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $article = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, update and redirection
            $actualityManager->update($article);

            header('Location: /news/show?id=' . $id);

            // we are redirecting so we don't want any content rendered
            return null;
        }

        return $this->twig->render('Item/edit.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * Add a new item
     */
    public function add(): ?string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $article = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, insert and redirection
            $actualityManager = new ActualityManager();
            $id = $actualityManager->insert($article);

            header('Location:/items/show?id=' . $id);
            return null;
        }

        return $this->twig->render('Item/add.html.twig');
    }

    /**
     * Delete a specific item
     */
    public function delete(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $actualityManager = new ActualityManager();
            $actualityManager->delete((int)$id);

            header('Location:/items');
        }
    }
}
