<?php
session_start();
include 'class/Books.php';
include 'class/Borrows.php';
include 'class/Categories.php';
include 'class/Students.php';
include 'class/Users.php';

include 'controller/ControllerUsers.php';
include 'controller/ControllerHome.php';
include 'controller/ControllerCategory.php';
include 'controller/ControllerBook.php';

include 'model/ConnectionDB.php';
include 'model/BooksDB.php';
include 'model/LibraryDB.php';
include 'model/StudentsDB.php';
include 'model/UsersDB.php';
include 'model/CategoriesDB.php';

include 'support/function.php';

$user = new \Controller\ControllerUsers();
$home = new \Controller\ControllerHome();
$category = new \Controller\ControllerCategory();

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
        case 'category':
            if (isset($_REQUEST['actions'])) {
                switch ($_REQUEST['actions']) {
                    case 'add':
                        $category->add();
                        break;
                    case 'edit':
                        if (isset($_REQUEST['id'])) {
                            $category->edit();
                        } else {
                            header('Location: index.php?pages=category');
                        }
                        break;
                    default:
                        header('Location: index.php?pages=category');
                }
            } else {
                $category->show();
            }
            break;
        case 'home':
            $home->show();
            break;
        default:
            $user->login();
    }
}