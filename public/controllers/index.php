<?php
//require '../functions.php';
$tasks = $app['database']->selectAll('todos', 'Task');

require __DIR__.'/../views/index.view.php';