<?php
return [
    'database'=> [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => 'secret',
        'connection' => 'mysql:dbname=mytodo;host=febtest-mysql;port=3306;charset=utf8',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]

    ]
];
