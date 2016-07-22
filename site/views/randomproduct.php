<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php
                        foreach($arrayProduct as $Product)
                        {
                        ?>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="<?php echo $Product['Picture']; ?>" style="width: 250px;height: 300px" alt="">
                                <div class="product-hover">
                                    <a href="index.php?c=cart&a=add&id=<?php echo $Product['ProductID']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="index.php?c=product&a=detail&id=<?php echo $Product['ProductID']; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="index.php?c=product&a=detail&id=<?php echo $Product['ProductID']; ?>"><?php echo $Product['ProductName']; ?></a></h2>

                            <div class="product-carousel-price">

                                <ins> <?php echo number_format(($Product['UnitPrice'] -($Product['UnitPrice']*$Product['SaleOff']))); ?> VND</ins> <del><?php echo number_format($Product['UnitPrice']); ?> VND</del>
                            </div>
                        </div>

                        <?php  }?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->