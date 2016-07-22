<?php ob_start();
require(PATH_APPLICATION."/controllers/product_controller.php");
$model = new product_controller();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NQ SHOP - Shop mua thuốc Online </title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
              type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="public/site/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="public/site/css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="public/site/css/owl.carousel.css">
        <link rel="stylesheet" href="public/site/style.css">
        <link rel="stylesheet" href="public/site/css/responsive.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php
                            if (isset($_SESSION['login_user'])) {
                                ?>
                                <li><a href="index.php?c=index&a=profile"><i class="fa fa-user"></i> <?php echo $_SESSION['login_user']; ?></a></li>
                                <li><a href="site/views/logout.php"><i class="fa fa-user"></i> Logout </a></li>
                                <?php
                            } else {

                                ?>
                                <li><a href="index.php?c=index&a=login"><i class="fa fa-user"></i> Login</a></li>
                                <?php
                            } ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span
                                        class="key">currency :</span><span class="value">USD </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span
                                        class="key">language :</span><span class="value">English </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header area -->

    <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php?c=product&a=get&page=1">Shop page</a></li>
                        <li><a href="index.php?c=category&a=get">Category</a></li>
                        <li><a href="index.php?c=index&a=about">About</a></li>
                        <li><a href="index.php?c=index&a=contact">Contact</a></li>
                    </ul>
                    <div id="custom-search-input">
                        <form action="" method="post">
                            <div class="input-group col-md-4">
                                <input type="text" class="form-control input-lg" placeholder="" name="text" />
                    <span class="input-group-btn">
                        <button name="Search" class="btn btn-info btn-lg" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                        </form>
                        <?php
                        if(isset($_POST['Search']))
                        {
                            $str= "index.php?c=product&a=search&keyword=". $_POST['text'];
                            echo "<script type='text/javascript'> window.location = '$str' </script>";
                        }
                        ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End mainmenu area -->


    </body>
    </html>
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
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">


                <?php
                $model->topsellerAction();
                ?>


            <div class="col-md-8">
                <div class="product-content-right">
                    <?php
                        if(empty($_SESSION['login_user']))
                        {
                    ?>
                    <div class="woocommerce">
                        <div class="woocommerce-info">Returning customer? <a class="showlogin" data-toggle="collapse"
                                                                             href="index.php?c=index&a=login"
                                                                             aria-expanded="false"
                                                                             aria-controls="login-form-wrap">Click here
                                to login</a>
                        </div>
                        <?php }
                        else{

                        ?>

                        <center>
                            <div class="alert alert-success">
                                <h3>Mời bạn điền đầy đủ thông tin: </h3>
                            </div>
                        <form action="" method="POST">
<!--                            <p id="billing_company_field" class="form-row form-row-wide">-->
<!--                                <label class="" for="ShipName">ShipName </label>-->
<!--                                <input type="text" value="" placeholder="" id="billing_company" name="ShipName" class="input-text ">-->
<!--                            </p>-->
<!--                            <p id="billing_company_field" class="form-row form-row-wide">-->
<!--                                <label class="" for="ShipAddress">Ship Address </label>-->
<!--                                <input type="text" value="" placeholder="" id="ShipAddress" name="ShipAddress" class="input-text ">-->
<!--                            </p>-->
<!--                            <br>-->
                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                <label class="" for="billing_first_name">Ship Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<abbr title="required" class="required">*</abbr>
                                </label>
                                <input value="" placeholder="" id="billing_first_name" name="ShipName" class="input-text " type="text">
                            </p>
                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                <label class="" for="billing_first_name">Ship Address <abbr title="required" class="required">*</abbr>
                                </label>
                                <input value="" placeholder="" id="billing_first_name" name="ShipAddress" class="input-text " type="text">
                            </p>
                            <input data-value="Place order" value="Place order" id="place_order" name="Add" class="button alt" type="submit">
                        </form>
                            </center>
                        </br>
                        </br>
                        </br>
<!--                            <h3 id="order_review_heading">Your order</h3>-->

<!--                            <div id="order_review" style="position: relative;">-->
<!--                                <table class="shop_table">-->
<!--                                    <thead>-->
<!--                                    <tr>-->
<!--                                        <th class="product-name">Product</th>-->
<!--                                        <th class="product-total">Total</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                    <tr class="cart_item">-->
<!--                                        <td class="product-name">-->
<!--                                            Ship Your Idea <strong class="product-quantity">× 1</strong></td>-->
<!--                                        <td class="product-total">-->
<!--                                            <span class="amount">£15.00</span></td>-->
<!--                                    </tr>-->
<!--                                    </tbody>-->
<!--                                    <tfoot>-->
<!---->
<!--                                    <tr class="cart-subtotal">-->
<!--                                        <th>Cart Subtotal</th>-->
<!--                                        <td><span class="amount">£15.00</span>-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!---->
<!--                                    <tr class="shipping">-->
<!--                                        <th>Shipping and Handling</th>-->
<!--                                        <td>-->
<!---->
<!--                                            Free Shipping-->
<!--                                            <input type="hidden" class="shipping_method" value="free_shipping"-->
<!--                                                   id="shipping_method_0" data-index="0" name="shipping_method[0]">-->
<!--                                        </td>-->
<!--                                    </tr>-->
<!---->
<!---->
<!--                                    <tr class="order-total">-->
<!--                                        <th>Order Total</th>-->
<!--                                        <td><strong><span class="amount">£15.00</span></strong></td>-->
<!--                                    </tr>-->
<!---->
<!--                                    </tfoot>-->
<!--                                </table>-->
<!---->
<!--                            </div>-->
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require(PATH_APPLICATION . "/views/footer.php");
?>