<?php

namespace Model;
use PDO;

class BooksDB
{
    protected $conn;

    public function __construct()
    {
        $conn = new ConnectionDB();
        $this->conn = $conn->connect();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM `books` WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `books` ;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete()
    {
        $sql = "DELETE FROM `books` ;";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute();
    }

}