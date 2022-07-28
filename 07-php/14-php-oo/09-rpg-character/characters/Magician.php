<?php

class Magician extends Character
{
    public function __construct($name, $tribe)
    {
        parent::__construct($name, 'magician', $tribe);
        $this->strength = 10;
        $this->mana = 30;
    }
}
?>