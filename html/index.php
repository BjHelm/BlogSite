<?php
session_start();

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Started 05.05.2022 19:45
// Totally Dead 23:02
// 8:25 Guten Morgen
//phpinfo();

//$password = "changeme";
//echo password_hash($password, PASSWORD_DEFAULT);

use BlogApp\Controllers\BlogCommentsController;
use BlogApp\Controllers\BlogPostController;
use BlogApp\Controllers\DetailedViewController;
use BlogApp\Repository\MysqlBlogPostRepository;
use BlogApp\Repository\MysqlCommentsRepository;


$BlogPostController = new BlogPostController(new MysqlBlogPostRepository());
$BlogCommentsController = new BlogCommentsController(new MysqlCommentsRepository());

$DetailedViewController = new DetailedViewController($BlogCommentsController, $BlogPostController);

// TODO: Router
// DETAILED VIEW
//$DetailedViewController->getPostById(1);

// ALL POSTS
$BlogPostController->getAllBlogPosts()->show('login.php');

//$CurrentPost = $BlogPostController->getBlogPost(1);
//$CurrentPostComments = $BlogCommentsController->getBlogPostComments(1);
//ViewController::render("post.php", ['post' => $CurrentPost, 'comments' => $CurrentPostComments]);
