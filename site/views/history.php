<?php
require(PATH_APPLICATION . "/views/header.php");
require(PATH_APPLICATION . "/models/product_model.php");
$product = new product_model();
$stt = 1;


?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2> Order History</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad-12">
            <div class="alert alert-success">
                <center><h3>Order History &nbsp;&nbsp;&nbsp;</h3></center>
                </div>

            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Đơn hàng</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($listOrder as $order) {?>
                <tr>
                    <th scope="row"><?php echo $stt?></th>
                    <td>
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $stt?>" aria-expanded="false" aria-controls="collapseExample">
                                <?php echo "Mã đơn hàng #" . $order['Order']['OrderID'];?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-plus"></i>
                            </button>
                        </p>
                        <div class="collapse" id="<?php echo $stt;?>">
                            <div class="card card-block">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="invoice-title">
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <address>
                                                        <strong style="display: inline">Người nhận: </strong> <?php echo $order['Order']['ShipName'];?><br>
                                                        <strong>Địa chỉ người nhận: </strong><?php echo $order['Order']['ShipAddress'];?><br>
                                                        <strong>Ngày đặt hàng: </strong><?php echo $order['Order']['OrderDate'];?><br>
                                                        <br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><strong>Chi tiết hóa đơn</strong></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <td><strong>Item</strong></td>
                                                                <td class="text-center"><strong>Quantity</strong></td>
                                                                <td class="text-right"><strong>Totals</strong></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                            <?php
                                                            $tongtien = 0;
                                                            foreach ($order['OrderDetail'] as $orderdetail) {?>
                                                            <tr>
                                                                <td><?php
                                                                        echo $product->getProductName($orderdetail['ProductID']);
                                                                    ?></td>
                                                                <td class="text-center"><?php
                                                                    echo $orderdetail['Quantity'];
                                                                    ?></td>
                                                                <td class="text-right">

                                                                    <?php
                                                                    echo number_format($orderdetail['Price']) . " VND";
                                                                    $tongtien += $orderdetail['Price'];
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <?php }?>
                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                                <td class="thick-line text-right"><?php echo number_format($tongtien);?> VND</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                                <td class="no-line text-right">Free Ship</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                                <td class="no-line text-right"><?php echo number_format($tongtien);?> VND</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>

                    </td>

                </tr>
                <?php
                    $stt++;
                }?>
                </tbody>
            </table>



        </div>
    </div>
</div>

<?php
require(PATH_APPLICATION . "/views/footer.php");
?>
