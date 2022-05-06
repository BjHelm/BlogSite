<?php

namespace BlogApp\Repository;

use PDO;

class MysqlBlogPostRepository implements RepositoryInterface
{

    public function getAll(): array
    {

        $pdo = MysqlConnection::connect();

        $query = "select * from posts";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll();
    }


    public function getById(int $id): array
    {
        $pdo = MysqlConnection::connect();
        $query = "SELECT * FROM posts WHERE id = :postId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':postId', $id, PDO::PARAM_INT);
        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $stmt->fetchAll();
    }

    public function save($InputData): bool
    {
        $pdo = MysqlConnection::connect();
        $query = "INSERT INTO posts 
            (author_id, title, img, text) 
                VALUES 
            (:author_id, :title, :img, :text) ";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':author_id', $_SESSION['userid'], PDO::PARAM_INT);
        $stmt->bindParam(':title', $InputData['title'], PDO::PARAM_STR);
        $stmt->bindParam(':img', $InputData['img'], PDO::PARAM_STR);
        $stmt->bindParam(':text', $InputData['text'], PDO::PARAM_STR);
        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return true;
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