<?php
include_once(PATH_ROOT . "/admin/models/order_model.php");
class order_controller
{
    public $model;
    public function __construct()
    {
        $this->model = new order_model();
    }

    public function indexAction()
    {
        echo "Order pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {
        $arrayOrder = $this->model->get();
        require(PATH_APPLICATION . "/views/getorder.php");
    }

    public function insertAction()
    {
        require_once(PATH_APPLICATION . "/views/addorder.php");
        if (isset($_POST['Add'])) {
            $UserID=$_POST['UserID'];
           	$OrderDate=$_POST['OrderDate'];
           	$ShipName=$_POST['ShipName'];
           	$ShipAddress=$_POST['ShipAddress'];
            $order_Entity = new order_entity ("",$UserID,$OrderDate,$ShipName,$ShipAddress);
            $result = $this->model->insert($order_Entity);
            if ($result)
            {
                header("Location: admin.php?c=order&a=get");
            }
        }
    }
    public function editAction()
    {
        $id=$_GET['id'];
        $orderSelect=$this->model->getbyid($id);
        require_once(PATH_APPLICATION . "/views/editorder.php");
        if (isset($_POST['Edit'])) 
        {
            $UserID=$_POST['UserID'];
            $OrderDate=$_POST['OrderDate'];
            $ShipName=$_POST['ShipName'];
            $ShipAddress=$_POST['ShipAddress'];
            $order_Entity = new order_entity($id,$UserID,$OrderDate,$ShipName,$ShipAddress);
            $result = $this->model->edit($order_Entity);
            if ($result)
            {
                header("Location: admin.php?c=order&a=get");
            }
        }
    }
    public function deleteAction()
    {
        $id=$_GET['id'];
        $result = $this->model->delete($id);
        if ($result)
        {
            header("Location: admin.php?c=order&a=get");
        }
    }
    public function detailAction()
    {
        $id=$_GET['id'];
        $order = $this->model->getdetail($id);
        $totalprice=$this->model->gettotalprice($id);
        require(PATH_APPLICATION . "/views/detailorder.php");
    }
}

?>