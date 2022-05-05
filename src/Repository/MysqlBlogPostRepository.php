<?php

namespace BlogApp\Repository;

use PDO;

class MysqlBlogPostRepository implements RepositoryInterface
{

    public function getAll():array
    {

        $pdo = MysqlConnection::connect();

        $query = "select * from posts";
        $stmt = $pdo->query($query);
        return $stmt->fetchAll();
    }


    public function getById(int $id):array
    {
        $pdo = MysqlConnection::connect();
        $query = "SELECT * FROM posts WHERE id = :postId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':postId', $id, PDO::PARAM_INT);
        try {
            $stmt->execute();
        } catch (\PDOException $e){
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