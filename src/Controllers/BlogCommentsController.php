<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\RepositoryInterface;

class BlogCommentsController
{
    private array $BlogPostCommentsArray;

    public function getBlogPostComments(int $BlogPostID, RepositoryInterface $CommentsRepository): self
    {
        $this->BlogPostCommentsArray = $CommentsRepository->getById($BlogPostID);
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function show($template):void
    {
        ViewController::render($template, $this->BlogPostCommentsArray);
        print_r($this->BlogPostCommentsArray);
    }
}