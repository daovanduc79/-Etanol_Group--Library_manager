<?php


namespace Controller;


use Library\Books;
use Model\BookDB;
use Model\CategoriesDB;

class ControllerBook
{
    protected $book;

    public function __construct()
    {
        $this->book = new BookDB();
    }

    function show()
    {
        $books = $this->book->getDBShow();
        include 'view/book/list.php';
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['id'] = $_REQUEST['id'];
            $_SESSION['name'] = $_REQUEST['name'];
            $_SESSION['author'] = $_REQUEST['author'];
            $_SESSION['price'] = $_REQUEST['price'];
            $_SESSION['producer'] = $_REQUEST['producer'];
            $_SESSION['amount'] = $_REQUEST['amount'];
            $_SESSION['category_id'] = $_REQUEST['category_id'];
            $image = $_FILES['image'];
            $_SESSION['imageName'] = $image['name'];
            $category = new CategoriesDB();
            $arrayObjectCategoryId = $category->getId();

            if (checkInId($_SESSION['category_id'], $arrayObjectCategoryId) && !checkInId($_SESSION['id'], $this->book->getId())) {
                $_SESSION['checkImage'] = checkUploadImage($image, 'images/');
                if ($_SESSION['checkImage'] == 'Upload file thành công') {
                    $book = new Books($_SESSION['id'], $_SESSION['name'], $_SESSION['category_id'], $_SESSION['author'], $_SESSION['price'], $_SESSION['imageName'], $_SESSION['producer'], $_SESSION['amount']);
                    $this->book->add($book);
                    unset($_SESSION['id']);
                    unset($_SESSION['name']);
                    unset($_SESSION['author']);
                    unset($_SESSION['price']);
                    unset($_SESSION['producer']);
                    unset($_SESSION['amount']);
                    unset($_SESSION['category_id']);
                    unset($_SESSION['imageName']);
                    unset($_SESSION['checkImage']);
                    header('Location: index.php?pages=book');
                } else {
                    header('Location: index.php?pages=book&actions=add');
                }
            } else {
                if (!checkInId($_SESSION['category_id'], $arrayObjectCategoryId)) {
                    $_SESSION['category_id'] = false;
                }
                if (checkInId($_SESSION['id'], $this->book->getId())) {
                    $_SESSION['id'] = false;
                }
                header('Location: index.php?pages=book&actions=add');
            }
        } else {
            include 'view/book/add.php';
        }
    }
}