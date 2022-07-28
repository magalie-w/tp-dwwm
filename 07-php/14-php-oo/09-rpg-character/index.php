<?php
    require "characters/Character.php";
    require "characters/Warrior.php";
    require "characters/Magician.php";
    require "characters/Hunter.php";

    if (!empty($_POST)) {
        // On récupère le nom et la tribu en fonction de la class
        if ($_POST["class"] == "warrior") {
            $character = new Warrior($_POST["name"], $_POST["tribe"]);
        }

        if ($_POST["class"] == "magician") {
            $character = new Magician($_POST["name"], $_POST["tribe"]);
        }

        if ($_POST["class"] == "hunter") {
            $character = new Hunter($_POST["name"], $_POST["tribe"]);
        }

        if (isset($_POST["random"])) {
            $character->generateName();
        }

        // On affiche la valeur
        echo "<div class='container mx-auto w-[500px] mt-5'>
                <div class='mx-auto w-[300px]'>
                    <h1 class='text-xl'>Salut " . $character->getName() . "</h1>

                    <br>

                    <!-- Afficher l'img en fonction de la class séléctionnée -->
                    <img src='img/" . $character->getClass() . ".jpg' alt='' />

                    <br>
                    
                    <p>Tu es un " . $character->getClass() . " " . $character->getTribe() . "</p>

                    <br>

                    <ul class='list-disc'>
                        <li>Ta santé: " . $character->getHealth() . "</li>
                        <li>Ta force: " . $character->getStrength() . "</li>
                        <li>Ta mana: " . $character->getMana() . "</li>
                    </ul>

                    <br>

                    <a href='#' class='text-blue-500 underline'>Je veux un autre personnage</a>
                </div>
            </div>";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG character</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto w-[500px] space-y-5 mt-5">
        <h1 class="text-xl text-center">POO RPG</h1>

        <form action="" method="post" class="space-y-5">

            <div class="border rounded">  
                <input class="p-2" type="text" id="name" name="name" placeholder="Votre nom..">
            </div>

            <div>
                <input type="checkbox" id="random" name="random">
                <label for="random">Générer un nom aléatoire</label>
            </div>

            <div  class="grid">
                <label for="tribe">Votre tribu ?</label>
                <select name="tribe" id="tribe" class="border rounded p-2 bg-white">
                    <option value="">Choisir</option>
                    <option value="human">Humain</option>
                    <option value="dwarf">Nain</option>
                    <option value="elf">Elfe</option>
                </select>
            </div>

            <div class="flex justify-around space-x-9">
                <div>
                    <input type="radio" id="warrior" name="class" value="warrior" checked>
                    <label for="warrior">Guerrier</label>
                    <img src="img/warrior.jpg" alt="" />
                </div>

                <div>
                    <input type="radio" id="magician" name="class" value="magician">
                    <label for="magician">Mage</label>
                    <img src=img/magician.jpg alt="" />
                </div>

                <div>
                    <input type="radio" id="hunter" name="class" value="hunter">
                    <label for="hunter">Chasseur</label>
                    <img src="img/hunter.jpg" alt="" />
                </div>
            </div>

            <button class="bg-blue-500 text-white p-2 rounded">Créer</button>

        </form>

    </div>
</body>
</html>