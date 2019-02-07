<?php

$database = require 'core/bootstrap.php';

//require 'Task.php';

$router = new Router;

require 'routes.php';



require $router->direct('');

