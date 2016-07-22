<?php require(PATH_APPLICATION."/controllers/product_controller.php");
$model = new product_controller();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NQ SHOP - Shop bán thuốc</title>

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

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
<!--                    <h1><a href="./"><img src="public/site/img/logo.png"></a></h1>-->
                </div>
            </div>


        </div>
    </div>
</div>
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
                    <li><a href="/index.php?c=category&a=get">Category</a></li>
                    <li><a href="index.php?c=index&a=about">About</a></li>
                    <li><a href="index.php?c=index&a=contact">Contact</a></li>
                </ul>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="index.php?c=cart&a=get">Cart - <span class="cart-amunt"><?php
                                if (isset($_SESSION['Giohang'])) {
                                    echo number_format($totalprice);
                                } else {
                                    echo "0";
                                }
                                ?> VND</span> <i class="fa fa-shopping-cart"></i>
                        <span class="product-count"><?php
                            if (isset($_SESSION['Giohang'])) {
                                echo count($_SESSION['Giohang']);
                            } else {
                                echo "0";
                            }
                            ?></span></a>
                    </div>
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
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php
            $model->newestAction();
            ?>



            <div class="col-md-8">
                <div class="product-content-right">
                    <?php
                    if(!isset($_SESSION["Giohang"]))
                    {
                        print "You have no item in cart";
                    }else{
                    ?>
                    <div class="woocommerce">
                        <form method="post" action="index.php?c=cart&a=update">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-name">ID</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=0; $i <$cart->getCount(); $i++) { ?>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <?php print '<Input Type="hidden" Name="mahang[]" Value="'.$cart->ProductId[$i].'">'; echo $cart->ProductId[$i];?>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="index.php?c=product&a=detail&id=<?php echo $cart->ProductId[$i]; ?>"><img width="145" height="145" alt="poster_1_up"
                                                                               class="shop_thumbnail"
                                                                               src="<?php echo $cart->Picture[$i]?>"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.html"><?php echo $cart->ProductName[$i]; ?></a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount"><?php echo number_format($cart->UnitPrice[$i])?>VND</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input name="soluong[]" type="number" size="4" class="input-text qty text" title="Qty"
                                                       value="<?php echo $cart->Quantity[$i]; ?>" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo number_format($cart->Quantity[$i]*(1-$cart->SaleOff[$i])*$cart->UnitPrice[$i])?> VND</span>
                                        </td>
                                        <td class="product-remove">
                                            <input Type="Checkbox" Name="maxoa[]" Value="<?php echo $cart->ProductId[$i]?>" style="width:20">
                                        </td>

                                    </tr>
                                <?php }?>
                                <tr>
                                    <td class="actions" colspan="6">
                                        <input type="submit" value="Update" name="update_cart" class="button">
                                        <input type="submit" value="Checkout" name="proceed"
                                               class="checkout-button button alt wc-forward">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount"><?php echo number_format($totalprice) ?> VND</span></td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Shipping and Handling</th>
                                        <td>Free Shipping</td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount"><?php echo number_format($totalprice) ?> VND</span></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require(PATH_APPLICATION . "/views/footer.php");
?>
