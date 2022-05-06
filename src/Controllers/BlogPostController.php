<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\RepositoryInterface;

class BlogPostController
{
    private array $BlogPostArray;
    private RepositoryInterface $PostsRepository;

    public function __construct(RepositoryInterface $PostsRepository){
        $this->PostsRepository = $PostsRepository;
    }

    public function getBlogPost(int $BlogPostID): self
    {
        $this->BlogPostArray = $this->PostsRepository->getById($BlogPostID);
        return $this;
    }

    public function getAllBlogPosts(): self
    {
        $this->BlogPostArray = $this->PostsRepository->getAll();
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
        ViewController::render($template, ['post' => $this->BlogPostArray]);
//        print_r($this->BlogPostArray);

    }

    public function toArray(): array
    {
        return $this->BlogPostArray;
    }
}