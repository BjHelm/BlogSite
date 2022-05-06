<?php

namespace BlogApp\Repository;

interface RepositoryInterface
{
    public function getAll(): array;

    public function getById(int $id): array;

    public function save($InputData): bool;

    public function create();

    public function update();

    public function delete();
}