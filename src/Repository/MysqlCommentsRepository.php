<?php

namespace BlogApp\Repository;

use PDO;

class MysqlCommentsRepository implements RepositoryInterface
{

    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        return [];
    }

    // We get all comments related to the Blog Post
    public function getById(int $id): array
    {
        $pdo = MysqlConnection::connect();
        $query = "SELECT 
            id, 
            author_id, 
            blog_id, 
            name, 
            mail,
            url,
            text,
            created_at
    FROM comments WHERE blog_id = :postId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':postId', $id, PDO::PARAM_INT);
        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $stmt->fetchAll();
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
}