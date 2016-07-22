<?php
include_once(PATH_ROOT . "/site/models/product_entity.php");
class Product_Model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }

    public function get()
    {
       
        $query = "SELECT * FROM Product";
        $result = $this->temp->DB_Query($query);
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
    public function getPage($page)
    {
        //Set thong so chung
       
        $myStrSQL = "SELECT COUNT(*) AS Count FROM Product";
        $result = $this->temp->DB_Query($myStrSQL);
        $rowCount = $this->temp->DB_Fetch($result);
        $numberRecordPerPage    = 5;
        $totalRecord            = $rowCount['Count'];
        $numberPage             = ceil($totalRecord / $numberRecordPerPage);
        //Set thong so cho page can view
        $curPage                = $page;
        $startRecord            = ($curPage-1)*$numberRecordPerPage;
        //Truy van de lay du lieu tu cac thong so da set
        $myStrSQL = "SELECT * FROM Product LIMIT $startRecord,$numberRecordPerPage";
        $result=$this->temp->DB_Query($myStrSQL);
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
    public function editquantity($ProductID,$Quantity)
    {
       
        $query = "UPDATE Product SET Quantity=$Quantity
                                WHERE ProductID=".$ProductID;
        $result=$this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function getProductName($id)
    {
        $sql = "SELECT ProductName FROM Product WHERE ProductID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $ProductName=mysqli_fetch_assoc($query)['ProductName'];
        return $ProductName;
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
    public function relateProduct($i, $cateid)
    {
       
        $sql = "SELECT * FROM Product WHERE CategoryID =$cateid ORDER BY RAND() LIMIT $i";
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query)) {
            $product = new product_entity(
                $row['ProductID'], $row['ProductName'], $row['SupplierID'], $row['CategoryID'],
                $row['Unit'],$row['UnitPrice'],$row['Quantity'],$row['SaleOff'],
                $row['Picture'],$row['Description']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function getTopSeller($top)
    {
       
        $sql = "SELECT OD.ProductID,OD.Price, SUM(OD.Quantity) AS TongSanPham, P.ProductName, P.Picture,P.SaleOff
                FROM OrderDetails OD JOIN Product P ON (OD.ProductID=P.ProductID)
                GROUP BY ProductID
                ORDER BY TongSanPham ASC
                LIMIT ".$top;
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query))
        {
            $product=array('ProductID'=>$row['ProductID'],'ProductName'=>$row['ProductName'],'Picture'=>$row['Picture'],'Price'=>$row['Price'],'SaleOff'=>$row['SaleOff']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function getNewest($top)
    {
       
        $sql = "SELECT ProductID, ProductName, Picture,UnitPrice,SaleOff
                FROM Product
                ORDER BY ProductID DESC
                LIMIT ".$top;
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query))
        {
            $product=array('ProductID'=>$row['ProductID'],'ProductName'=>$row['ProductName'],'Picture'=>$row['Picture'],'UnitPrice'=>$row['UnitPrice'],'SaleOff'=>$row['SaleOff']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function getTopSaleOff($top)
    {
       
        $sql = "SELECT ProductID, ProductName, SaleOff, Picture,UnitPrice
                FROM Product
                ORDER BY SaleOff DESC
                LIMIT ".$top;
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query))
        {
            $product=array('ProductID'=>$row['ProductID'],'ProductName'=>$row['ProductName'],'Picture'=>$row['Picture'],'UnitPrice'=>$row['UnitPrice'],'SaleOff'=>$row['SaleOff']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function getRandom($top)
    {
       
        $sql = "SELECT ProductID, ProductName, Picture, UnitPrice, SaleOff
                FROM Product
                ORDER BY RAND()
                LIMIT ".$top;
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query))
        {
            $product=array('ProductID'=>$row['ProductID'],'ProductName'=>$row['ProductName'],'Picture'=>$row['Picture'],'UnitPrice'=>$row['UnitPrice'],'SaleOff'=>$row['SaleOff']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }
    public function getbycate($cateid)
    {
       
        $query = "SELECT * FROM Product WHERE CategoryID=".$cateid;
        $result = $this->temp->DB_Query( $query);
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

    public function search($keyword)
    {
       
        $query = "SELECT *
                FROM Product
                WHERE (LCASE( ProductName ) LIKE '%".$keyword."%')
                OR (LCASE( Description ) LIKE '%".$keyword."%')";
        $result = $this->temp->DB_Query( $query);
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
}

?>