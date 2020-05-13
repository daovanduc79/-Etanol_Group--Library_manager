<?php
session_start();
include 'class/Books.php';
include 'class/Borrows.php';
include 'class/Categories.php';
include 'class/Students.php';
include 'class/Users.php';

include 'controller/ControllerUsers.php';
include 'controller/ControllerHome.php';

include 'model/ConnectionDB.php';
include 'model/BooksDB.php';
include 'model/LibraryDB.php';
include 'model/StudentsDB.php';
include 'model/UsersDB.php';

include 'support/function.php';

$user = new \Controller\ControllerUsers();
$home = new \Controller\ControllerHome();

if (isset($_REQUEST['pages'])) {
    switch ($_REQUEST['pages']) {
        case 'user':
            if (isset($_REQUEST['actions'])) {
                switch ($_REQUEST['actions']) {
                    case 'login':
                        $user->login();
                        break;
                    case 'registration':
                        $user->registration();
                        break;
                    default:
                        $user->login();
                }
            }
            break;
        case 'home':
            $home->show();
            break;
        default:
            $user->login();
    }
}

