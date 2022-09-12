<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'name' => 'toto',
            'html' => '<p>Salut</p>',
            'cars' => ['Ferrari', 'Porsche', 'Renault'],
    ]);
    }
}
