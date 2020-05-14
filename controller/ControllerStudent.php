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
}