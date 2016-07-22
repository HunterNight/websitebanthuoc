<?php
class order_entity
{
    var $OrderID;
    var $UserID;
    var $OrderDate;
    var $ShipName;
    var $ShipAddress;
    public function __construct($OrderID, $UserID, $OrderDate,$ShipName,$ShipAddress)
    {
        $this->OrderID = $OrderID;
        $this->UserID = $UserID;
        $this->OrderDate = $OrderDate;
        $this->ShipName = $ShipName;
        $this->ShipAddress = $ShipAddress;
    }
    public function getOrderID()
    {
        return $this->OrderID;
    }
    public function setOrderID($OrderID)
    {
        $this->OrderID = $OrderID;
    }
    public function getUserID()
    {
        return $this->UserID;
    }
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    public function setOrderDate($OrderDate)
    {
        $this->OrderDate = $OrderDate;
    }
    public function getShipName()
    {
        return $this->ShipName;
    }
    public function setShipName($ShipName)
    {
        $this->ShipName = $ShipName;
    }
    public function getShipAddress()
    {
        return $this->ShipName;
    }
    public function setShipAddress($ShipAddress)
    {
        $this->ShipName = $ShipName;
    }
}
?>