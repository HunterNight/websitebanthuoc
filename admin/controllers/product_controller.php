<?php
include_once(PATH_ROOT . "/admin/models/product_model.php");
include_once(PATH_ROOT . "/admin/models/category_model.php");
include_once(PATH_ROOT . "/admin/models/supplier_model.php");
class product_controller
{
    public $model;
    public function __construct()
    {
        $this->model = new product_model();
    }

    public function indexAction()
    {
        echo "Pruduct pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {

        $arrayProduct = $this->model->get();
        require(PATH_APPLICATION . "/views/getproduct.php");
    }
    public function slideAction()
    {

    }
    public function insertAction()
    {
        $modelCategory=new category_model();
        $modelSupplier=new supplier_model();
        require_once(PATH_APPLICATION . "/views/addproduct.php");
        if (isset($_POST['Add'])) {
            $ProductId="";
            $ProductName=$_POST['ProductName'];
            $SupplierID=$_POST['SupplierID'];
            $CategoryID=$_POST['CategoryID'];
            $Unit=$_POST['Unit'];
            $UnitPrice=$_POST['UnitPrice'];
            $Quantity=$_POST['Quantity'];
            $SaleOff=$_POST['SaleOff'];
//            $Picture=$_POST['Picture'];
            $folder = "upload/";
            $Picture= $folder.basename($_FILES["Picture"]["name"]);
            move_uploaded_file($_FILES["Picture"]["tmp_name"], $Picture);
            $Description=$_POST['Description'];
            $product_Entity = new product_entity ($ProductId,$ProductName,$SupplierID,$CategoryID,$Unit,
                                                 $UnitPrice,$Quantity,$SaleOff,$Picture,$Description);
            $result = $this->model->insert($product_Entity);
            if ($result)
            {
                header("Location: admin.php?c=product&a=get");
            }
        }
    }
    public function editAction()
    {
        $id=$_GET['id'];
        $productSelect=$this->model->getbyid($id);
        $modelCategory=new category_model();
        $modelSupplier=new supplier_model();
        require_once(PATH_APPLICATION . "/views/editproduct.php");
        if (isset($_POST['Edit'])) 
        {
            $ProductName=$_POST['ProductName'];
            $SupplierID=$_POST['SupplierID'];
            $CategoryID=$_POST['CategoryID'];
            $Unit=$_POST['Unit'];
            $UnitPrice=$_POST['UnitPrice'];
            $Quantity=$_POST['Quantity'];
            $SaleOff=$_POST['SaleOff'];
            $folder = "upload/";
            $Picture= $folder.basename($_FILES["Picture"]["name"]);
            move_uploaded_file($_FILES["Picture"]["tmp_name"], $Picture);
            $Description=$_POST['Description'];
            $product_Entity = new product_entity(   $id,$ProductName,$SupplierID,$CategoryID,$Unit,
                                                    $UnitPrice,$Quantity,$SaleOff,$Picture,$Description);
            $result = $this->model->edit($product_Entity);
            if ($result)
            {
                header("Location: admin.php?c=product&a=get");
            }
        }
    }
    public function deleteAction()
    {
        $id=$_GET['id'];
        $result = $this->model->delete($id);
        if ($result)
        {
            header("Location: admin.php?c=product&a=get");
        }
    }
    public function detailAction()
    {

            $id=$_GET['id'];
            if(!empty($id))
            {
                $productSelect=$this->model->getbyid($id);
                require_once(PATH_APPLICATION . "/views/detailproduct.php");
            }
    }

    public function topsellerAction()
    {
        $arrayProduct=$this->model->getTopSeller(5); //Thay tham so bang so luong san pham can xem
        require_once(PATH_APPLICATION . "/views/gettopsellerproduct.php");
    }


}

?>