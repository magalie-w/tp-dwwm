<?php

abstract class Character
{
    protected $name;
    protected $class;
    protected $tribe;
    protected $health = 100;
    protected $strength;
    protected $mana;
    protected $generateName = ["Arthur", "Bertrand", "Camille", "Denise", "Elodie", "Fabien", "Gaëtant", "Henri", "Ivan", "Justin", "Katy", "Luck", "Margaux", "Nathan", "Ophélie", "Pascale", "Quentin", "Thibaut", "Ulrich", "Valentin", "Wally", "Xavier", "Yann", "Zoé"];

    // On créer l'objet
    public function __construct($name, $class, $tribe)
    {
        // On initialise la varibale de l'objet
        $this->name = $name;
        $this->class = $class;
        $this->tribe = $tribe;
    }

    public function generateName()
    {
        $this->name = $this->generateName[rand(0, 26)];
    }


    // On récupère la valeur de la varibale (protected)
    public function getName()
    {
        return $this->name;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getTribe()
    {
        return $this->tribe;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getMana()
    {
        return $this->mana;
    }

}
?>