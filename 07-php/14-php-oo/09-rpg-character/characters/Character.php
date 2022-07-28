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
    protected $errors = [];

    // On créer l'objet
    public function __construct($name, $class, $tribe)
    {
        // On initialise la varibale de l'objet
        $this->name = $name;
        $this->class = $class;
        $this->tribe = $tribe;
    }

    // Générer un nom random
    public function generateName()
    {
        $this->name = $this->generateName[rand(0, 26)];
    }

    // errors
    public function errors()
    {
        if (empty($this->name)) {
            $this->errors[] = "Veuillez choisir un nom ou en générer un aléatoire.";
        }

        if (empty($this->tribe)) {
            $this->errors[] = "Veuillez choisir une tribu";
        }

        if (empty($this->class)) {
            $this->errors[] = "Veuillez choisir une classe";
        }

        return $this->errors;
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