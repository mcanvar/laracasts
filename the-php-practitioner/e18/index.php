<?php

class Post {
  public $title;
  public $author;
  public $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }
}

$posts = [
  new Post('My first post', 'JW', TRUE),
  new Post('My second post', 'MC', TRUE),
  new Post('My third post', 'FG', TRUE),
  new Post('My fourth post', 'JH', FALSE)
];

// var_dump($posts);

$unpublishedPosts = array_filter($posts, function ($post){
  return !$post->published;
});

// var_dump($unpublishedPosts);

$publishedPosts = array_filter($posts, function ($post){
  return $post->published;
});

// var_dump($publishedPosts);

$modifiedPosts = array_map(function ($post){
  return [ 'title' => $post->title ];
}, $posts);

// var_dump($modifiedPosts);

$postsArray = array_map(function ($post){
  return (array) $post;
}, $posts);

// var_dump($postsArray);

$titles = array_map(function ($post){
  return $post->title;
}, $posts);

// var_dump($titles);

$titles2 = array_column($posts, 'title');

// var_dump($titles2);

$titles2 = array_column($posts, 'title', 'author');

var_dump($titles2);
