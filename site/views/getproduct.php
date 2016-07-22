<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm - NQ Shop</title>
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
            <?php
            foreach ($arrayProduct as &$product) {
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img style="height: 235px;width: 194px" src="<?php echo $product->getPicture();?>" alt="">
                    </div>
                    <h2><a href="index.php?c=product&a=detail&id=<?php echo $product->getProductID();?>"><?php echo $product->getProductName();?></a></h2>

                    <div class="product-carousel-price">
                        <ins> <?php echo number_format($product->getUnitPrice() - $product->getUnitPrice()*$product->getSaleOff());?> VND</ins>
                        <del><?php echo number_format($product->getUnitPrice());?> VND</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                           rel="nofollow" href="index.php?c=cart&a=add&id=<?php echo $product->getProductID();?> ">Add to cart</a>
                    </div>
                </div>
            </div>

            <?php  }?>


        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="index.php?c=product&a=get&page=<?php echo $_GET['page'] -1 ;  ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php?c=product&a=get&page=<?php echo $_GET['page'] + 1;  ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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

<script>
    $(".btn").on("click", function() {
        $(".alert").removeClass("in").show();
        $(".alert").delay(200).addClass("in").fadeOut(2000);
    });

</script>
