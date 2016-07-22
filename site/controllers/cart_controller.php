<?php
include_once(PATH_ROOT . "/site/models/cart_model.php");

class cart_controller
{
    public $model;

    public function indexAction()
    {
        echo "Cart pages <br>";
        echo "Any debug post here !";
    }

    public function getAction()
    {
        $this->model = new cart_model();
        $cart = $this->model->get();
        $totalprice = $this->model->getTotalPrice();
        require(PATH_APPLICATION . "/views/getcart.php");
    }

    public function addAction()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        if (Empty($id)) exit;
        $arrayCart = array();
        if (!isset($_SESSION["Giohang"])) {
            $_SESSION["Giohang"] = $arrayCart;
        } else {
            $arrayCart = $_SESSION["Giohang"];
        }
        $i = 0;
        $flagAdd = true;
        while (list($key, $value) = each($_SESSION["Giohang"])) {
            $infoMathangi = explode(";", $value);
            if ($infoMathangi[0] == $id) {
                $newQuantity = (int)$infoMathangi[1] + 1;
                $arrayCart[$i] = $infoMathangi[0] . ";" . $newQuantity;
                $flagAdd = false;
                break;
            }
            $i++;
        }
        if ($flagAdd == true)
            $arrayCart[] = "$id;1";
        $_SESSION["Giohang"] = $arrayCart;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function updateAction()
    {
        $arrayCart = array();
        $i = 0;
        while (list($key, $mahangi) = each($_POST["mahang"])):
            $flagXoa = false;
            if (isset($_POST["maxoa"])):
                if (is_array($_POST["maxoa"])):
                    reset($_POST["maxoa"]);
                    while (list($key, $mahangxoai) = each($_POST["maxoa"])):
                        if ($mahangi == $mahangxoai):
                            $flagXoa = true;
                        endif;
                    endwhile;
                endif;
            endif;
            if (!$flagXoa):
                $soluongi = $_POST["soluong"][$i];
                $mathangi = $mahangi . ";" . $soluongi;
                array_push($arrayCart, $mathangi);
            endif;
            $i++;
        endwhile;
        //Gan lai SESSION bang gio hang moi
        $_SESSION["Giohang"] = $arrayCart;
        print '<meta http-equiv="Refresh" content="0;URL=index.php?c=cart&a=get">';
        if (isset($_POST['proceed'])) {
            header("Location: index.php?c=order&a=insert");
        }
    }
}

?>