@extends('layouts.base')

@section('tilte')
    Créer une catégorie - @parent
@endsection

@section('content')
    @foreach ($errors->all() as $error)
        <li>{{ $errors }}</li>
    @endforeach

    <form method="post">
        {{-- csrf pour la sécurité --}}
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">

        <button>Ajouter</button>
    </form>
@endsection