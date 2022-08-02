<?php

use core\App;

require 'core/functions.php';

// $config = require_once 'config.php';
// $db = new QueryBuilder(Connection::make($config['database']));

App::bind('config', require_once 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));