<?php


namespace Model;


class StudentsDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'students';
    }
}