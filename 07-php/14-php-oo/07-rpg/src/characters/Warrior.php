<?php

class Warrior extends Character
{
    public function __construct($strength)
    {
        // parent::__construct($strength);
        $this->strength +=20;
    }
}
?>