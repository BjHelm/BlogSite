<?php

namespace BlogApp\Controllers;

class DetailedViewController
{

    private BlogCommentsController $commentsController;
    private BlogPostController $postController;
    private array $CommentsArray;
    private array $PostArray;

    public function __construct(
        BlogCommentsController $blogCommentsController,
        BlogPostController $blogPostController
    )
    {
        $this->postController = $blogPostController;
        $this->commentsController = $blogCommentsController;
    }

    public function getPostById(int $id): void{
        $this->PostArray = $this->postController->getBlogPost($id)->toArray();
        $this->CommentsArray = $this->commentsController->getBlogPostComments($id)->toArray();
        ViewController::render('post.php', ['post' => $this->PostArray, 'comments'=>$this->CommentsArray]);
    }
}