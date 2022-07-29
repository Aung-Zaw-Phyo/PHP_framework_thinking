<?php

// $router->define([
//     '' => 'controllers/IndexController.php',
//     'about' => 'controllers/AboutController.php',
//     'contact' => 'controllers/ContactController.php',
//     'product' => 'controllers/ProductController.php',
//     'names' => 'controllers/add-name.php',
// ]); 

$router->get('', 'controllers/IndexController.php');
$router->get('about', 'controllers/AboutController.php');
$router->get('contact', 'controllers/ContactController.php');
$router->get('product', 'controllers/ProductController.php');
$router->post('names', 'controllers/add-name.php');

