@extends('layouts.base')

@section('title')
    Accueil - @parent
@endsection

@section('content')
    <h1 class="font-bold text-3xl mb-3">Coucou {{ $name }}</h1>

    <!-- Ne pas avoir les balises html -->
    {!! $html !!}

    <ul>
        @foreach($cars as $car)
            <li>{{ $car }}</li>
        @endforeach
    </ul>
    
    <a href="{{ route('about') }}">A Propos</a>
@endsection