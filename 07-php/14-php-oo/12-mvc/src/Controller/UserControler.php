<?php

use M2i\Mvc\Model\User;

class UserController
{
    public function list()
    {
        $user = new User();
        $user->save();

        return 'vue';
    }
}