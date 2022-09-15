<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>
</head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
<body>
    <div>
        <ul class="mx-auto flex justify-between w-[1000px]">
            <li><img src="guitare.jpg" alt="" width="100" /></li>
            <div class="w-[200px] flex justify-around items-center">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </div>
        </ul>
    </div>

    @yield('content')
</body>
</html>