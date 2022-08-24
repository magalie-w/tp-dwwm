<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Book;
use M2i\Mvc\View;

class BookController extends Controller
{
    // Récupérer tous les livres
    public function list()
    {
        $books = Book::all();

        return View::render('book/list', [
            'books' => $books,
            'name' => '',
        ]);
    }

    // Voir un seul livre
    public function show($id)
    {
        $book = Book::find($id);

        return View::render('book/show', [
            'book' => $book,
        ]);
    }

    // Créer un livre
    public function create()
    {
        $book = new Book();
        $book->name = $_POST['name'] ?? null;
        $book->priceHT = $_POST['priceHT'] ?? null;
        $book->autor = $_POST['autor'] ?? null;
        $book->date = $_POST['date'] ?? null;
        $book->isbn = $_POST['isbn'] ?? null;
        $errors = [];
        $success = false;

        if (!empty($_POST)) {
            if (empty($book->name)) {
                $errors['name'] = 'Le nom est invalide.';
            }

            if (empty($book->priceHT)) {
                $errors['priceHT'] = 'Le prix est invalide.';
            }

            if (empty($book->autor)) {
                $errors['autor'] = 'L\'auteur est invalide.';
            }

            if (empty($book->date)) {
                $errors['date'] = 'La date est invalide.';
            }

            if (empty($book->isnbn)) {
                $errors['isbn'] = 'L\'isbn est invalide.';
            }

            if (empty($errors)) {
                $success = $book->save();
            }
        }

        return View::render('book/create', [
            'errors' => $errors,
            'success' => $success,
        ]);
    }
}