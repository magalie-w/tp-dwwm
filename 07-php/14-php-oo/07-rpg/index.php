<?php

require __DIR__.'/../05-composer/vendor/autoload.php';

require "src/Character.php";
require "src/characters/Warrior.php";
require "src/characters/Hunter.php";
require "src/characters/Magus.php";

// use rpg\Character;
// use rpg\Characters\Warrior;
// use rpg\Characters\Magus;
// use rpg\Characters\Hunter;

$characters = new Character();
$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

var_dump($characters);
?>