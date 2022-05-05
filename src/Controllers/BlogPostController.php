<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\RepositoryInterface;

class BlogPostController
{
    private array $BlogPostArray;

    public function getBlogPost(int $BlogPostID, RepositoryInterface $repository): self
    {
        $this->BlogPostArray = $repository->getById($BlogPostID);
        return $this;
    }

    public function getAllBlogPosts(RepositoryInterface $repository): self
    {
        $this->BlogPostArray = $repository->getAll();
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function show($template):void
    {
        if(empty($this->BlogPostArray)){
            //TODO: Redirect to 404
            die('No post found');
        }
        ViewController::render($template, $this->BlogPostArray);
        print_r($this->BlogPostArray);

    }
}