<?php

namespace BlogApp\Repository;

interface RepositoryInterface
{
    public function getAll();

    public function getById();

    public function save();

    public function create();

    public function update();

    public function delete();
}