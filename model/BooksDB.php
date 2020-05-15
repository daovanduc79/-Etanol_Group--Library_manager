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

    public function join()
    {
        $sql = "SELECT books.id,books.name,categories.name as category,books.author,books.price,books.image,
                        books.status,books.producer,books.number_of_books
                FROM books
                LEFT JOIN categories
                ON books.category_id = categories.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($books)
    {
        $sql = "INSERT INTO `books`(`id`, `name`, `category_id`, `author`, `price`, `image`, `status`, `producer`, `number_of_books`) VALUE(?,?,?,?,?,?,?,?,?) ";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(1, $books->id);
        $stmt->bindParam(2, $books->name);
        $stmt->bindParam(3, $books->category_id);
        $stmt->bindParam(4, $books->author);
        $stmt->bindParam(5, $books->price);
        $stmt->bindParam(6, $books->image);
        $stmt->bindParam(7, $books->status);
        $stmt->bindParam(8, $books->producer);
        $stmt->bindParam(9, $books->number_of_books);

        return $stmt->execute();
    }

    public function edit($id,$books) {
        $sql = "UPDATE `books` SET `name`=?,`category_id`=?,`author`=?,`price`=?,
                `image`=?,`status`=?,`producer`=?,`number_of_books`=? WHERE `id`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$books->name);
        $stmt->bindParam(2,$books->category_id);
        $stmt->bindParam(3,$books->author);
        $stmt->bindParam(4,$books->price);
        $stmt->bindParam(5,$books->image);
        $stmt->bindParam(6,$books->status);
        $stmt->bindParam(7,$books->producer);
        $stmt->bindParam(8,$books->number_of_books);
        $stmt->bindParam(9,$id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `books` WHERE `id`= ? ;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}