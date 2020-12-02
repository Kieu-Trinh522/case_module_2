<?php


namespace APP\model;


class Books
{
    public $book_id;
    public $book_name;
    public $quantity;
    public $unit_price;
    public $author;
    public $category_id;
    public $image;

    /**
     * Books constructor.
     * @param $book_name
     * @param $quantity
     * @param $unit_price
     * @param $author
     * @param $category_id
     * @param $image
     */
    public function __construct($book_name, $quantity, $unit_price, $author, $category_id, $image)
    {
        $this->book_name = $book_name;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->author = $author;
        $this->category_id = $category_id;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->book_id;
    }

    /**
     * @param mixed $book_id
     */
    public function setBookId($book_id)
    {
        $this->book_id = $book_id;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->book_name;
    }

    /**
     * @param mixed $book_name
     */
    public function setBookName($book_name)
    {
        $this->book_name = $book_name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param mixed $unit_price
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}