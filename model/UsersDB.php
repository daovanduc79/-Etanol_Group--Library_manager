<?php


namespace Model;


class UsersDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'users';
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM ? WHERE `email`= ? AND `password` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $this->nameTable);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}