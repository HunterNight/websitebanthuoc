<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 7/01/16
 * Time: 11:21 AM
 */
include_once(PATH_ROOT . "/admin/models/user_model.php");

class user_controller
{
    public $model;

    /**
     * User_Controller constructor.
     */
    public function __construct()
    {
        $this->model = new user_model();

    }
    public function loginAction()
    {
        require(PATH_APPLICATION . "/views/index.php");
    }
    public function adminAction()
    {
        require(PATH_APPLICATION ."/views/index.php");
    }
    public function indexAction()
    {
        include_once(PATH_APPLICATION . "/views/login.php");;
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result=$this->model->check($username,$password);
            if($result)
            {
//                require(PATH_APPLICATION. "/views/index.php");
                $_SESSION['login_user'] = $username;
                if($_SESSION['login_user'] == "admin")
                {
//                    header("Location: /mvc/admin/views/header.php");
//                    echo "Ban la: ". $_SESSION['login_user'];
                }
            }
            else
            {
                echo "Login Fail";
            }

        }
    }
    public function getuserAction()
    {
        $arrayUser = $this->model->get();
        require(PATH_APPLICATION . "/views/getuser.php");
    }

    public function addAction()
    {
        include_once(PATH_APPLICATION . "/views/adduser.php");
        if (isset($_POST['Add'])) {
            $id = "";
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $fullname= $_POST['fullname'];
            $permission = $_POST['permission'];
            $user_Entity = new user_entity($id,$name,$birthday,$address,$phone,$password,$email,$fullname,$permission);

            $result = $this->model->insert($user_Entity);

            if ($result) {
                header("Location: admin.php?c=user&a=getuser");

            }
            else {
                echo "Loi gi do";
            }
        }
    }
    public function getidAction()
    {
        $id = $_GET['id'];
        $users = $this->model->getUserById($id);
        require(PATH_APPLICATION . "/views/user.php");
    }

    public function editAction()
    {

        $id = $_GET['id'];
        $users = $this->model->getUserById($id);
        require(PATH_APPLICATION . "/views/edituser.php");
        if (isset($_POST['Edit'])) {
            $id = $_GET['id'];
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $fullname= $_POST['fullname'];
            $permission = $_POST['permission'];
            $user_Entity = new user_entity($id, $name, $birthday, $address, $phone, $password, $email,$fullname,$permission);

            $result = $this->model->updateUser($user_Entity);

            if ($result) {
                header("Location: admin.php?c=user&a=getuser");
            }
        }
    }
    public  function  deleteuserAction()
    {
        $id=$_GET['id'];
        $result = $this->model->delete($id);
        if ($result) {
            header("Location: admin.php?c=user&a=getuser");        }
    }
    public function topuserAction()
    {

        $arrayUser=$this->model->getTopUser(5);
        require(PATH_APPLICATION . "/views/gettopuser.php");
    }

}

?>