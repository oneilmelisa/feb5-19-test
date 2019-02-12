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
    public function __construct($title, $author, $published)
    {
    $this->title = $title;
    $this->published = $published;
    $this->author = $author;
    }
}

$posts = [
    new Post('My 1st Post', 'MO', true),
    new Post('My 2nd Post', 'MO',true),
    new Post('My 3rd Post', 'FU', true),
    new Post('My 4th Post','TY', false)

];

//$unpublishedPosts = array_filter($posts, function($post) {
//return ! $post->published;
//});
//$publishedPosts = array_filter($posts, function($post) {
//return $post->published;
//});

$modified = array_map(function ($post)
{
return ['title' => $post->title];
}, $posts);



$posts = array_map(function ($post){
    return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');
$author = array_column($posts, 'author');

dd($author);