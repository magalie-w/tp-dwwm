<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{-- Webflix - @yield('title') --}}
        {{-- show permets d'afficher le contenu --}}
        @section('title') {{ config('app.name') }} @show
    </title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200 font-[Nunito]">
    <header class="shadow bg-white">
        <div class="flex items-center max-w-7xl mx-auto">
            <h1 class="text-xl font-bold mr-4">{{ config('app.name') }}</h1>
            <ul class="flex">
                <li><a href="{{ route('home') }}" class="inline-block py-4 px-2">Accueil</a></li>
                <li><a href="{{ route('categories') }}" class="inline-block py-4 px-2">Catégories</a></li>
                <li><a href="{{ route('films') }}" class="inline-block py-4 px-2">Films</a></li>
                <li><a href="{{ route('about') }}" class="inline-block py-4 px-2">A Propos</a></li>
            </ul>
        </div>
    </header>

    @yield('content')
    
    <footer class="text-center">
        Copyright &copy; {{ now()->year }} - {{ config('app.name') }}
    </footer>
</body>
</html>