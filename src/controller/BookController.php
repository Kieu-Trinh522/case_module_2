<?php

namespace APP\controller;

use APP\model\BookModel;
use APP\model\Books;
use APP\model\CategoryModel;

class BookController
{
    public $bookModel;
    public $categoryModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $categories= $this->categoryModel->getCategory();
        $books=$this->bookModel->getAll();
        include_once "homepage.php";
    }

    public function show()
    {
        $books = $this->bookModel->getAll();
        include_once 'src/view/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $categories=$this->categoryModel->getCategory();
            include_once 'src/view/add.php';
        } else {
            $bookName = $_REQUEST['name'];
            $quantity = $_REQUEST['quantity'];
            $unitPrice = $_REQUEST['unitPrice'];
            $author = $_REQUEST['author'];
            $category = $_REQUEST['category'];
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo 'success';
            } else {
                echo 'fail';
            }

            $image = $path == 'uploads/' ? 'uploads/default.png' : $path;

            $book = new Books($bookName, $quantity, $unitPrice, $author, $category, $image);
            $this->bookModel->addBook($book);
            header('location:index1.php?page=list');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $categories=$this->categoryModel->getCategory();
            $id=$_REQUEST['id'];
            $book=$this->bookModel->getBookById($id);

            include_once 'src/view/edit.php';
        } else {
            $id=$_REQUEST['id'];
            $book=$this->bookModel->getBookById($id);
            $img = $book->getImage();

            $bookName = $_REQUEST['name'];
            $quantity = $_REQUEST['quantity'];
            $unitPrice = $_REQUEST['unitPrice'];
            $author = $_REQUEST['author'];
            $category = $_REQUEST['category'];
            $file = $_FILES['image']['tmp_name'];
            $path = 'uploads/' . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo 'success';
            } else {
                echo 'fail';
            }

            $image = $path == 'uploads/' ? $img : $path;

            $newBook = new Books($bookName, $quantity, $unitPrice, $author, $category, $image);
            $this->bookModel->editBook($newBook,$id);
            header('location:index1.php?page=list');
        }
    }

    public function delete()
    {
        $id=$_REQUEST['id'];
        $this->bookModel->deleteBook($id);
        header('location:index1.php?page=list');
    }

    public function getBookByCategory()
    {
        $cat=$_REQUEST['category'];
        $books=$this->bookModel->getBookByCategory($cat);
        $categories=$this->categoryModel->getCategory();
        include_once "homepage.php";
    }
}