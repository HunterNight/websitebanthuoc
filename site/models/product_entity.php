<?php
class product_entity
{
    var $ProductId;
    var $ProductName;
    var $SupplierID;
    var $CategoryID;
    var $Unit;
    var $UnitPrice;
    var $Quantity;
    var $SaleOff;
    var $Picture;
    var $Description;
    public function __construct($ProductId, $ProductName, $SupplierID, $CategoryID, $Unit, $UnitPrice, $Quantity, $SaleOff, $Picture, $Description)
    {
        $this->ProductId = $ProductId;
        $this->ProductName = $ProductName;
        $this->SupplierID = $SupplierID;
        $this->CategoryID = $CategoryID;
        $this->Unit = $Unit;
        $this->UnitPrice = $UnitPrice;
        $this->Quantity = $Quantity;
        $this->SaleOff = $SaleOff;
        $this->Picture = $Picture;
        $this->Description = $Description;
    }
    public function getProductId()
    {
        return $this->ProductId;
    }
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
    }
    public function getProductName()
    {
        return $this->ProductName;
    }
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;
    }
    public function getSupplierID()
    {
        return $this->SupplierID;
    }
    public function setSupplierID($SupplierID)
    {
        $this->SupplierID = $SupplierID;
    }
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;
    }
    public function getUnit()
    {
        return $this->Unit;
    }
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;
    }
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
    }
    public function getQuantity()
    {
        return $this->Quantity;
    }
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }
    public function getSaleOff()
    {
        return $this->SaleOff;
    }
    public function setSaleOff($SaleOff)
    {
        $this->SaleOff = $SaleOff;
    }
    public function getPicture()
    {
        return $this->Picture;
    }
    public function setPicture($Picture)
    {
        $this->Picture = $Picture;
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