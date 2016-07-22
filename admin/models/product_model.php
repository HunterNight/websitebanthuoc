<?php
include_once(PATH_ROOT . "/admin/models/product_entity.php");

class product_model
{

    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        $query = "SELECT * FROM Product";
        $result =$this->temp->DB_Query($query);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $product = new product_entity(
                $row['ProductID'], $row['ProductName'], $row['SupplierID'], $row['CategoryID'],
                $row['Unit'],$row['UnitPrice'],$row['Quantity'],$row['SaleOff'],
                $row['Picture'],$row['Description']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function insert(product_entity $product_entity)
    {
        $query = "INSERT INTO Product(ProductId,ProductName,SupplierID,CategoryID,Unit,UnitPrice,Quantity,SaleOff,Picture,Description)
        VALUES ('$product_entity->ProductId',
                '$product_entity->ProductName',
                '$product_entity->SupplierID',
                '$product_entity->CategoryID',
                '$product_entity->Unit',
                '$product_entity->UnitPrice',
                '$product_entity->Quantity',
                '$product_entity->SaleOff',
                '$product_entity->Picture',
                '$product_entity->Description')";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function edit(product_entity $product_entity)
    {
        $query = "UPDATE Product SET    ProductName='$product_entity->ProductName',
                                        SupplierID='$product_entity->SupplierID',
                                        CategoryID='$product_entity->CategoryID',
                                        Unit='$product_entity->Unit',
                                        UnitPrice='$product_entity->UnitPrice',
                                        Quantity='$product_entity->Quantity',
                                        SaleOff='$product_entity->SaleOff',
                                        Picture='$product_entity->Picture',
                                        Description='$product_entity->Description'
                                WHERE ProductID=".$product_entity->ProductId;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function delete($id)
    {
        $query="DELETE FROM Product WHERE ProductID=".$id;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        }
        else
            return 0;
    }
    public function getbyid($id)
    {
        $sql = "SELECT * FROM Product WHERE ProductID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $data=$this->temp->DB_Fetch($query);
        $product=new product_entity($data['ProductID'],$data['ProductName'],$data['SupplierID'],$data['CategoryID'],$data['Unit'],$data['UnitPrice']
                            ,$data['Quantity'],$data['SaleOff'],$data['Picture'],$data['Description']);
        return $product;
    }

    public function getProductName($id)
    {
        $sql = "SELECT ProductName FROM Product WHERE ProductID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $ProductName=mysqli_fetch_assoc($query)['ProductName'];
        return $ProductName;
    }
    public function getCateName($id)
    {
        //Get CategoryName
        $sql = "SELECT CategoriesName FROM Categories WHERE CategoriesID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $CateName=$this->temp->DB_Fetch($query)['CategoriesName'];
        return $CateName;
    }

    public function getSupName($id)
    {
        //Get SupplierName
        $sql = "SELECT SupplierName FROM Suppliers WHERE SupplierID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $SupName=$this->temp->DB_Fetch($query)['SupplierName'];
        return $SupName;
    }

    public function getTopSeller($top)
    {
        $sql = "SELECT OD.ProductID , SUM(OD.Quantity) AS TongSanPham, P.ProductName, P.Picture
                FROM OrderDetails OD JOIN Product P ON (OD.ProductID=P.ProductID)
                GROUP BY ProductID
                ORDER BY TongSanPham DESC
                LIMIT ".$top;
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query))
        {
            $product=array('ProductID'=>$row['ProductID'],'ProductName'=>$row['ProductName'],'Picture'=>$row['Picture'],'TongSanPham'=>$row['TongSanPham']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }

}

?>