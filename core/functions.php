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

function view ($name, $data=[]) {
    extract(
        $data
    );
    return require "views/$name.view.php";
}