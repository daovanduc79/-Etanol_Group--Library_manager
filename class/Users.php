<?php

namespace Library;

use Model\LibraryDB;

class Users
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;

    public function __construct($id, $name, $email, $password, $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }

}