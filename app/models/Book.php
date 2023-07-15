<?php
class Book
{
    private $id;
    private $bookName;
    private $categoryID;
    private $bookDesc;
    public function __construct($id, $bookName, $categoryID, $bookDesc)
    {
        $this->id       = $id;
        $this->bookName    = $bookName;
        $this->categoryID  = $categoryID;
        $this->bookDesc  = $bookDesc;
    }
    public function getBookID()
    {
        return $this->id;
    }
    public function setBookID($id)
    {
        $this->id = $id;
    }
    public function getBookName()
    {
        return $this->bookName;
    }
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;
    }
    public function getCategoryID()
    {
        return $this->categoryID;
    }
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }
    public function getBookDesc()
    {
        return $this->bookDesc;
    }
    public function setBookDesc($bookDesc)
    {
        $this->bookDesc = $bookDesc;
    }
}
