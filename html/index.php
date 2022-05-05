<?php
session_start();
// Started 05.05.2022 19:45

//phpinfo();


//$salt = "^%$^GHF%^$";
//$password = "changeme";
//echo password_hash($salt.$password, PASSWORD_DEFAULT);

use BlogApp\Controllers\BlogCommentsController;
use BlogApp\Controllers\BlogPostController;
use BlogApp\Controllers\ViewController;
use BlogApp\Repository\MysqlBlogPostRepository;
use BlogApp\Repository\MysqlCommentsRepository;

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$BlogPostController = new BlogPostController();
$BlogRepository = new MysqlBlogPostRepository();

$BlogCommentsController = new BlogCommentsController();
$CommentsRepository = new MysqlCommentsRepository();

$CurrentPost = $BlogPostController->getBlogPost(1, $BlogRepository);
$CurrentPostComments = $BlogCommentsController->getBlogPostComments(1, $CommentsRepository);
ViewController::render("post.php", ['post'=>$CurrentPost, 'comments'=>$CurrentPost]);

