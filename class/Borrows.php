<?php


namespace Library;


class Borrows
{
    protected $id;
    protected $student_id;
    protected $borrow_date;
    protected $return_date;
    protected $status;
    protected $pay_id;

    public function __construct($id, $student_id, $borrow_date, $return_date, $status, $pay_id)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->borrow_date = $borrow_date;
        $this->return_date = $return_date;
        $this->status = $status;
        $this->pay_id = $pay_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @return mixed
     */
    public function getBorrowDate()
    {
        return $this->borrow_date;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->return_date;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getPayId()
    {
        return $this->pay_id;
    }
}