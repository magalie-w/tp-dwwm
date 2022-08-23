<?php

class Text
{
    public $text;


    public function set($text)
    {
        $this->text = " " . $text . " ";
    }


    private function bold()
    {
        $this->bold = "<strong>";
    }

}