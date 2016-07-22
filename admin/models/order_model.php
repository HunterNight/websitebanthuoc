<?php
include_once(PATH_ROOT . "/admin/models/order_entity.php");
class order_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {

        $query = "SELECT * FROM Orders";
        $result = $this->temp->DB_Query($query);
        $arrayOrder = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $order = new order_entity(
                $row['OrderID'], $row['UserID'], $row['OrderDate'], $row['ShipName'], $row['ShipAddress']);
            array_push($arrayOrder, $order);
        }
        return $arrayOrder;
    }
    public function insert(order_entity $order_entity)
    {
        $query = "INSERT INTO Orders(OrderID,UserID,OrderDate,ShipName,ShipAddress)
        VALUES ('$order_entity->OrderID',
                '$order_entity->UserID',
                '$order_entity->OrderDate',
                '$order_entity->ShipName',
                '$order_entity->ShipAddress')";
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function edit(order_entity $order_entity)
    {
        $query = "UPDATE Orders SET  UserID='$order_entity->UserID',
                                        OrderDate='$order_entity->OrderDate',
                                        ShipName='$order_entity->ShipName',
                                        ShipAddress='$order_entity->ShipAddress'
                                WHERE   OrderID=".$order_entity->OrderID;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        } else
            return 0;
    }
    public function delete($id)
    {
        $query="DELETE FROM Orders WHERE OrderID=".$id;
        $result = $this->temp->DB_Query($query);
        if($result){
            return 1;
        }
        else
            return 0;
    }
    public function getbyid($id)
    {
        $sql = "SELECT * FROM Orders WHERE OrderID='".$id."'";
        $query = $this->temp->DB_Query($sql);
        $data=$this->temp->DB_Fetch($query);
        $order=new order_entity($data['OrderID'],$data['UserID'],$data['OrderDate'],$data['ShipName'],$data['ShipAddress']);
        return $order;
    }
    public function getdetail($id)
    {
        $sql = "SELECT * FROM Orders AS O
                JOIN OrderDetails AS OD ON ( O.OrderID = OD.OrderID )
                WHERE O.OrderID =".$id;
        $DetailOrder = array();
        $query=$this->temp->DB_Query($sql);
        while ($row = $this->temp->DB_Fetch($query))
        {
            $DetailProduct=array('ProductID'=>$row['ProductID'],'Quantity'=>$row['Quantity'],'Price'=>$row['Price'],'ShipName'=>$row['ShipName'],'ShipAddress'=>$row['ShipAddress'],'OrderDate'=>$row['OrderDate'],'UserID'=>$row['UserID']);
            array_push($DetailOrder, $DetailProduct);
        }
        return $DetailOrder;
    }
    public function gettotalprice($id)
    {
        $sql = "SELECT SUM( Price ) AS 'TongHoaDon'
                FROM OrderDetails
                WHERE OrderID =".$id;
        $query=$this->temp->DB_Query($sql);
        $row = $this->temp->DB_Fetch($query);
        return $row['TongHoaDon'];
    }
}
?>