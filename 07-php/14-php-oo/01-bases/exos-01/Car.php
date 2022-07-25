<?php

class Car
{
    public $roue;
    private $color;
    public $mark;
    public $model;


    private function __construct($color)
    {
        $this->color();
        $this->color = $color;
    }

    private function color()
    {
        $this->color = "blue";
    }
}

?>