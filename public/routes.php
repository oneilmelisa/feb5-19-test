<?php
$router->define ( [
    '' => __DIR__.'controllers/index.php',
    'about' => __DIR__.'controllers/about.php',
    'about/culture' => __DIR__.'controllers/about-culture.php',
    'contact' => __DIR__.'controllers/contact.php'
]);

//$router->define('', 'controllers/index.php');