<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\RepositoryInterface;

class BlogCommentsController
{
    private array $BlogPostCommentsArray;
    private RepositoryInterface $CommentsRepository;

    public function __construct(RepositoryInterface $CommentsRepository){
        $this->CommentsRepository = $CommentsRepository;
    }

    public function getBlogPostComments(int $BlogPostID): self
    {
        $this->BlogPostCommentsArray = $this->CommentsRepository->getById($BlogPostID);
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