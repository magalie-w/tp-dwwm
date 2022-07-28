<?php

class Warrior extends Character
{
    public function __construct($name, $tribe)
    {
        parent::__construct($name, 'warrior', $tribe);
        $this->strength = 20;
        $this->mana = 10;
    }
}
?>