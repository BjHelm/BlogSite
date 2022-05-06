<?php
session_start();
if(array_key_exists('userid', $_SESSION)){
    echo "Logged in";
}
require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Started 05.05.2022 19:45
// Totally Dead 23:02
// 08:25 Guten Morgen
// 09:39 Call pause
// 10:10 Finished call
// 10:51 STOP
//phpinfo();

//$password = "changeme";
//echo password_hash($password, PASSWORD_DEFAULT);

use BlogApp\Controllers\BlogCommentsController;
use BlogApp\Controllers\BlogPostController;
use BlogApp\Controllers\DetailedViewController;
use BlogApp\Controllers\LoginController;
use BlogApp\Controllers\UserController;
use BlogApp\Repository\MysqlBlogPostRepository;
use BlogApp\Repository\MysqlCommentsRepository;
use BlogApp\Repository\MysqlUserRepository;


$BlogPostController = new BlogPostController(new MysqlBlogPostRepository());
$BlogCommentsController = new BlogCommentsController(new MysqlCommentsRepository());
$LoginController = new LoginController(new UserController(new MysqlUserRepository()));

$DetailedViewController = new DetailedViewController($BlogCommentsController, $BlogPostController);

// TODO: Router
// DETAILED VIEW
//$DetailedViewController->getPostById(1);

// ALL POSTS
//$BlogPostController->getAllBlogPosts()->show('posts.php');


// LOGIN
if(!empty($_POST)) {
    $LoginController->login($_POST);
}
\BlogApp\Controllers\ViewController::render('login.php', []);


//LOGOUT
//session_destroy();