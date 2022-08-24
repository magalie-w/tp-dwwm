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
    
}