<?php

namespace controllers;

use core\App;

class UserController {

    public function users () {
        $users = App::get('database')->getAllData('users');
        foreach ($users as $user) {
            echo $user->name.'<br>';
        }
    }

}