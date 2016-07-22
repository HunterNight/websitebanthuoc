<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <?php
            foreach($arrayProduct as $Product)
            {
            ?>
            <li>
                <img src="<?php echo $Product['Picture']; ?>" alt="Slide" style="width:500px; height: 363px">

                <div class="caption-group">
                    <h2 class="caption title">
                        <span class="primary"><strong><?php echo $Product['ProductName']; ?></strong></span>
                    </h2>
                    <h4 style="display: none;" class="caption subtitle"><?php echo number_format($Product['Price']) ?> VND</h4>
                    <a class="caption button-radius" href="index.php?c=product&a=detail&id=<?php echo $Product['ProductID']; ?>"><span class="icon"></span>Buy now</a>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
    <!-- ./Slider -->
</div>