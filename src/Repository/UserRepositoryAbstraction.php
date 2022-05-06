<?php

namespace BlogApp\Repository;

abstract class UserRepositoryAbstraction implements RepositoryInterface
{
    abstract public function getByName(): array;
}