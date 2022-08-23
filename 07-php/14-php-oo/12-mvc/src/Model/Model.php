<?php

namespace M2i\Mvc\Model;

class Model
{
    public function save()
    {
        $table = get_class($this);
        dump($table);
        
        return 'INSERT INTO users';
    }
}