<?php

require_once 'core/boot.php';

require Router::load('routes.php')->direct(Request::uri());

