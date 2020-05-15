<?php


namespace Controller;


use Model\BookDB;

class ControllerBook
{
    protected $book;

    public function __construct()
    {
        $this->book = new BookDB();
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