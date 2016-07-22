<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 2/03/16
 * Time: 11:23 AM
 */
include_once(PATH_ROOT . "/admin/models/about_model.php");
class about_controller

{
    public function __construct()
    {
        $this->model = new about_model();
    }
    public function getAction()
    {
        $arrayAbout = $this->model->get();
//        require(PATH_APPLICATION . "/views/getcategory.php");
        print_r($arrayAbout);
    }
    public function editAction()
    {
        $id=1;
        $aboutSelect=$this->model->getbyid($id);
        require_once(PATH_APPLICATION . "/views/about.php");
        if (isset($_POST['Edit']))
        {
//            $CategoryName=$_POST['CategoryName'];
            $content=$_POST['content'];
            $about_Entity = new About_Entity($id,$content);
            $result = $this->model->edit($about_Entity);
            if ($result)
            {
                echo "Hihi";
            }
        }
    }
}

?>