<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main
require(PATH_APPLICATION . "/controllers/category_controller.php");
require(PATH_APPLICATION . "/controllers/product_controller.php");
require(PATH_APPLICATION . "/controllers/supplier_controller.php");
require(PATH_APPLICATION . "/controllers/user_controller.php");
$category = new category_controller();
$product = new product_controller();
$user = new user_controller();
$supplier = new supplier_controller();
?>
<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin>
            <?php
            $category->topcategoryAction();
            ?>

            <?php
            $product->topsellerAction();
            ?>

            <?php
            $supplier->topsupplierAction();
            ?>

            <?php
            $user->topuserAction();
            ?>

        </div>
    </div>
</div>
