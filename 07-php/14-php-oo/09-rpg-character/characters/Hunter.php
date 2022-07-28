<?php

class Hunter extends Character
{
    public function __construct($name, $tribe)
    {
        parent::__construct($name, 'hunter', $tribe);
        $this->strength = 20;
        $this->mana = 20;
    }
}
?>