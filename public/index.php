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



class Post
{
    Public $title;
    public $published;
    public function __construct($title, $published)
    {
    $this->title = $title;
    $this->published = $published;
    }
}

$posts = [
    new Post('My 1st Post', true),
    new Post('My 2nd Post', true),
    new Post('My 3rd Post', true),
    new Post('My 4th Post', false)

];
dd($posts);
