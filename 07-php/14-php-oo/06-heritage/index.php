<?php

require __DIR__.'/../05-composer/vendor/autoload.php';

// On va aller charger les classes automatiquement
spl_autoload_register(function ($class) {
    // $class vaut Cat ou Dog ou Animal
    $class = str_replace('M2i\\', '', $class);
    dump($class);
    require 'src/'.$class.'.php';
});

use M2i\Animal;
use M2i\Cat;
use M2i\Dog;
use M2i\Kennel;

$cat = new Cat('Bianca', 'blanc');
dump($cat);
echo $cat->move();
echo $cat->climbsOnRoof();
dump($cat instanceof Cat);
dump($cat instanceof Animal);

$dog = new Dog('Milou');
echo $dog->playWithBall();
dump($dog);

$kennel = new Kennel();
echo $kennel->keep($dog);
// echo (new Kennel())->keep($cat);

// $bird = new Animal('Bird');
// dump($bird);
