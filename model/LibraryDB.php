<?php


namespace Model;


use PDO;

class LibraryDB
{
    public $conn;
    protected $nameTable;

    public function __construct()
    {
        $conn = new ConnectionDB();
        $this->conn = $conn->connect();
        $this->nameTable;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM $this->nameTable WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->nameTable ;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete()
    {
        $sql = "DELETE FROM ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->nameTable);

        return $stmt->execute();
    }
}