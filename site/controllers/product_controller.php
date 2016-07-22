<?php
include_once(PATH_ROOT . "/site/models/product_model.php");
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
        if(!isset($_GET['page']))
        {
            $arrayProduct = $this->model->get();
        }
        else
        {
            $arrayProduct=$this->model->getPage($_GET['page']);
        }
        require(PATH_APPLICATION . "/views/getproduct.php");
    }
    public function detailAction()
    {
        $id=$_GET['id'];
        $productSelect=$this->model->getbyid($id);
        $cateid=$productSelect->CategoryID;
        $CateName=$this->model->getCateName($cateid);
        $supid=$productSelect->SupplierID;
        $SupName=$this->model->getSupName($supid);
        $arrayRelatedProduct=$this->model->relateProduct(5,$cateid);
        require_once(PATH_APPLICATION . "/views/detailproduct.php");
    }
    public function topsellerAction()
    {
        $arrayProduct=$this->model->getTopSeller(4);
        require(PATH_APPLICATION . "/views/topseller.php");
    }
    public function newestAction()
    {
        $arrayProduct=$this->model->getNewest(4);
        require(PATH_APPLICATION . "/views/newproduct.php");
    }
    public function topsaleoffAction()
    {
        $arrayProduct=$this->model->getTopSaleOff(4);
        require(PATH_APPLICATION . "/views/topselloff.php");
    }
    public function randomAction()
    {
        $arrayProduct=$this->model->getRandom(10);
        require(PATH_APPLICATION . "/views/randomproduct.php");
    }
    public function slideAction()
    {
        $arrayProduct=$this->model->getTopSeller(4);
        require(PATH_APPLICATION . "/views/slide.php");
    }
    public function getbycatidAction()
    {
        $cateid=$_GET['catid'];
        $arrayProduct=$this->model->getbycate($cateid);
        require(PATH_APPLICATION . "/views/getproduct.php");
    }
    public function searchAction()
    {
        $keyword=$_GET['keyword'];
        $arrayProduct=$this->model->search($keyword);
        if(count($arrayProduct)!=0)
            require(PATH_APPLICATION . "/views/getproduct.php");
        else
            echo "Have no product with key word ".$keyword;
    }

}

?>