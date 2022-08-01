<?php

$users = App::get('database')->getAllData('users');

view('index', [
    'users' => $users
]);


