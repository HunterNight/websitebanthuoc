<?php
if (session_status() == PHP_SESSION_NONE) {
    header("Location: admin.php");
}
else
    if($_SESSION['permission'] != 1)
    {
        header("Location: admin.php");
        //die("Hello");
    }
ob_start();
?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from altair_html.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:17:10 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Trang quản trị viên - NQ Shop </title>

    <!-- additional styles for plugins -->
    <!-- kendo UI -->
    <link rel="stylesheet" href="public/bower_components/kendo-ui/styles/kendo.common-material.min.css"/>
    <link rel="stylesheet" href="public/bower_components/kendo-ui/styles/kendo.material.min.css"/>
    <!-- additional styles for plugins -->
    <!-- weather icons -->
    <link rel="stylesheet" href="public/bower_components/weather-icons/css/weather-icons.min.css" media="all">
    <!-- metrics graphics (charts) -->
    <link rel="stylesheet" href="public/bower_components/metrics-graphics/dist/metricsgraphics.css">
    <!-- chartist -->
    <link rel="stylesheet" href="public/bower_components/chartist/dist/chartist.min.css">

    <!-- uikit -->
    <link rel="stylesheet" href="public/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="public/assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="public/assets/css/main.min.css" media="all">


    <script type="text/javascript" src="public/bower_components/matchMedia/matchMedia.js"></script>
    <script type="text/javascript" src="public/bower_components/matchMedia/matchMedia.addListener.js"></script>
    <script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>



</head>
<body class="sidebar_main_open sidebar_main_swipe">
<!-- main header -->
<header id="header_main">
    <div class="header_main_content">
        <nav class="uk-navbar">
            <!-- main sidebar switch -->
            <a href="<?php
            if(isset($_SERVER['HTTP_REFERER']))
            {
                echo $_SERVER['HTTP_REFERER'];
            }
            else{
                echo "#";
            }
            ?>" id="" class="sSwitch sSwitch_left">
                <span class="sSwitchIcon"></span>
            </a>
            <!-- secondary sidebar switch -->
            <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                <span class="sSwitchIcon"></span>
            </a>
            <div id="menu_top" class="uk-float-left uk-hidden-small">
                <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                    <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                    <div class="uk-dropdown uk-dropdown-width-3">
                        <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                            <div class="uk-width-2-3">
                                <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-top uk-margin-bottom uk-text-center" data-uk-grid-margin>
                                    <a href="page_mailbox.html">
                                        <i class="material-icons md-36">&#xE158;</i>
                                        <span class="uk-text-muted uk-display-block">Mailbox</span>
                                    </a>
                                    <a href="page_invoices.html">
                                        <i class="material-icons md-36">&#xE53E;</i>
                                        <span class="uk-text-muted uk-display-block">Invoices</span>
                                    </a>
                                    <a href="page_chat.html">
                                        <i class="material-icons md-36 md-color-red-600">&#xE0B9;</i>
                                        <span class="uk-text-muted uk-display-block">Chat</span>
                                    </a>
                                    <a href="page_scrum_board.html">
                                        <i class="material-icons md-36">&#xE85C;</i>
                                        <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                    </a>
                                    <a href="page_snippets.html">
                                        <i class="material-icons md-36">&#xE86F;</i>
                                        <span class="uk-text-muted uk-display-block">Snippets</span>
                                    </a>
                                    <a href="page_user_profile.html">
                                        <i class="material-icons md-36">&#xE87C;</i>
                                        <span class="uk-text-muted uk-display-block">User profile</span>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <ul class="uk-nav uk-nav-dropdown uk-panel">
                                    <li class="uk-nav-header">Components</li>
                                    <li><a href="components_accordion.html">Accordions</a></li>
                                    <li><a href="components_buttons.html">Buttons</a></li>
                                    <li><a href="components_notifications.html">Notifications</a></li>
                                    <li><a href="components_sortable.html">Sortable</a></li>
                                    <li><a href="components_tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav user_actions">
                    <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>

                    <li data-uk-dropdown="{mode:'click'}">
                        <a href="#" class="user_action_image"><img class="md-user-image" src="public/assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                        <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                            <ul class="uk-nav js-uk-prevent">
                                <li><a href="page_user_profile.html">My profile</a></li>
                                <li><a href="page_settings.html">Settings</a></li>
                                <li><a href="admin.php?c=index&a=logout">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_main_search_form">
        <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
        <form class="uk-form">
            <input type="text" class="header_main_search_input" />
            <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
        </form>
    </div>
</header><!-- main header end -->





<!-- secondary sidebar -->
<aside id="sidebar_secondary">

    <ul class="uk-tab uk-tab-icons uk-tab-grid" data-uk-tab="{connect:'#dashboard_sidebar_tabs', animation:'slide-horizontal'}">
        <li class="uk-active uk-width-1-3"><a href="#"><i class="material-icons">&#xE422;</i></a></li>
        <li class="uk-width-1-3"><a href="#"><i class="material-icons">&#xE0B7;</i></a></li>
        <li class="uk-width-1-3"><a href="#"><i class="material-icons">&#xE8B9;</i></a></li>
    </ul>

</aside><!-- secondary sidebar end -->

<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
                'Source+Code+Pro:400,700:latin',
                'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
</body>

<!-- Mirrored from altair_html.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 09:18:11 GMT -->
</html>
