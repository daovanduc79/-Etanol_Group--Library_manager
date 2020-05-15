<?php


namespace Controller;


use Model\BorrowDB;

class ControllerBorrow
{
protected $borrow;
public function __construct()
{
    $this->borrow = new BorrowDB();
}
function show() {
    $borrows = $this->borrow->getAll();
    include 'view/borrow/list.php';
}
}