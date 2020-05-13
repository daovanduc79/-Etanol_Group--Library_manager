<?php

namespace Controller;

use Model\UsersDB;

class ControllerUsers
{
    protected $usersDB;

    public function __construct()
    {
        $this->usersDB = new UsersDB();
    }

    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            // lay du lieu tu form login
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            // check voi tren csdl
            $checkLogin = $this->usersDB->login($email, $password);

            if ($checkLogin) {
                $_SESSION['login'] = $checkLogin;
                // cho phep vao home
                header('location: index.php');
            } else {
                $_SESSION['errorLogin'] = 'email or password incorrect';
                header('location: index.php');
            }
        }
    }
}