<?php

$database = require 'core/bootstrap.php';

//require 'Task.php';
require 'functions.php';

$router = new Router;

require 'routes.php';



$uri = (trim($_SERVER['REQUEST_URI'], '/'));
//var_dump(trim($_SERVER['REQUEST_URI'], '/'));


//require $router -> direct('about');
require $router -> direct($uri);

