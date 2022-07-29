<?php

require 'core/functions.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$config = require_once 'config.php';
$qry = new QueryBuilder(Connection::make($config['database']));