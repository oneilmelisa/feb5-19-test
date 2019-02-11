<?php

$database = require 'core/bootstrap.php';

//require 'Task.php';
require 'functions.php';

$router = new Router;

require 'routes.php';


//dd($_SERVER['REQUEST_URI']);
require $router -> direct('contact');

