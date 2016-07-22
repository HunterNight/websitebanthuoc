<?php
    require(PATH_APPLICATION."/views/header.php");
?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php
    echo $about1->content;

    ?>

</div>
<?php
require(PATH_APPLICATION."/views/footer.php");
?>
