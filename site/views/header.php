<?php
include(PATH_ROOT . "/site/models/cart_model.php");
$cartIcon = new cart_model();
$totalprice = $cartIcon->getTotalPrice();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NQ SHOP - Shop mua thuốc Online </title>

    <!-- Google Fonts -->
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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

    <script type="text/javascript">(function(d, t, e, m){

            // Async Rating-Widget initialization.
            window.RW_Async_Init = function(){

                RW.init({
                    huid: "299315",
                    uid: "5b724b9e0789f10a8346a44f7c8f795c",
                    source: "website",
                    options: {
                        "size": "medium",
                        "style": "oxygen",
                        "isDummy": false
                    }
                });
                RW.render();
            };
            // Append Rating-Widget JavaScript library.
            var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
                l = d.location, ck = "Y" + t.getFullYear() +
                    "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
                f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
                a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
            if (d.getElementById(id)) return;
            rw = d.createElement(e);
            rw.id = id; rw.async = true; rw.type = "text/javascript";
            rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
            s.parentNode.insertBefore(rw, s);
        }(document, new Date(), "script", "rating-widget.com/"));</script>

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
                            <li><a href="index.php?c=index&a=logout"><i class="fa fa-user"></i> Logout </a></li>
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

<div class="site-branding-area">
    <div class="container">
        <div class="row">


            <div class="col-sm-6">

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
                    <li><a href="index.php?c=category&a=get">Category</a></li>
                    <li><a href="index.php?c=index&a=about">About</a></li>
                    <li><a href="index.php?c=index&a=contact">Contact</a></li>

                </ul>
                <span class="nav shopping-item">
                    <a href="index.php?c=cart&a=get">Cart - <span
                            class="cart-amunt"><?php
                            if (isset($_SESSION['Giohang'])) {
                                echo number_format($totalprice);
                            } else {
                                echo "0";
                            }
                            ?> VND</span> <i
                            class="fa fa-shopping-cart"></i>
                        <span class="product-count"><?php
                            if (isset($_SESSION['Giohang'])) {
                                echo count($_SESSION['Giohang']);
                            } else {
                                echo "0";
                            }
                            ?></span></a>
                </span>
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
</div>
<!-- End mainmenu area -->


</body>
</html>