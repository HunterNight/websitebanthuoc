<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 6/01/16
 * Time: 11:34 PM
 */
include_once(PATH_ROOT . "/admin/models/user_entity.php");



class user_model
{
    private $temp;
    public function __construct()
    {
        $this->temp=new dbcore();
    }
    public function get()
    {
        $query = "SELECT * FROM Users";
        $result =$this->temp->DB_Query($query);
        $arrayUser = array();
        while ($row = $this->temp->DB_Fetch($result)) {
            $user = new user_entity($row['UserID'],
                $row['UserName'], $row['DOB'], $row['Address'], $row['Phone'],
                $row['PassWord'], $row['Email'],$row['FullName'],$row['permission']
            );
            array_push($arrayUser, $user);

        }
        return $arrayUser;


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

    public function insert(user_entity $user_entity)
    {
        $query = "INSERT INTO Users(UserName,DOB,Address,Phone,PassWord,Email,FullName,permission) VALUES
('$user_entity->name',('$user_entity->birthday'),('$user_entity->address'),('$user_entity->phone'),
('$user_entity->password'),('$user_entity->email'),('$user_entity->fullname'),('$user_entity->permission'))";
        $result = $this->temp->DB_Query($query);
        if ($result) {
            return 1;
        } else
            return 0;
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM Users WHERE UserID = '$id'";
        $result = $this->temp->DB_Query($query);
        $user = false;
        while ($row = $this->temp->DB_Fetch($result)) {
            $user = new user_entity($row['UserID'],
                $row['UserName'], $row['DOB'], $row['Address'], $row['Phone'],
                $row['PassWord'], $row['Email'],$row['FullName'],$row['permission']
            );

        }
        return $user;
    }

    public function updateUser(user_entity $user_entity)
    {
        $query = "UPDATE Users SET UserName = '$user_entity->name', DOB = '$user_entity->birthday',
      Address = '$user_entity->address', Phone = '$user_entity->phone', PassWord = '$user_entity->password',
       Email = '$user_entity->email',FullName = '$user_entity->fullname', permission = '$user_entity->permission' WHERE UserID = '$user_entity->id'";
        $result = $this->temp->DB_Query($query);
        if ($result) {
            return 1;
        } else
            return 0;
    }
    public function delete($id)
    {
        $query = "DELETE FROM Users WHERE UserID = '".$id."' ";
        $result = $this->temp->DB_Query($query);
        if($result)
        {
            return 1;
        }
        return 0;
    }
    public function getUserName($id)
    {
        $sql = "SELECT UserName FROM Users WHERE UserID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $UserName=$this->temp->DB_Fetch($query)['UserName'];
        return $UserName;
    }

    public function getTelephoneNumber($id)
    {
        $sql = "SELECT Phone FROM Users WHERE UserID='".$id."'";
        $query=$this->temp->DB_Query($sql);
        $telephoneNumber=$this->temp->DB_Fetch($query)['Phone'];
        return $telephoneNumber;
    }
    public function getTopUser($top)
    {
        $query = "SELECT O.UserID, SUM( OD.Quantity ) AS TongSanPham
                FROM OrderDetails OD
                JOIN Orders O ON ( OD.OrderID = O.OrderID )
                GROUP BY O.UserID
                ORDER BY TongSanPham DESC
                LIMIT ".$top;
        $result = $this->temp->DB_Query($query);
        $arraySelect = array();
        while ($row = $this->temp->DB_Fetch($result))
        {
            $user=array('UserID'=>$row['UserID'],'TongSanPham'=>$row['TongSanPham']);
            array_push($arraySelect, $user);
        }
        return $arraySelect;
    }

}

?>