<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobales</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto">
        <h2>Les superglobales en PHP</h2>
        <p>$_GET et $_POST sont des variables superglobales. On va utiliser pour récupérer des valeurs dans l'URL ou dans un formulaire.</p>

        <?php
            //$_GET est un tableau qui contient tous les paramètres de l'URL
            // index.php?nom=toto&age=30 => $_GET contient un tableau ['nom' => 'toto', 'age' => '30']
            var_dump($_GET);

            //L'opérateur null(inconnu) coalesing (PHP 7+) permet de vérifier si une valeur existe
            $name = $_GET['nom'] ?? 'inconnu';
            $age = isset($_GET['age']) ? $_GET['age'] : null; //Ancienne façon PHP 5
            $uppercase = (bool) ($_GET['uppercase'] ?? null); //On caste une valeur en booléen
            
            if ($uppercase) { //Si la checkbox majuscule est cochée
                $name = strtoupper($name);
            }
        ?>

        <h1 class="my-2 text-2xl">Bonjour <?= $name; ?></h1>
        <?php if ($age) { ?>
            <p>Tu as <?= $age; ?></p>
        <?php } ?>

        <a href="index.php?nom=toto&age=30">Toto</a>
        <a href="index.php?nom=tata">Tata</a>

        <h2>Un formulaire en $_GET</h2>
        <form method="get" action="">

            <div class="mb-4">
                <label for="name">Nom</label>
                <input type="text" name="nom" id="name" value="<?= $name; ?>">
            </div>

            <div class="mb-4">
                <label for="age">Age</label>
                <select name="age" id="age">
                    <?php for ($i = 18; $i <= 50; $i++) { ?>
                        <option 
                            <?= $i == $age ? 'selected' : '' ; ?> value="<?= $i; ?>"> 
                            <?= $i; ?> ans 
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="uppercase">
                    <input <?= $uppercase ? 'checked' : ''; ?> type="checkbox" name="uppercase" id="uppercase" class="mr-3">Majuscule
                </label>
            </div>
            <button class="bg-blue-400 px-3 py-2 rounded text-white">Envoyer</button>
        </form>

        <a href="register.php">Inscription</a>
    </div>    
</body>
</html>