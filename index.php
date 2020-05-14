<?php

use Controller\ControllerBook;
use Controller\ControllerCategory;
use Controller\ControllerHome;
use Controller\ControllerUsers;

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
include 'controller/ControllerStudent.php';

include 'model/ConnectionDB.php';
include 'model/BooksDB.php';
include 'model/LibraryDB.php';
include 'model/StudentsDB.php';
include 'model/UsersDB.php';
include 'model/CategoriesDB.php';

include 'support/function.php';

$user = new ControllerUsers();
$home = new ControllerHome();
$category = new ControllerCategory();
$book = new ControllerBook();
$student = new \Controller\ControllerStudent();

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
                    case 'delete':
                        if (isset($_REQUEST['id'])) {
                            $category->delete();
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
        case 'book':
            if (isset($_REQUEST['actions'])) {
                switch ($_REQUEST['actions']) {
                    case 'add':
                        $book->add();
                        break;
                    case 'edit':
                        $book->edit();
                        break;
                    default :
                        header('Location: index.php?pages=book');
                }
            } else {
                $book->show();
            }
            break;
        case 'student':
            if (isset($_REQUEST['actions'])) {
                switch ($_REQUEST['actions']) {
                    case 'add':
                        $student->add();
                        break;
                    case 'edit':
                        $student->edit();
                        break;
                    default :
                        header('Location: index.php?pages=student');
                }
            } else {
                $student->show();
            }
            break;
        case 'home':
            $home->show();
            break;
        default:
            $user->login();
    }
}
