<?php
require_once '../app/services/BookService.php';
require_once '../app/models/Book.php';
class HomeController
{
    function index()
    {
        $bookService = new BookService();
        $books = $bookService->getAllData();
        include '../app/views/index.php';
    }
    public function add()
    {
        $bookService = new BookService();

        if (isset($_POST['add'])) {

            $bookName = $_POST['bookName'];
            $categoryID = $_POST['categoryID'];
            $bookDesc = $_POST['bookDesc'];


            $newBook = new Book(null, $bookName, $categoryID, $bookDesc);
            $bookService->insertData($newBook);
            echo "Thêm thành công";
            header("location: index.php?route=book&action=index");
        }
        include("../app/views/add.php");
    }
    public function delete()
    {
        $bookService = new BookService();
        $id = $_GET['id'];
        $chosenBook = $bookService->getData($id);
        if (isset($_POST['delete'])) {
            $bookService->deleteData($chosenBook);
            header("location: index.php?route=book&action=index");
        } else if (isset($_POST['noDelete'])) {
            header("location: index.php?controller=article&action=index");
        }
        include("../app/views/delete.php");
    }
    public function edit()
    {
        $bookService = new BookService();
        $id = $_GET['id'];
        $chosenBook = $bookService->getData($id);
        if (isset($_POST['edit'])) {


            $bookName = $_POST['bookName'];
            $categoryID = $_POST['categoryID'];
            $bookDesc = $_POST['bookDesc'];

            $chosenBook->setBookName($bookName);
            $chosenBook->setCategoryID($categoryID);
            $chosenBook->setBookDesc($bookDesc);
            $bookService->updateData($chosenBook);
            echo "Edit successfully";
            header("location: index.php?route=book&action=index");
        }
        include("../app/views/edit.php");
    }
}
