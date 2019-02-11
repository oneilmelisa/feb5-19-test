<?php

require 'core/bootstrap.php';

//require 'Task.php';
require 'functions.php';

//$router = new Router;
//
//require 'routes.php';
//
//
//
//$uri = (trim($_SERVER['REQUEST_URI'], '/'));
// dd($app);
require Router::load('routes.php')
->direct(Request::uri());

