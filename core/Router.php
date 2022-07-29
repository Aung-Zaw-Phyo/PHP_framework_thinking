<?php

class Router {

public $routes = [
    "GET" => [
        // 'about' => 'controllers/AboutController.php'
    ],
    "POST" => [
        // 'names' => 'controllers/add-name.php'
    ]
];

public function define ($routes) {
    $this->routes = $routes;
}

public function get ($uri, $controller) {
    $this->routes["GET"][$uri] = $controller;
}

public function post ($uri, $controller) {
    $this->routes["POST"][$uri] = $controller;
}

public static function load ($filename) {
    $router = new Router;
    require $filename;
    return $router; 
}

public function direct ($uri, $method) {
    if(array_key_exists($uri, $this->routes[$method])){
        return $this->routes[$method][$uri];
    }
    dd('404 page');
}

}