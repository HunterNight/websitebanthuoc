<?php
require(PATH_APPLICATION . "/views/header.php");
?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Check Out</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"style="padding: 50px">

        <div class="row">

            <div class="dual-list col-md-12">
                <div class="alert alert-danger">
                    <h3><strong>Notice! </strong>You have no item in cart, so you can't check out. Please return <a
                            href="index.php">HomePage</a></h3>
                </div>
            </div>


        </div>

    </div>
<?php
require(PATH_APPLICATION . "/views/footer.php");
?>