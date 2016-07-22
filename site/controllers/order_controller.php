<?php
include_once(PATH_ROOT . "/site/models/order_model.php");
include_once(PATH_ROOT . "/site/models/orders_model.php");
include_once(PATH_ROOT . "/site/models/product_model.php");
//include_once(PATH_ROOT . "/site/models/cart_model.php");
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
    public function insertAction()
    {

        if(!isset($_SESSION["Giohang"])||count($_SESSION["Giohang"])==0)
        {
           require(PATH_APPLICATION."/views/emptyCart.php");
        }
        else
        {
//            $cart_checkout=new Cart_Model();
//            $P_Name= $cart_checkout->get()->ProductName;
//            $P_Quantity=$cart_checkout->get()->Quantity;
//            $P_UnitPrice=$cart_checkout->get()->UnitPrice;
//            $P_SaleOff=$cart_checkout->get()->SaleOff;
//            $P_Count=count($P_Name);
            require_once(PATH_APPLICATION . "/views/addorder.php");

            if (isset($_POST['Add'])) {
                $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                $query = "SELECT UserID FROM Users WHERE UserName='".$_SESSION['login_user']."'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $UserID=$row['UserID'];
                $query="SELECT MAX(OrderID) AS MAX_Order FROM Orders";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $OrderID=$row['MAX_Order']+1;
                $OrderDate=date("Y-m-d");
                $ShipName=$_POST['ShipName'];
                $ShipAddress=$_POST['ShipAddress'];
                $order_entity = new order_entity ($OrderID,$UserID,$OrderDate,$ShipName,$ShipAddress);
                $result = $this->model->insert($order_entity);
                //Add OrderDetail
                while (list($key, $value) = each($_SESSION["Giohang"]))
                {
                    $infoMathangi = explode(";",$value);
                    $ProductID=(int)$infoMathangi[0];
                    $Quantity=(int)$infoMathangi[1];
                    $ProductSelect=new Product_Model();
                    $Product_Entity=$ProductSelect->getbyid($ProductID);
                    $UnitPrice=$Product_Entity->UnitPrice;
                    $SaleOff=$Product_Entity->SaleOff;
                    $Price=$UnitPrice*(1-$SaleOff)*$Quantity;
                    $orders_Entity=new Orders_Entity($OrderID,$ProductID,$Quantity,$Price);
                    $orders_Model=new Orders_Model();
                    $result=$orders_Model->insert($orders_Entity);
                    //Update Quantity of Product
                    if($result==1)
                    {
                        $NewQuantity=$Product_Entity->Quantity-$Quantity;
                        $ProductModel=new Product_Model();
                        $resultUpdate =$ProductModel->editquantity($ProductID,$NewQuantity);
                    }
                    else
                        break;
                }
                if ($result)
                {
                    $_SESSION["Giohang"]=array();
                    header("Location: index.php?c=order&a=succsess");
                }
            }

        }
    }
    public function succsessAction()
    {
        require(PATH_APPLICATION."/views/successcart.php");
    }
}

?>