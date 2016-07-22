<div class="col-md-4">
    <div class="single-product-widget">
        <h2 class="product-wid-title">Top Sellers</h2>
        <?php
        foreach($arrayProduct as $Product)
        {
        ?>
        <div class="single-wid-product">
            <a href="index.php?c=product&a=detail&id=<?php echo $Product['ProductID']; ?>"><img src="<?php echo $Product['Picture']; ?>" alt="" class="product-thumb"></a>
            <h2><a href="index.php?c=product&a=detail&id=<?php echo $Product['ProductID']; ?>"><?php echo $Product['ProductName']; ?></a></h2>
            <div class="product-wid-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="product-wid-price">
                <ins> <?php echo number_format(($Product['Price'] -($Product['Price']*$Product['SaleOff']))); ?>VND</ins> <del><?php echo number_format($Product['Price']); ?> VND</del>
            </div>
        </div>
        <?php }?>

    </div>
</div>