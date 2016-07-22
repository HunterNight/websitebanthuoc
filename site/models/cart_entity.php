<?php
class cart_entity
{
    public $ProductName;
    public $ProductId;
    public $SupplierID;
    public $CategoryID;
    public $Unit;
    public $UnitPrice;
    public $Quantity;
    public $SaleOff;
    public $Picture;
    public $Description;
    public function __construct($ProductId, $ProductName, $SupplierID, $CategoryID, $Unit, $UnitPrice,$Quantity,$SaleOff,$Picture,$Description)
    {
        $this->ProductName=$ProductName;
        $this->ProductId=$ProductId;
        $this->SupplierID=$SupplierID;
        $this->CategoryID=$CategoryID;
        $this->Unit=$Unit;
        $this->UnitPrice=$UnitPrice;
        $this->Quantity=$Quantity;
        $this->SaleOff=$SaleOff;
        $this->Picture=$Picture;
        $this->Description=$Description;
    }
    public function getCount()
    {
        return count($this->ProductId);
    }
}
?>