<?php
include_once(PATH_ROOT . "/admin/models/category_entity.php");

class category_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        $query = "SELECT * FROM Categories";
        $result = $this->temp->DB_Query($query);
        $arrayCategory = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $category = new category_entity(
                $row['CategoriesID'], $row['CategoriesName'], $row['Description']);
            array_push($arrayCategory, $category);
        }
        return $arrayCategory;
    }

    public function insert(category_entity $category_entity)
    {

        $query = "INSERT INTO Categories(CategoriesID,CategoriesName,Description)
        VALUES ('$category_entity->CategoryID',
                '$category_entity->CategoryName',
                '$category_entity->Description')";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function edit(category_entity $category_entity)
    {
        $query = "UPDATE Categories SET    CategoriesName='$category_entity->CategoryName',
                                        Description='$category_entity->Description'
                                WHERE   CategoriesID=".$category_entity->CategoryID;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function delete($id)
    {
        $query="DELETE FROM Categories WHERE CategoriesID=".$id;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        }
        else
            return 0;
    }
    public function getbyid($id)
    {
        $query = "SELECT * FROM Categories WHERE CategoriesID='".$id."'";
        $result = $this->temp->DB_Query($query);
        $data=$this->temp->DB_Fetch($result);
        $category=new category_entity($data['CategoriesID'],$data['CategoriesName'],$data['Description']);
        return $category;
    }
    public function getIdList()
    {
        $query = "SELECT CategoriesID, CategoriesName FROM Categories";
        $result = $this->temp->DB_Query($query);
        $arraySelect = array();
        while ($row = $this->temp->DB_Fetch($result))
        {
            $arrayId_Name=array('CategoriesID'=>$row['CategoriesID'],'CategoriesName'=>$row['CategoriesName']);
            array_push($arraySelect, $arrayId_Name);
        }
        return $arraySelect;
    }

    public function getTopCategory($top)
    {
        $query = "SELECT C.CategoriesID,C.CategoriesName, SUM(OD.Quantity) AS TongSanPham
                FROM (OrderDetails OD JOIN Product P ON (OD.ProductID=P.ProductID)) JOIN Categories C ON (P.CategoryID=C.CategoriesID)
                GROUP BY C.CategoriesID
                ORDER BY TongSanPham DESC
                LIMIT ".$top;
        $result = $this->temp->DB_Query($query);
        $arraySelect = array();
        while ($row = $this->temp->DB_Fetch($result))
        {
            $category=array('CategoryID'=>$row['CategoriesID'],'CategoryName'=>$row['CategoriesName'],'TongSanPham'=>$row['TongSanPham']);
            array_push($arraySelect, $category);
        }
        return $arraySelect;
    }
}

?>