<?php
$database = require 'core/bootstrap.php';
require 'functions.php';
//require 'Task.php';




$tasks = $database->selectAll('todos', 'Task');

$router = new Router;
require  'routes.php';
require $router->direct('about/culture');

require 'index.view.php';




