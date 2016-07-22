<?php
include_once(PATH_ROOT . "/site/models/category_model.php");
class category_controller
{
    public $model;
    public function __construct()
    {
        $this->model = new category_model();
    }

    public function indexAction()
    {
        echo "Category site pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {
        $arrayCategory = $this->model->get();
        require(PATH_APPLICATION . "/views/getcategory.php");
    }
}

?>