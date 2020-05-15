<?php


namespace Model;
use PDO;

class BookDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'books';
    }

    function getDBShow()
    {
        $sql = "SELECT books.id, books.image, books.name, books.author, categories.name AS nameCategory FROM books JOIN categories ON books.category_id = categories.id;";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function add($book)
    {
        $id = $book->getId();
        $name = $book->getName();
        $author = $book->getAuthor();
        $price = $book->getPrice();
        $categoryId = $book->getCategoryId();
        $image = $book->getImage();
        $producer = $book->getProducer();
        $numberOfBooks = $book->getNumberOfBooks();

        $sql = 'insert into books (id,name,category_id,author,price,image,producer,number_of_books) values (?,?,?,?,?,?,?,?);';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $categoryId);
        $stmt->bindParam(4, $author);
        $stmt->bindParam(5, $price);
        $stmt->bindParam(6, $image);
        $stmt->bindParam(7, $producer);
        $stmt->bindParam(8, $numberOfBooks);
        $stmt->execute();
    }

}