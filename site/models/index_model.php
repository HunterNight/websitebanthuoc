<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 9/02/16
 * Time: 9:31 AM
 */
include_once(PATH_ROOT . "/site/models/index_entity.php");



class index_model
{
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function getUserById($id)
    {
        $query = "SELECT * FROM Users WHERE UserName = '$id'";
        $result = $this->temp->DB_Query($query);
        $user = false;
        while ($row = $this->temp->DB_Fetch($result)) {
            $user = new index_entity($row['UserID'],
                $row['UserName'], $row['DOB'], $row['Address'], $row['Phone'],
                $row['PassWord'], $row['Email'],$row['FullName'],$row['permission']
            );

        }
        return $user;
    }


    public function check($username, $password)
    {
        $query = "SELECT * FROM Users WHERE username ='" . $username . "' AND password ='" . $password . "' ";
        $result = $this->temp->DB_Query($query);
        if (mysqli_num_rows($result) != null) {
            return 1;
        } else {
            return 0;
        }
    }

    public function permission($username)
    {
        $query = "SELECT * FROM Users WHERE username ='" . $username . "' ";
        $result = $this->temp->DB_Query($query);
        $permission=mysqli_fetch_assoc($result)['permission'];
        return $permission;
    }
    public function insert(index_entity $user_Entity)
    {

        $query = "SELECT * FROM Users WHERE UserName = '$user_Entity->name'";
        $result = $this->temp->DB_Query($query);
        if (mysqli_num_rows($result) != "") {
            return 0;
        }
        else
        {
            $query = "INSERT INTO Users(UserName,DOB,Address,Phone,PassWord,Email,FullName,permission) VALUES
('$user_Entity->name',('$user_Entity->birthday'),('$user_Entity->address'),('$user_Entity->phone'),
('$user_Entity->password'),('$user_Entity->email'),('$user_Entity->fullname'),('$user_Entity->permission'))";
            $result = $this->temp->DB_Query($query);
            if ($result) {
                return 1;
            } else
                return 0;
        }

    }
    public function relateProduct($i, $cateid)
    {
        $sql = "SELECT * FROM Product WHERE CategoryID =$cateid ORDER BY RAND() LIMIT $i";
        $query=$this->temp->DB_Query($sql);
        $arrayProduct = array();
        while ($row = $this->temp->DB_Fetch($query)) {
            $product = new Product_Entity(
                $row['ProductID'], $row['ProductName'], $row['SupplierID'], $row['CategoryID'],
                $row['Unit'],$row['UnitPrice'],$row['Quantity'],$row['SaleOff'],
                $row['Picture'],$row['Description']);
            array_push($arrayProduct, $product);
        }
        return $arrayProduct;
    }

    public function updateUser(index_entity $user_Entity)
    {
        $query = "UPDATE Users SET UserName = '$user_Entity->name', DOB = '$user_Entity->birthday',
      Address = '$user_Entity->address', Phone = '$user_Entity->phone', PassWord = '$user_Entity->password',
       Email = '$user_Entity->email',FullName = '$user_Entity->fullname', permission = '$user_Entity->permission' WHERE UserName = '$user_Entity->name'";
        $result = $this->temp->DB_Query($query);
        if ($result) {
            return 1;
        } else
            return 0;
    }

    public function getHistory($id_user)
    {
        $sql="SELECT * FROM Orders WHERE UserID=".$id_user;
        $query=$this->temp->DB_Query($sql);
        $arrayOrder = array();
        while ($row = $this->temp->DB_Fetch($query)){
            $order=array('OrderID'=>$row['OrderID'],'ShipName'=>$row['ShipName'],'ShipAddress'=>$row['ShipAddress'],'OrderDate'=>$row['OrderDate']);
            $sql2="SELECT * FROM OrderDetails WHERE OrderID=".$row['OrderID'];
            $query2=$this->temp->DB_Query($sql2);
            $arrayOrderDetails = array();
            while ($row2 = $this->temp->DB_Fetch($query2)){
                $Orderdetails=array('ProductID'=>$row2['ProductID'],'Quantity'=>$row2['Quantity'],'Price'=>$row2['Price']);
                array_push($arrayOrderDetails, $Orderdetails);
            }
            $Order=array('Order'=>$order,'OrderDetail'=>$arrayOrderDetails);
            array_push($arrayOrder, $Order);
        }
        return $arrayOrder;
    }



}

?>