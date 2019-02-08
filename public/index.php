<?php

$database = require 'core/bootstrap.php';

//require 'Task.php';

$router = new Router;

require 'routes.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');
require $router->direct('about');

