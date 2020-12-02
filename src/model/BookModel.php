<?php


namespace APP\model;


class BookModel
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql="SELECT books.book_id, books.book_name, books.quantity, books.unit_price, books.author, categorys.category_name, books.image FROM books JOIN categorys ON books.category_id=categorys.category_id ";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $array=[];
        foreach ($data as $item){
            $book=new Books($item['book_name'],$item['quantity'],$item['unit_price'],$item['author'],$item['category_name'],$item['image']);
            $book->setBookId($item['book_id']);
            array_push($array,$book);
        }
        return $array;
    }

    public function addBook($book)
    {
        $sql="INSERT INTO `books`(`book_name`, `quantity`, `unit_price`, `author`, `category_id`, `image`) VALUES (:book_name,:quantity,:unit_price,:author,:category_id,:image)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':book_name',$book->getBookName());
        $stmt->bindParam(':quantity',$book->getQuantity());
        $stmt->bindParam(':unit_price',$book->getUnitPrice());
        $stmt->bindParam(':author',$book->getAuthor());
        $stmt->bindParam(':category_id',$book->getCategoryId());
        $stmt->bindParam(':image',$book->getImage());
        $stmt->execute();
    }

    public function getBookById($id)
    {
       // $sql="SELECT books.book_id, books.book_name, books.quantity, books.unit_price, books.author, categorys.category_name, books.image FROM books JOIN categorys ON books.category_id=categorys.category_id  WHERE books.book_id=:book_id";
        $sql = "SELECT * FROM books INNER JOIN categorys ON books.category_id=categorys.category_id WHERE books.book_id=:book_id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':book_id',$id);
        $stmt->execute();
        $item=$stmt->fetch();
        $book=new Books($item['book_name'],$item['quantity'],$item['unit_price'],$item['author'],$item['category_id'],$item['image']);
        $book->setBookId($item['book_id']);
        return $book;
    }

    public function editBook($book,$_id)
    {
        $sql="UPDATE `books` SET `book_name`=:book_name,`quantity`=:quantity,`unit_price`=:unit_price,`author`=:author,`category_id`=:category_id,`image`=:image WHERE `book_id`=:book_id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':book_name',$book->getBookName());
        $stmt->bindParam(':quantity',$book->getQuantity());
        $stmt->bindParam(':unit_price',$book->getUnitPrice());
        $stmt->bindParam(':author',$book->getAuthor());
        $stmt->bindParam(':category_id',$book->getCategoryId());
        $stmt->bindParam(':image',$book->getImage());
        $stmt->bindParam(':book_id',$_id);
        $stmt->execute();
    }

    public function deleteBook($id)
    {
        $sql="DELETE FROM books WHERE book_id=:book_id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':book_id',$id);
        $stmt->execute();
    }
}