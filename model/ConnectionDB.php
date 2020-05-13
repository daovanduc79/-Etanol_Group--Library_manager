<?php

namespace Model;

use PDO;
use PDOException;


class ConnectionDB
{
    protected $server;
    protected $username;
    protected $password;

    protected function __construct()
    {
        $this->server = "mysql:host=localhost;dbname=case_study_md2";
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->server, $this->username, $this->password);
        } catch (PDOException $e) {
            $e->getMessage();
            exit();
        }

        return $conn;
    }
}