<?php
class orders_entity
{
    public $OrderID;
    public $ProductID;
    public $Quantity;
    public $Price;
    public function __construct($OrderID,$ProductID,$Quantity,$Price)
    {
        $this->OrderID=$OrderID;
        $this->ProductID=$ProductID;
        $this->Quantity=$Quantity;
        $this->Price=$Price;
    }
}
?>