<?php
class supplier_entity
{
    var $SupplierID;
    var $SupplierName;
    var $Address;
    var $Phone;
    var $Email;
    public function __construct($SupplierID, $SupplierName, $Address,$Phone,$Email)
    {
        $this->SupplierID = $SupplierID;
        $this->SupplierName = $SupplierName;
        $this->Address = $Address;
        $this->Phone = $Phone;
        $this->Email = $Email;
    }
    public function getSupplierID()
    {
        return $this->SupplierID;
    }
    public function setSupplierID($SupplierID)
    {
        $this->SupplierID = $SupplierID;
    }
    public function getSupplierName()
    {
        return $this->SupplierName;
    }
    public function setSupplierName($SupplierName)
    {
        $this->SupplierName = $SupplierName;
    }
    public function getAddress()
    {
        return $this->Address;
    }
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }
    public function getPhone()
    {
        return $this->Phone;
    }
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }
    public function getEmail()
    {
        return $this->Phone;
    }
    public function setEmail($Email)
    {
        $this->Phone = $Phone;
    }
}
?>