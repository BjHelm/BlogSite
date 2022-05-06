<?php

namespace BlogApp\Controllers;

class DetailedViewController
{

    private BlogCommentsController $commentsController;
    private BlogPostController $postController;

    public function __construct(
        BlogCommentsController $blogCommentsController,
        BlogPostController     $blogPostController
    )
    {
        $this->postController = $blogPostController;
        $this->commentsController = $blogCommentsController;
    }

    public function getPostById(int $id): void
    {
        $PostArray = $this->postController->getBlogPost($id)->toArray();
        $CommentsArray = $this->commentsController->getBlogPostComments($id)->toArray();
        ViewController::render('post.php', ['post' => $PostArray, 'comments' => $CommentsArray]);
    }
}