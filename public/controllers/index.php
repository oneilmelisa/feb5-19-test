<?php
require '../functions.php';
$tasks = $database->selectAll('todos', 'Task');

require __DIR__.'/../views/index.view.php';