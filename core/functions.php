<?php

function dd ( $data ) {
    echo "<pre>";
    die(print_r( $data , true));
}

function checkCount ($data,int $count, $uri) {
    if(!(strlen($data) > $count)) {
        die(header("Location: $uri"));
    }
}

function redirect ($uri) {
    return header("location: $uri");
}

function view ($name, $data=[]) {
    extract(
        $data
    );
    return require "views/$name.view.php";
}

function request ($name) {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
       return $_POST[$name];
    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
       return $_GET[$name];
    }
}