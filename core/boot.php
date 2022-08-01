<?php

require 'core/functions.php';

$config = require_once 'config.php';
$db = new QueryBuilder(Connection::make($config['database']));