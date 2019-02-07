<?php

require 'Task.php';
function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo'</pre>';
}

//
//function fetchAllTasks($pdo)
//{
//    $statement = $pdo->prepare('select * from todos');
//    $statement->execute();
//
//
//    return $statement->fetchAll(pdo::FETCH_CLASS, 'Task');
//}




//$statement = $connection->prepare('select * from todos');
//$statement->execute();
//
//
//$tasks = $statement->fetchAll(pdo::FETCH_CLASS, 'Task');
