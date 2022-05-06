<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\UserRepositoryAbstraction;
use BlogApp\Repository\UserRepositoryInterface;

class UserController
{
    public int $id;
    public string $username;

    private UserRepositoryAbstraction $UserRepository;

    public function __construct(UserRepositoryAbstraction $UserRepository){
        $this->UserRepository = $UserRepository;
    }

    public function getById($id): self
    {
        $this->UserRepository->getById($id);
        return $this;
    }

    public function getByName($name): self
    {
        $this->UserRepository->getByName($name);
        return $this;
    }

}