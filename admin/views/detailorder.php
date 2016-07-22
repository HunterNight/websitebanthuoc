<?php
//Header
require(PATH_APPLICATION . "/views/header.php");
//Left
require(PATH_APPLICATION . "/views/left.php");
//Main
include_once(PATH_ROOT . "/admin/models/product_model.php");
include_once(PATH_ROOT . "/admin/models/user_model.php");
$userName = new user_model();
$productName = new product_model();
?>
<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-width-large-7-10">
            <div style="opacity: 1; transform: scale(1);" class="md-card md-card-single main-print" id="invoice">
                <div id="invoice_preview">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions hidden-print">
                            <i class="md-icon material-icons" id="invoice_print"></i>

                            <div aria-expanded="false" aria-haspopup="true" class="md-card-dropdown"
                                 data-uk-dropdown="">
                                <i class="md-icon material-icons"></i>

                                <div style="min-width: 160px;" class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                    <ul class="uk-nav">
                                        <li><a href="#">Archive</a></li>
                                        <li><a href="#" class="uk-text-danger">Remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3 class="md-card-toolbar-heading-text large" id="invoice_name">
                            Invoice #<?php echo $_GET['id']?>
                        </h3>
                    </div>
                    <div style="height: auto;" class="md-card-content">
                        <div class="uk-margin-medium-bottom">
                            <span class="uk-text-muted uk-text-small uk-text-italic">Date:</span> <?php echo $order[0]['OrderDate']?>
                            <br>

                        </div>
                        <div class="uk-grid" data-uk-grid-margin="">
                            <div class="uk-width-small-3-5">
                                <div class="uk-margin-bottom">
                                    <span class="uk-text-muted uk-text-small uk-text-italic">From:</span>
                                    <address>
                                        <p><strong><?php echo $userName->getUserName($order[0]['UserID'])?></strong></p>
                                    </address>
                                </div>
                                <div class="uk-margin-medium-bottom">
                                    <span class="uk-text-muted uk-text-small uk-text-italic">To:</span>
                                    <address>
                                        <p><strong><?php echo $order[0]['ShipName']?></strong></p>
                                    </address>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">Address:</span>
                                    <address>
                                    <p><strong><?php echo $order[0]['ShipAddress']?></strong></p>
                                    </address>
                                    <span class="uk-text-muted uk-text-small uk-text-italic">Telephone Number:</span>
                                    <address>
                                        <p><strong><?php echo $userName->getTelephoneNumber($order[0]['UserID'])?></strong></p>
                                    </address>
                                </div>
                            </div>
                            <div class="uk-width-small-2-5">
                                <span class="uk-text-muted uk-text-small uk-text-italic">Total:</span>

                                <p class="heading_b uk-text-success"><?php echo number_format($totalprice);?> VND</p>

                            </div>
                        </div>
                        <div class="uk-grid uk-margin-large-bottom">
                            <div class="uk-width-1-1">
                                <table class="uk-table">
                                    <thead>
                                    <tr class="uk-text-upper">
                                        <th>Product Name</th>
                                        <th class="uk-text-center">Quantity</th>
                                        <th class="uk-text-center">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($order as $product) {

                                    ?>
                                    <tr class="uk-table-middle">
                                        <td>
                                            <span class="uk-text-large"><?php echo $productName->getProductName($product['ProductID'])?></span><br>
<!--                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>-->
                                        </td>
                                        <td class="uk-text-center">
                                            <?php echo $product['Quantity']?>
                                        </td>
                                        <td class="uk-text-center">
                                            <?php echo number_format($product['Price'])?> VND
                                        </td>
                                    </tr>
                                        <div class="divider"></div>
                                    <?php }?>
                                    </tbody>
                                </table>
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <span class="uk-text-muted uk-text-small uk-text-italic">Payment Method:</span>
                                        <p class="uk-margin-top-remove">
                                            Cash on delivery
                                        </p>
                                        <p class="uk-text-small">Please pay within 3 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="invoice_form"></div>
            </div>
        </div>
    </div>
</div>