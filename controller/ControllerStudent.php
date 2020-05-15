<?php


namespace Controller;


use Model\StudentsDB;

class ControllerStudent
{
    protected $student;
    public function __construct()
    {
        $this->student = new StudentsDB();
    }

    function show() {
        $students = $this->student->getAll();
        include 'view/student/list.php';
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            include 'view/student/add.php';
        }
    }

    function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            include 'view/student/edit.php';
        }
    }
}