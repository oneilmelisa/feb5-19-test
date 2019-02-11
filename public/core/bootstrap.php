<?php

$app = [];
$app['config'] = require 'config.php';
require 'router.php';
require 'Request.php';

require 'database/connection.php';
require 'database/QueryBuilder.php';


$app ['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);