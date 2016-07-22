<?php
require(PATH_APPLICATION . "/views/header.php");
include_once(PATH_ROOT . "/site/controllers/product_controller.php");
$model = new product_controller();
?>

<?php
$model->slideAction();
?>

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>

                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>

                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>

                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>

                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <!--Random Product-->
<?php
$model->randomAction();
?>

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                $model->topsellerAction();
                ?>

                <?php
                $model->newestAction()
                ?>

                <?php
                $model->topsaleoffAction()
                ?>
            </div>
        </div>
    </div> <!-- End product widget area -->
<?php
require(PATH_APPLICATION . "/views/footer.php");
?>