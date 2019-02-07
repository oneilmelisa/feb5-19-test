<?php

require 'functions.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';
//require 'Task.php';



$pdo = connection::make();
//$tasks = fetchAllTasks($pdo);

$query = new QueryBuilder($pdo);
$tasks = $query->selectAll('todos');

require 'index.view.php';
