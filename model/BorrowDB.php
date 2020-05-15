<?php


namespace Model;


class BorrowDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'borrows';
    }
}