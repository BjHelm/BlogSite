<?php

namespace BlogApp\Repository;

class MysqlUserRepository extends UserRepositoryAbstraction
{


    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        return ['id'=>1, 'login'=>'username', 'password'=>'$2y$10$4VzSwgPV0YbvNHJKplAUwu25jNNjYDy7f/0FfykNgTVI9wHJywBEO']
    }

    public function getById(int $id): array
    {
        // TODO: Implement getById() method.
        return ['id'=>1, 'login'=>'username', 'password'=>'$2y$10$4VzSwgPV0YbvNHJKplAUwu25jNNjYDy7f/0FfykNgTVI9wHJywBEO']
    }

    public function save()
    {
        // TODO: Implement save() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function getByName()
    {
        return ['id'=>1, 'login'=>'username', 'password'=>'$2y$10$4VzSwgPV0YbvNHJKplAUwu25jNNjYDy7f/0FfykNgTVI9wHJywBEO']
    }
}