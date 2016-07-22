<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 6/01/16
 * Time: 11:33 PM
 */
class index_entity
{
    var $id;
    var $name;
    var $password;
    var $email;
    var $birthday;
    var $address;
    var $phone;
    var $fullname;
    var $permission;
    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param mixed $permission
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }


    /**
     * User_Entity constructor.
     * @param $name
     * @param $password
     * @param $email
     * @param $birthday
     * @param $address
     * @param $phone
     */
    public function __construct($id,$name,$birthday,$address,$phone,$password,$email,$fullname,$permission)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->phone = $phone;
        $this->password = $password;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->permission = $permission;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}
?>