<?php
include_once(PATH_ROOT . "/site/models/index_model.php");
include_once(PATH_ROOT . "/admin/models/about_model.php");

class index_controller
{
    public $model, $about;

    /**
     * User_Controller constructor.
     */
    public function __construct()
    {

        $this->model = new index_model();
    }

    public function IndexAction()
    {
        require(PATH_APPLICATION . "/views/index.php");
    }

    public function logoutAction()
    {
        require(PATH_APPLICATION . "/views/logout.php");
    }

    public function profileAction()
    {
        $users = $this->model->getUserById($_SESSION['login_user']);
        require(PATH_APPLICATION . "/views/profile.php");
    }


    public function loginAction()
    {
        {
            if (isset($_SESSION['login_user'])) {
                header("Location: index.php");
            }
        }
        require(PATH_APPLICATION . "/views/login.php");
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $this->model->check($username, $password);
            if ($result) {
//                require(PATH_APPLICATION. "/views/index.php");
                $_SESSION['login_user'] = $username;
                if($this->model->permission($username)==1)
                {
                    $_SESSION['permission'] = 1;
                }
                else
                {
                    $_SESSION['permission'] =0;
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                print "<div class='uk-alert uk-alert-danger' data-uk-alert='' style='text-align: center;width: 25%;margin: auto;'>Đăng nhập thất bại</div>";
            }

        }
        if (isset($_POST['register'])) {
            $id = "";
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $fullname = $_POST['fullname'];
            $permission = 0;
            $user_Entity = new Index_Entity($id, $name, $birthday, $address, $phone, $password, $email, $fullname, $permission);

            $result = $this->model->insert($user_Entity);

            if ($result) {
//                header("Location: index.php");
                print "<div class='uk-alert uk-alert-success' data-uk-alert='' style='text-align: center;width: 25%;margin: auto;'>Đăng kí thành công - Mời bạn đăng nhập  </div>";

            } else {
                print "<div class='uk-alert uk-alert-danger' data-uk-alert='' style='text-align: center;width: 25%;margin: auto;'>User đã tồn tại trên hệ thống - mời bạn chọn Username khác</div>";
            }
        }


    }


    public function registerAction()
    {
        require(PATH_APPLICATION . "/views/login.php");
        if (isset($_POST['register'])) {
            $id = "";
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $fullname = $_POST['fullname'];
            $permission = 0;
            $user_Entity = new Index_Entity($id, $name, $birthday, $address, $phone, $password, $email, $fullname, $permission);

            $result = $this->model->insert($user_Entity);

            if ($result) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }

        }

    }

    public function editAction()
    {

        $users = $this->model->getUserById($_SESSION['login_user']);
        require(PATH_APPLICATION . "/views/editprofile.php");
        if (isset($_POST['Edit'])) {
            $id = "";
            $name = $_SESSION['login_user'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $fullname = $_POST['fullname'];
            $permission = 0;
            $user_Entity = new Index_Entity($id, $name, $birthday, $address, $phone, $password, $email, $fullname, $permission);
            $result = $this->model->updateUser($user_Entity);
            if ($result) {
                header("Location: index.php?c=index&a=profile");
            }
        }
    }

    public function aboutAction()
    {
        $this->about = new about_model();
        $about1 = $this->about->getbyid(1);
        require(PATH_APPLICATION . "/views/about.php");
    }

    public function contactAction()
    {
        require(PATH_APPLICATION . "/views/contact.php");
    }

    public function historyAction()
    {
        $user = $this->model->getUserById($_SESSION['login_user']);
        $listOrder = $this->model->getHistory($user->id);
        require(PATH_APPLICATION. "/views/history.php");
    }
}

?>