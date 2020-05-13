<?php


namespace Model;


class LibraryDB
{
    public $conn;
    protected $nameTable;

    public function __construct($nameTable)
    {
        $this->conn = new ConnectionDB();
        $this->conn->connect();
        $this->nameTable = $nameTable;
    }

}