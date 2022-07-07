<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos-01</title>
</head>

<body>
    <?php
    // Acronyme : Créer une fonction qui prend en argument une chaine (World of Warcraft) et qui retourne les initiales de chaque mot en majuscule (WOW)
    $mot = "world of warcraft";

    $motArray = explode(" ", $mot);
    $motArray = array_map(function ($mot) {
        return ucfirst($mot[0]);
    }, $motArray);
    
    echo implode($motArray) . "<br>";

    var_dump($motArray);
    // echo $mot . " : ";
    // echo $mot[0], $mot[6], $mot[9];


    // Conjugaison : Créer une fonction qui permet de conjuguer un verbe (chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.

    ?>
    
</body>
</html>