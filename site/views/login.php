<?php ob_start();?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="public/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="public/assets/img/favicon-32x32.png" sizes="32x32">

    <title>Trang đăng nhập - NQ Shop </title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="public/bower_components/uikit/css/uikit.almost-flat.min.css"/>
    <link rel="stylesheet" href="public/assets/icons/flags/flags.min.css" media="all">
    <!-- altair admin login page -->
    <link rel="stylesheet" href="public/assets/css/login_page.min.css" />
    <!-- altair admin -->
    <link rel="stylesheet" href="public/assets/css/main.min.css" media="all">

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
            <form action="" method="post">
                <div class="uk-form-row">
                    <label for="fullname">Full Name</label>
                    <input class="md-input" type="text" id="register_username" name="fullname" />
                </div>
                <div class="uk-form-row">
                    <label for="username">Username</label>
                    <input class="md-input" type="text" id="register_username" name="username" />
                </div>
                <div class="uk-form-row">
                    <label for="register_password">Password</label>
                    <input class="md-input" type="password" id="register_password" name="password" />
                </div>
                <div class="uk-form-row">
                    <label for="masked_email">Email</label>
                    <input class="md-input masked_input" id="masked_email" type="text" data-inputmask="'alias': 'email'" data-inputmask-showmaskonhover="true" name="email"/>
                </div>
                <div class="uk-form-row">
                    <label for="masked_phone">Phone</label>
                    <input class="md-input masked_input" id="masked_phone" type="text" data-inputmask="'mask': '99 999 999 99'" data-inputmask-showmaskonhover="true" name="phone" />
                </div>
                <div class="uk-form-row">
                    <label for="masked_date">Birthday</label>
                    <input class="md-input masked_input" id="masked_date" type="text" data-inputmask="'alias': 'yyyy-mm-dd'" data-inputmask-showmaskonhover="true" name="birthday"/>
                </div>
                <div class="uk-form-row">
                    <label for="address">Address</label>
                    <input class="md-input" type="text" id="register_email" name="address" />
                </div>

                <div class="uk-margin-medium-top">
                    <button class="md-btn md-btn-primary md-btn-block md-btn-large" type="submit" name="register">Sign Up</button>
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
<!-- common functions -->
<script src="public/assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="public/assets/js/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->

<!-- page specific plugins -->
<!-- ionrangeslider -->
<script src="public/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- inputmask-->
<script src="public/bower_components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<!--  forms advanced functions -->
<script src="public/assets/js/pages/forms_advanced.min.js"></script>
</body>

<!-- Mirrored from altair_html.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:20:57 GMT -->
</html>