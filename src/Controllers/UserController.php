<?php

namespace BlogApp\Controllers;

use BlogApp\Repository\UserRepositoryAbstraction;

class UserController
{
    public int $id;
    public string $username;

    private UserRepositoryAbstraction $UserRepository;

    public function __construct(UserRepositoryAbstraction $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function getById($id): array
    {
        return $this->UserRepository->getById($id);
    }

    public function getByName($name): array
    {
        return $this->UserRepository->getByName($name);
    }

}