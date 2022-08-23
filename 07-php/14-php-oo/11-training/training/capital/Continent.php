<?php

var_dump(file_get_contents("europa.json"));
var_dump(json_decode(file_get_contents("europa.json"), true));

class Continent
{
    public function continent()
    {
        $this->continent();
    }

    public function pays()
    {
        $this->pays();
    }
}