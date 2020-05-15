<?php


namespace Library;


class Books
{
    public $id;
    public $name;
    public $category_id;
    public $author;
    public $price;
    public $image;
    public $status;
    public $producer;
    public $number_of_books;

    public function __construct($id, $name, $category_id, $author, $price, $image, $status, $producer, $number_of_books)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category_id = $category_id;
        $this->author = $author;
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
    public function getAuthor()
    {
        return $this->author;
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