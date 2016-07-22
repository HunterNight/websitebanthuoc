<?php
class category_entity
{
    var $CategoryID;
    var $CategoryName;
    var $Description;
    public function __construct($CategoryID, $CategoryName, $Description)
    {
        $this->CategoryID = $CategoryID;
        $this->CategoryName = $CategoryName;
        $this->Description = $Description;
    }
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;
    }
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
    }
    public function getDescription()
    {
        return $this->Description;
    }
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
}
?>