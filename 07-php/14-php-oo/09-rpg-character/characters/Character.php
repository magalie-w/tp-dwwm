<?php

abstract class Character
{
    protected $name;
    protected $class;
    protected $tribe;
    protected $health = 100;

    public function __construct($name, $class, $tribe)
    {
        $this->name = $name;
        $this->class = $class;
        $this->tribe = $tribe;
    }
}
?>