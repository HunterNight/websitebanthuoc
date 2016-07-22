<?php
include_once(PATH_ROOT . "/admin/models/supplier_model.php");
class supplier_controller
{
    public $model;
    public function __construct()
    {
        $this->model = new supplier_model();
    }

    public function indexAction()
    {
        echo "Supplier pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {
        $arraySupplier = $this->model->get();
        require(PATH_APPLICATION . "/views/getsupplier.php");
    }

    public function insertAction()
    {
        require_once(PATH_APPLICATION . "/views/addsupplier.php");
        if (isset($_POST['Add'])) {
            $SupplierName=$_POST['SupplierName'];
           	$Address=$_POST['Address'];
           	$Phone=$_POST['Phone'];
           	$Email=$_POST['Email'];
            $supplier_Entity = new supplier_entity ("",$SupplierName,$Address,$Phone,$Email);
            $result = $this->model->insert($supplier_Entity);
            if ($result)
            {
                echo '<script type="text/javascript">
           window.location = "admin.php?c=supplier&a=get"
      </script>';
            }
        }
    }
    public function editAction()
    {
        $id=$_GET['id'];
        $supplierSelect=$this->model->getbyid($id);
        require_once(PATH_APPLICATION . "/views/editsupplier.php");
        if (isset($_POST['Edit'])) 
        {
            $SupplierName=$_POST['SupplierName'];
            $Address=$_POST['Address'];
            $Phone=$_POST['Phone'];
            $Email=$_POST['Email'];
            $supplier_Entity = new supplier_entity($id,$SupplierName,$Address,$Phone,$Email);
            $result = $this->model->edit($supplier_Entity);
            if ($result)
            {
                echo '<script type="text/javascript">
           window.location = "admin.php?c=supplier&a=get"
      </script>';
            }
        }
    }
    public function deleteAction()
    {
        $id=$_GET['id'];
        $result = $this->model->delete($id);
        if ($result)
        {
            echo '<script type="text/javascript">
           window.location = "admin.php?c=supplier&a=get"
      </script>';
        }
    }
    public function topsupplierAction()
    {
        $arraySupplier=$this->model->getTopSupplier(5); //Thay tham so bang so danh sach muon hien thi
        require(PATH_APPLICATION . "/views/gettopsupplier.php");
    }

}

?>