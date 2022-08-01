<?php

$users = $db->getAllData('users');

view('index', [
    'users' => $users
]);


