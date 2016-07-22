<?php
include_once(PATH_ROOT . "/admin/models/category_model.php");
class category_controller
{
    public $model;
    public function __construct()
    {
        $this->model = new category_model();
    }

    public function indexAction()
    {
        echo "Category pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {
        $arrayCategory = $this->model->get();
        require(PATH_APPLICATION . "/views/getcategory.php");
    }

    public function insertAction()
    {
        require_once(PATH_APPLICATION . "/views/addcategory.php");
        if (isset($_POST['Add'])) {
            //$CategoryID=$_POST['CategoryID'];
            $CategoryName=$_POST['CategoryName'];
            $Description=$_POST['Description'];
            $category_Entity = new category_entity ("",$CategoryName,$Description);
            $result = $this->model->insert($category_Entity);
            if ($result)
            {
                header("Location: admin.php?c=category&a=get");
            }
        }
    }
    public function editAction()
    {
        $id=$_GET['id'];
        $categorySelect=$this->model->getbyid($id);
        require_once(PATH_APPLICATION . "/views/editcategory.php");
        if (isset($_POST['Edit'])) 
        {
            $CategoryName=$_POST['CategoryName'];
            $Description=$_POST['Description'];
            $category_Entity = new category_entity($id,$CategoryName,$Description);
            $result = $this->model->edit($category_Entity);
            if ($result)
            {
                header("Location: admin.php?c=category&a=get");
            }
        }
    }
    public function deleteAction()
    {
        $id=$_GET['id'];
        $result = $this->model->delete($id);
        if ($result)
        {
            header("Location: admin.php?c=category&a=get");
        }
    }

    public function topcategoryAction()
    {
        $arrayCategory=$this->model->getTopCategory(10);
        require(PATH_APPLICATION . "/views/gettopCategory.php");
    }
}

?>