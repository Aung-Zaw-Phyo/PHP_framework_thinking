<?php

// $router->define([
//     '' => 'controllers/IndexController.php',
//     'about' => 'controllers/AboutController.php',
//     'contact' => 'controllers/ContactController.php',
//     'product' => 'controllers/ProductController.php',
//     'names' => 'controllers/add-name.php',
// ]); 

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('product', 'PagesController@product');
$router->post('names', 'PagesController@userCreate');

