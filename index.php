<?php

require_once 'vendor/autoload.php';
require_once 'core/boot.php';

Router::load('routes.php')->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);

