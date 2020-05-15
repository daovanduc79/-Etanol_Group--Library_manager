<?php


namespace Controller;


use Library\Books;
use Model\BooksDB;

class ControllerBook
{
    protected $book;

    public function __construct()
    {
        $this->book = new BooksDB();
    }

    public function show()
    {
        $books = $this->book->join();
        include_once 'view/book/list.php';
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] ==='POST') {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $author = $_REQUEST['author'];
            $price = $_REQUEST['price'];
            $producer = $_REQUEST['producer'];
            $category_id = $_REQUEST['category_id'];
            $status = $_REQUEST['status'];
            $number_of_books = $_REQUEST['number_of_books'];
            $image = $_REQUEST['image'];
            $books = new Books($id,$name,$category_id,$author,$price,$image,$status,$producer,$number_of_books);

            $this->book->create($books);
            header('Location: index.php?pages=book');
        } else {
            include_once 'view/book/add.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $id = $_GET['id'];
            $books = $this->book->get($id);
            include_once 'view/book/edit.php';
        } else {
            $id = $_POST['id'];
            $books = new Books($id,$_POST['name'],$_POST['category_id'],$_POST['author'],$_POST['price'],$_POST['image'],$_POST['status'],$_POST['producer'],$_POST['number_of_books']);

            $this->book->edit($id,$books);
            header('Location: index.php?pages=book');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $id = $_GET['id'];
            $books = $this->book->get($id);
            include_once 'view/book/delete.php';
        } else {
            $id = $_POST['id'];
            $this->book->delete($id);
            header('Location: index.php?pages=book');
        }

    }
}