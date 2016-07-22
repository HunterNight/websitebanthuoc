<?php
include_once(PATH_ROOT . "/admin/models/index_model.php");
class index_controller
{
    public $model;

    /**
     * User_Controller constructor.
     */
    public function __construct()
    {
        $this->model = new index_model();
    }
   public function IndexAction()
   {
       require(PATH_APPLICATION."/views/login.php");
       if(isset($_POST['submit']))
       {
           $username = $_POST['username'];
           $password = $_POST['password'];
           $result=$this->model->check($username,$password);
           if($result)
           {
//                require(PATH_APPLICATION. "/views/index.php");
                    $_SESSION['login_user'] = $username;
                    $_SESSION['permission'] = 1;

                    header("Location: admin.php?c=index&a=dashboard");
//                    echo "Ban la: ". $_SESSION['login_user'];


           }
           else
           {
               print "<div class='uk-alert uk-alert-danger' data-uk-alert='' style='text-align: center;width: 25%;margin: auto;'>Đăng nhập thất bại</div>";
               
           }

       }

   }
    public function dashboardAction()
    {
        require(PATH_APPLICATION ."/views/index.php");
    }
    public  function logoutAction()
    {
        require(PATH_APPLICATION ."/views/logout.php");
    }

}

?>