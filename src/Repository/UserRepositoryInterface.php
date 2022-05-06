<?php

namespace BlogApp\Repository;

interface UserRepositoryInterface
{
    public function getByName(string $name);
}