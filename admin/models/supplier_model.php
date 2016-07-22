<?php
include_once(PATH_ROOT . "/admin/models/supplier_entity.php");

class supplier_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        $query = "SELECT * FROM Suppliers";
        $result = $this->temp->DB_Query($query);
        $arraySupplier = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $supplier = new supplier_entity(
                $row['SupplierID'], $row['SupplierName'], $row['Address'], $row['Phone'], $row['Email']);
            array_push($arraySupplier, $supplier);
        }
        return $arraySupplier;
    }
    public function insert(supplier_entity $supplier_entity)
    {
        $query = "INSERT INTO Suppliers(SupplierID,SupplierName,Address,Phone,Email)
        VALUES ('$supplier_entity->SupplierID',
                '$supplier_entity->SupplierName',
                '$supplier_entity->Address',
                '$supplier_entity->Phone',
                '$supplier_entity->Email')";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function edit(supplier_entity $supplier_entity)
    {
        $query = "UPDATE Suppliers SET  SupplierName='$supplier_entity->SupplierName',
                                        Address='$supplier_entity->Address',
                                        Phone='$supplier_entity->Phone',
                                        Email='$supplier_entity->Email'
                                WHERE   SupplierID=".$supplier_entity->SupplierID;
        $result=$this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function delete($id)
    {
        $query="DELETE FROM Suppliers WHERE SupplierID=".$id;
        $result =$this->temp->DB_Query($query);
        if($result){
            return 1;
        }
        else
            return 0;
    }
    public function getbyid($id)
    {
        $sql = "SELECT * FROM Suppliers WHERE SupplierID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $data=$this->temp->DB_Fetch($query);
        $supplier=new supplier_entity($data['SupplierID'],$data['SupplierName'],$data['Address'],$data['Phone'],$data['Email']);
        return $supplier;
    }
    public function getIdList()
    {
        $query = "SELECT SupplierID, SupplierName FROM Suppliers";
        $result = $this->temp->DB_Query($query);
        $arraySelect = array();
        while ($row = $this->temp->DB_Fetch($result))
        {
            $arrayId_Name=array('SupplierID'=>$row['SupplierID'],'SupplierName'=>$row['SupplierName']);
            array_push($arraySelect, $arrayId_Name);
        }
        return $arraySelect;
    }
    public function getTopSupplier($top)
    {
        $query = "SELECT S.SupplierID, S.SupplierName, SUM( OD.Quantity ) AS TongSanPham
                FROM (OrderDetails OD JOIN Product P ON ( OD.ProductID = P.ProductID ))
                JOIN Suppliers S ON ( P.SupplierID = S.SupplierID )
                GROUP BY S.SupplierID
                ORDER BY TongSanPham DESC
                LIMIT ".$top;
        $result = $this->temp->DB_Query($query);
        $arraySelect = array();
        while ($row = $this->temp->DB_Fetch($result))
        {
            $supplier=array('SupplierID'=>$row['SupplierID'],'SupplierName'=>$row['SupplierName'],'TongSanPham'=>$row['TongSanPham']);
            array_push($arraySelect, $supplier);
        }
        return $arraySelect;
    }
}

?>