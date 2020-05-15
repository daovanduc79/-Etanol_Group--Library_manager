<?php


namespace Controller;


use Library\Students;
use Model\StudentsDB;

class ControllerStudent
{
    protected $student;

    public function __construct()
    {
        $this->student = new StudentsDB();
    }

    function show()
    {
        $students = $this->student->getAll();
        include 'view/student/list.php';
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $image = $_FILES['image'];
            $_SESSION['imageName'] = $image['name'];
            $_SESSION['id'] = $_REQUEST['id'];
            $_SESSION['name'] = $_REQUEST['name'];
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['phone'] = $_REQUEST['phone'];
            $_SESSION['birthDay'] = $_REQUEST['birthDay'];
            $_SESSION['address'] = $_REQUEST['address'];
            if ($_SESSION['name'] != '' && $_SESSION['email'] != '' && $_SESSION['phone'] != '' && $_SESSION['id'] != '') {
                $_SESSION['checkImage'] = checkUploadImage($image, 'images/');
                if ($_SESSION['checkImage'] == 'Upload file thành công') {
                    $student = new Students($_SESSION['id'], $_SESSION['name'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['imageName']);
                    if ($_SESSION['birthDay'] != '') {
                        $student->setBirthday($_SESSION['birthDay']);
                    }
                    if ($_SESSION['address'] != '') {
                        $student->setAddress($_SESSION['address']);
                    }
                    $this->student->add($student);
                    unset($_SESSION['id']);
                    unset($_SESSION['name']);
                    unset($_SESSION['email']);
                    unset($_SESSION['phone']);
                    unset($_SESSION['birthDay']);
                    unset($_SESSION['address']);
                    unset($_SESSION['imageName']);
                    unset($_SESSION['checkImage']);
                    header('Location: index.php?pages=student');
                } else {
                    header('Location: index.php?pages=student&actions=add');
                }
            }
        } else {
            include 'view/student/add.php';
        }
    }

    function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_REQUEST['id'];
            $image = $_FILES['image'];
            $_SESSION['imageName'] = $image['name'];
            $_SESSION['name'] = $_REQUEST['name'];
            $_SESSION['email'] = $_REQUEST['email'];
            $_SESSION['phone'] = $_REQUEST['phone'];
            $_SESSION['birthDay'] = $_REQUEST['birthDay'];
            $_SESSION['address'] = $_REQUEST['address'];
            $_SESSION['status'] = $_REQUEST['status'];

            if ($_SESSION['name'] != '' && $_SESSION['email'] != '' && $_SESSION['phone'] != '' && ($id == $_SESSION['oldId']  || !checkInId($id, $this->student->getAll()))) {
                $_SESSION['checkImage'] = checkUploadImage($image, 'images/');
                if (($_SESSION['checkImage'] == 'Lỗi : File đã tồn tại.' && $_SESSION['imageName'] == $_SESSION['imageById']) || $_SESSION['checkImage'] == "Lỗi: Image is empty") {
                    $student = new \library\Student($_SESSION['imageById'], $_SESSION['name'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['birthDay'], $_SESSION['address'], $status, $_SESSION['note']);
                    update($this->student, $student, $id);
                    header("Location: index.php?pages=student");
                } elseif ($_SESSION['checkImage'] == 'Upload file thành công') {
                    $student = new \library\Student($_SESSION['imageName'], $_SESSION['name'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['birthDay'], $_SESSION['address'], $status, $_SESSION['note']);
                    unlink('images/' . $_SESSION['imageById']);
                    update($this->student, $student, $id);
                    header("Location: index.php?pages=student");
                } else {
                    header("Location: index.php?pages=student&actions=update&id=$id");
                }
            } else {
                header("Location: index.php?pages=student&actions=update&id=$id");
            }
        } else {
            $_SESSION['oldId'] = $_REQUEST['id'];
            $studentById = $this->student->get($_SESSION['oldId']);
            $name = $studentById->name;
            $email = $studentById->email;
            $phone = $studentById->phone;
            $birthDay = $studentById->birthday;
            $address = $studentById->address;
            $status = $studentById->status;
            $_SESSION['imageById'] = $studentById->image;
            include 'view/student/edit.php';
        }
    }

    function search() {
        $keyword = $_REQUEST['keyword'];
        $students = $this->student->search($keyword);
        include 'view/student/list.php';
    }
}