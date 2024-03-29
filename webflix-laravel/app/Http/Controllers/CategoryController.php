<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::paginate(3),
        ]);
    }

    public function show($id)
    {
        return view('categories.show', [
            'category' => Category::findOrFail($id),
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    // Traitement du formulaire
    public function store(Request $request)
    {
        //dump($request->name);
        // dump(request()->name);
        // dump(request('name'));

        $request->validate([
            'name' => 'required|min:2|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        // On redirige vers la liste
        return redirect()->route('categories');
    }
}