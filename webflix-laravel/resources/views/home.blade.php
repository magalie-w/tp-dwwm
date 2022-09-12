@extends('layouts.base')

@section('title')
    Accueil - @parent
@endsection

@section('content')
    <h1>Coucou {{ $name }}</h1>

    <!-- Ne pas avoir les balises html -->
    {!! $html !!}

    <ul>
        @foreach($cars as $car)
            <li>{{ $car }}</li>
        @endforeach
    </ul>
    
    <a href="{{ url('/about') }}">A Propos</a>
@endsection