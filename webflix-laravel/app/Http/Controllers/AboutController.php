<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            'team' => [
                ['name' => 'a', 'job' => '1'], 
                ['name' => 'b', 'job' => '2'],
            ],
        ]);
    }

    public function show($user)
    {
        return view('about-show', [
            // ucfirst pour mettre la première lettre en MAJ
            'user' => ucfirst($user),
        ]);
    }
}
