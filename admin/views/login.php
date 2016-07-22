<?php ob_start();?>
<!--<!DOCTYPE html>-->
<!--<html >-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Admin cpanel</title>-->
<!---->
<!---->
<!---->
<!--    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>-->
<!--    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>-->
<!---->
<!--    <link rel="stylesheet" href="/mvc/public/css/style_login.css">-->
<!---->
<!---->
<!---->
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<div class="materialContainer">-->
<!---->
<!---->
<!--    <div class="box">-->
<!---->
<!--        <div class="title">LOGIN</div>-->
<!--        <form action="" method="post">-->
<!--        <div class="input">-->
<!--            <label for="name">Username</label>-->
<!--            <input type="text" name="username" id="name">-->
<!--            <span class="spin"></span>-->
<!--        </div>-->
<!---->
<!--        <div class="input">-->
<!--            <label for="pass">Password</label>-->
<!--            <input type="password" name="password" id="pass">-->
<!--            <span class="spin"></span>-->
<!--        </div>-->
<!---->
<!--        <div class="button login">-->
<!--            <button type="submit" name="submit"><span>GO</span> <i class="fa fa-check"></i></button>-->
<!--        </div>-->
<!--        </form>-->
<!--        <a href="" class="pass-forgot">Forgot your password?</a>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="overbox">-->
<!--        <div class="material-button alt-2"><span class="shape"></span></div>-->
<!---->
<!--        <div class="title">REGISTER</div>-->
<!--        <form action="">-->
<!--        <div class="input">-->
<!--            <label for="regname">Username</label>-->
<!--            <input type="text" name="regname" id="regname">-->
<!--            <span class="spin"></span>-->
<!--        </div>-->
<!---->
<!--        <div class="input">-->
<!--            <label for="regpass">Password</label>-->
<!--            <input type="password" name="regpass" id="regpass">-->
<!--            <span class="spin"></span>-->
<!--        </div>-->
<!---->
<!--        <div class="input">-->
<!--            <label for="reregpass">Repeat Password</label>-->
<!--            <input type="password" name="reregpass" id="reregpass">-->
<!--            <span class="spin"></span>-->
<!--        </div>-->
<!---->
<!--        <div class="button">-->
<!--            <button><span>NEXT</span></button>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<!---->
<!--<script src="/mvc/public/js/login.js"></script>-->
<!---->
<!---->
<!---->
<!---->
<!--</body>-->
<!--</html>-->

<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:56 GMT -->
<head>
    <?php
        if(isset($_SESSION['login_user']))
        {
            header("Location: admin.php?c=index&a=dashboard");
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="public/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="public/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Trang quản trị hệ thống bán thuốc - NQ Shop</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="public/bower_components/uikit/css/uikit.almost-flat.min.css"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="public/assets/css/login_page.min.css" />

</head>
<body class="login_page">

<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <div class="user_avatar"></div>
            </div>
            <form method="post" action="">
                <div class="uk-form-row">
                    <label for="login_username">Username</label>
                    <input class="md-input" type="text" id="login_username" name="username" />
                </div>
                <div class="uk-form-row">
                    <label for="login_password">Password</label>
                    <input class="md-input" type="password" id="login_password" name="password" />
                </div>
                <div class="uk-margin-medium-top">
                    <input  class="md-btn md-btn-primary md-btn-block md-btn-large" type="submit" value="Sign In" name="submit"/>
                </div>
                <div class="uk-margin-top">
                    <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                        </span>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form>
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                </div>
                <div class="uk-margin-medium-top">
                    <a href="index-2.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding" id="register_form" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
            <form>
                <div class="uk-form-row">
                    <label for="register_username">Username</label>
                    <input class="md-input" type="text" id="register_username" name="register_username" />
                </div>
                <div class="uk-form-row">
                    <label for="register_password">Password</label>
                    <input class="md-input" type="password" id="register_password" name="register_password" />
                </div>
                <div class="uk-form-row">
                    <label for="register_password_repeat">Repeat Password</label>
                    <input class="md-input" type="password" id="register_password_repeat" name="register_password_repeat" />
                </div>
                <div class="uk-form-row">
                    <label for="register_email">E-mail</label>
                    <input class="md-input" type="text" id="register_email" name="register_email" />
                </div>
                <div class="uk-margin-medium-top">
                    <a href="index-2.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <div class="uk-margin-top uk-text-center">
        <a href="#" id="signup_form_show">Create an account</a>
    </div>
</div>

<!-- common functions -->
<script src="public/assets/js/common.min.js"></script>
<!-- altair core functions -->
<script src="public/assets/js/altair_admin_common.min.js"></script>

<!-- altair login page functions -->
<script src="public/assets/js/pages/login.min.js"></script>

</body>

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:57 GMT -->
</html>