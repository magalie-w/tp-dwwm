<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{-- Webflix - @yield('title') --}}
        {{-- show permets d'afficher le contenu --}}
        @section('title') Webflix @show
    </title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    
</body>
</html>