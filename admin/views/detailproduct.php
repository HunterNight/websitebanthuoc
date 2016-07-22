<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Detail Product</title>-->
<!--</head>-->
<!--<body>-->
<!--    <div style="margin-left:250px">-->
<!--        --><?php
//            if(is_null($productSelect->ProductId))
//                echo "<h3>Have no product with id $id<h3>";
//            else
//                echo "<h3>Detail of Product with ProductID".$productSelect->ProductId."</h3>
//                    <br>
//                    <p><strong>ProductName: </strong>".$productSelect->ProductName."</p>
//                    <p><strong>SupplierID: </strong>".$productSelect->SupplierID."</p>
//                    <p><strong>CategoryID: </strong>".$productSelect->CategoryID."</p>
//                    <p><strong>Unit: </strong>".$productSelect->Unit."</p>
//                    <p><strong>UnitPrice: </strong>".$productSelect->UnitPrice."</p>
//                    <p><strong>Quantity: </strong>".$productSelect->Quantity."</p>
//                    <p><strong>SaleOff: </strong>".$productSelect->SaleOff."</p>
//                    <p><strong>Picture: </strong>".$productSelect->Picture."</p>
//                    <p><strong>Description: </strong>".$productSelect->Description."</p>";
//        ?>
<!--    </div>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
<?php
//Header
include_once(PATH_APPLICATION . "/views/header.php");
//Left
include_once(PATH_APPLICATION . "/views/left.php");
//Main

?>
<div id="page_content">
    <div id="page_heading">
        <h1><?php echo $productSelect->ProductName?></h1>
        <span class="uk-text-muted uk-text-upper uk-text-small"><?php echo $productSelect->CategoryID?></span>
    </div>
    <div id="page_content_inner">

        <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
            <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Photos
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <div class="uk-margin-bottom uk-text-center">
                            <img src="<?php echo $productSelect->Picture?>" alt="" class="img_medium" />
                        </div>
                    </div>
                </div>
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Data
                        </h3>
                    </div>
                    <div class="md-card-content">
                        <ul class="md-list">
                            <li>
                                <div class="md-list-content">
                                    <span class="uk-text-small uk-text-muted uk-display-block">Đơn giá </span>
                                    <span class="md-list-heading uk-text-large uk-text-success"><?php echo $productSelect->UnitPrice . " VND"?></span>
                                </div>
                            </li>
                            <li>
                                <div class="md-list-content">
                                    <span class="uk-text-small uk-text-muted uk-display-block">SaleOff</span>
                                    <span class="md-list-heading uk-text-large"><?php echo $productSelect->SaleOff . " %"?></span>
                                </div>
                            </li>
                            <li>
                                <div class="md-list-content">
                                    <span class="uk-text-small uk-text-muted uk-display-block">Quantity</span>
                                    <span class="md-list-heading uk-text-large"><?php echo $productSelect->Quantity?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <h3 class="md-card-toolbar-heading-text">
                            Details
                        </h3>
                    </div>
                    <div class="md-card-content large-padding">
                        <div class="uk-grid uk-grid-divider uk-grid-medium">
                            <div class="uk-width-large-1-2">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Product Name</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle"><a href="#"><?php echo $productSelect->ProductName?></a></span>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Nhà Cung cấp </span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <span class="uk-text-large uk-text-middle"><?php echo $this->model->getSupName($productSelect->SupplierID)?></span>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Category</span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <?php echo $this->model->getCateName($productSelect->CategoryID)?>
                                    </div>
                                </div>
                                <hr class="uk-grid-divider">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-large-1-3">
                                        <span class="uk-text-muted uk-text-small">Đơn Vị </span>
                                    </div>
                                    <div class="uk-width-large-2-3">
                                        <?php echo $productSelect->Unit?>
                                    </div>
                                </div>

                                <hr class="uk-grid-divider uk-hidden-large">
                            </div>
                            <div class="uk-width-large-1-2">

                                <p>
                                    <span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Description</span>
                                    <?php echo $productSelect->Description?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="md-fab-wrapper">
    <a class="md-fab md-fab-primary" href="admin.php?c=product&a=edit&id= <?php echo $productSelect->ProductId ?>">
        <i class="material-icons">&#xE150;</i>
    </a>
</div>
