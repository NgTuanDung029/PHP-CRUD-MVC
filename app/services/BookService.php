<?php
require_once '../app/libs/DBconnection.php';
require_once '../app/models/Book.php';
class BookService
{
    public static function getAllData()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = 'select * from book, category where category.category_id = book.category_id order by id desc';
            $stmt = $conn->query($sql);
            $books = [];
            while ($row = $stmt->fetch()) {
                $book = new Book($row['id'], $row['book_name'], $row['category_name'], $row['book_desc']);
                $books[] = $book;
            }
            return $books;
        }
    }
    public static function insertData($objBook)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();

        $newBookName = $objBook->getBookName();
        $newCategoryID = $objBook->getCategoryID();
        $newBookDesc = $objBook->getBookDesc();
        if ($conn != null) {
            $sql = "INSERT INTO book ( book_name, category_id, book_desc) VALUES ('$newBookName', '$newCategoryID', '$newBookDesc')";
            $stmt = $conn->query($sql);
        }
    }
    public static function getData($id)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * from book where id = $id";
            $stmt = $conn->query($sql)->fetch();
            $chosenBook = new Book($stmt['id'], $stmt['book_name'], $stmt['category_id'], $stmt['book_desc']);
            return $chosenBook;
        }
    }
    public static function updateData($objBook)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();

        $ID = $objBook->getBookID();
        $newBookName = $objBook->getBookName();
        $newCategoryID = $objBook->getCategoryID();
        $newBookDesc = $objBook->getBookDesc();
        if ($conn != null) {
            $sql = "UPDATE book SET book_name = '$newBookName', category_id = '$newCategoryID', book_desc = '$newBookDesc' WHERE id = $ID";
            $conn->query($sql);
        }
    }
    public function deleteData($objBook)
    {

        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        $ID = $objBook->getBookID();
        if ($conn != null) {
            $sql = "DELETE FROM book WHERE id = $ID";
            $conn->query($sql);
        }
    }
}
