<?php


namespace Controller;


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
        $books = $this->book->getAll();
        include_once 'view/book/list.php';
    }

    public function add()
    {

    }

    public function edit()
    {

    }
}