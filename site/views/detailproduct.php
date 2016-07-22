<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sản phẩm <?php echo $productSelect->ProductName;?> - NQ Shop</title>
</head>
<body>
<?php
require(PATH_APPLICATION . "/views/header.php");
?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <?php foreach($arrayRelatedProduct as $RelatedProduct)
                    {

                    ?>
                    <div class="thubmnail-recent">
                        <img src="<?php echo $RelatedProduct->Picture ?>" class="recent-thumb" alt="">

                        <h2><a href="index.php?c=product&a=detail&id=<?php echo $RelatedProduct->ProductId;?>"><?php echo $RelatedProduct->ProductName ?></a></h2>

                        <div class="product-sidebar-price">

                            <ins><?php echo number_format($RelatedProduct->UnitPrice-($RelatedProduct->UnitPrice*$RelatedProduct->SaleOff));?> VND</ins>
                            <del><?php echo number_format($RelatedProduct->UnitPrice) ?> VND</del>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="index.php">Home</a>
                        <a href="index.php?c=product&a=getbycatid&catid=<?php echo $productSelect->CategoryID?>"><?php echo $CateName;?></a>
                        <a href="index.php?c=product&a=detail&id=<?php echo $productSelect->ProductId;?>"><?php echo $productSelect->ProductName;?></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="<?php echo $productSelect->Picture;?>" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?php echo $productSelect->ProductName;?></h2>

                                <div class="product-inner-price">
                                    <ins><?php echo number_format($productSelect->UnitPrice-($productSelect->UnitPrice*$productSelect->SaleOff));?> VND</ins>
                                   <?php
                                    if($productSelect->SaleOff != 0)
                                    {
                                    echo "<del>".number_format($productSelect->UnitPrice)."</del>";
                                    }
                                   ?>
                                </div>
                                <div class="rw-ui-container" >
                                </div>
                                <br>
                                <br>
                                <form action="" class="cart">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="index.php?c=cart&a=add&id=<?php echo $productSelect->ProductId?>">Add to cart</a>
                                </form>

                                <div class="product-inner-category">
                                    <p>Category: <a href="index.php?c=product&a=getbycatid&catid=<?php echo $productSelect->CategoryID?>"><?php echo $CateName;?></a>. </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                                  role="tab" data-toggle="tab">Description</a>
                                        </li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                                   data-toggle="tab">Comments</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <?php echo $productSelect->Description;?>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Comments</h2>
                                            <div class="fb-comments" data-href="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" data-width="400px" data-numposts="5"></div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
require(PATH_APPLICATION . "/views/footer.php");
?>
</html>