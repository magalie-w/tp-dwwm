<?php
    require 'config/helpers.php';

    if (!user() && isset($_COOKIE['remember'])) {
        $user = selectOne('SELECT * FROM user WHERE token = :token', [
            'token' => $_COOKIE['remember'],
        ]);

        if ($user) {
            $_SESSION['user'] = $user['username'];
        } else {
            die('TRICHEUR');
        }
    }

    // Redirige vers l'accueil si on n'est pas connecté
    if (!user()) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte de <?= user(); ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="max-w-3xl mx-auto mt-16">
        <h1 class="text-3xl">Bonjour <?= user(); ?>, comment allez-vous en ce <?= day(); ?> ?</h1>

        <a href="logout.php" class="bg-red-500 hover:bg-red-600 px-4 py-2 inline-block text-white rounded mt-8">Déconnexion</a>
    </div>
</body>
</html>
