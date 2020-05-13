<?php


namespace Model;


class LibraryDB
{
    public $conn;
    protected $nameTable;

    public function __construct($nameTable)
    {
        $this->conn = new ConnectionDB();
        $this->conn = $this->conn->connect();
        $this->nameTable = $nameTable;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM ? WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->nameTable);
        $stmt->bindParam(2, $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getALl()
    {
        $sql = "SELECT * FROM ? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->nameTable);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete()
    {
        $sql = "DELETE FROM ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->nameTable);

        return $stmt->execute();
    }
}