<?php


namespace Library;


class Books
{
    protected $id;
    protected $name;
    protected $category_id;
    protected $auth;
    protected $price;
    protected $image;
    protected $status;
    protected $producer;
    protected $number_of_books;

    public function __construct($id, $name, $category_id, $auth, $price, $image, $status, $producer, $number_of_books)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->auth = $auth;
        $this->price = $price;
        $this->image = $image;
        $this->status = $status;
        $this->producer = $producer;
        $this->number_of_books = $number_of_books;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return mixed
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
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
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @return mixed
     */
    public function getNumberOfBooks()
    {
        return $this->number_of_books;
    }

}