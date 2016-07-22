<?php
include_once(PATH_ROOT . "/site/models/cart_entity.php");
class cart_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        if(isset($_SESSION["Giohang"]))
        {
            $ProductId=array();
            $ProductName=array();
            $SupplierID=array();
            $CategoryID=array();
            $Unit=array();
            $UnitPrice=array();
            $Quantity=array();
            $SaleOff=array();
            $Picture=array();
            $Description=array();
            while (list($key, $value) = each($_SESSION["Giohang"]))
            {
                $infoMathangi = explode(";",$value);
                $ProductId[]= $infoMathangi[0];
                $Quantity[]= $infoMathangi[1];
                $query = "SELECT * FROM Product WHERE ProductID=".$infoMathangi[0];
                $result = $this->temp->DB_Query($query);
                $data=$this->temp->DB_Fetch($result);
                $ProductName[]=$data['ProductName'];
                $SupplierID[]=$data['SupplierID'];
                $CategoryID[]=$data['CategoryID'];
                $Unit[]=$data['Unit'];
                $UnitPrice[]=$data['UnitPrice'];
                $Description[]=$data['Description'];
                $SaleOff[]=$data['SaleOff'];
                $Picture[]=$data['Picture'];
            }
            $cart=new cart_entity($ProductId,$ProductName,$SupplierID,$CategoryID,$Unit,$UnitPrice,$Quantity,$SaleOff,$Picture,$Description);
            return $cart;
        }
        return "";
    }
    public function getTotalPrice()
    {
        $totalprice=0;
        if(isset($_SESSION["Giohang"]))
        {
            reset($_SESSION["Giohang"]);
            while (list($key, $value) = each($_SESSION["Giohang"]))
            {
                $infoMathangi = explode(";",$value);
                $ProductId[]= $infoMathangi[0];
                $Quantity[]= $infoMathangi[1];
                $query = "SELECT UnitPrice,SaleOff FROM Product WHERE ProductID=".$infoMathangi[0];
                $result = $this->temp->DB_Query($query);
                $data=$this->temp->DB_Fetch($result);
                $UnitPrice=$data['UnitPrice'];
                $SaleOff=$data['SaleOff'];
                $totalprice=$totalprice+($infoMathangi[1]*(1-$SaleOff)*$UnitPrice);
            }
        }
        return $totalprice;
    }

}

?>