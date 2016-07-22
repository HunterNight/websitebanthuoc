<!-- main sidebar -->
<aside id="sidebar_main">
    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="admin.php" class="sSidebar_hide"><img src="public/assets/img/logo_main.png" alt="" height="15" width="71"/></a>
            <a href="admin.php" class="sSidebar_show"><img src="public/assets/img/logo_main_small.png" alt="" height="32" width="32"/></a>
        </div>
        <div class="sidebar_actions">
            <select id="lang_switcher" name="lang_switcher">
                <option value="gb" selected>English</option>
            </select>
        </div>
    </div>
    <div class="menu_section">
        <ul>
            <li class="current_section" title="Dashboard">
                <a href="admin.php?c=index&a=dashboard">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">group</i></span>
                    <span class="menu_title">Thành Viên</span>
                </a>
                <ul>
                    <li><a href="admin.php?c=user&a=getuser">Danh sách thành viên</a></li>
                    <li><a href="admin.php?c=user&a=add">Thêm thành viên</a></li>
                </ul>
            </li>
            <li>
            <a href="#">
                <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                <span class="menu_title">Danh mục</span>
            </a>
            <ul>
                <li><a href="admin.php?c=category&a=get">Danh sách danh mục </a></li>
                <li><a href="admin.php?c=category&a=insert">Thêm Danh mục</a></li>
            </ul>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">business</i></span>
                    <span class="menu_title">Nhà cung cấp</span>
                </a>
                <ul>
                    <li><a href="admin.php?c=supplier&a=get">Danh sách nhà cung cấp  </a></li>
                    <li><a href="admin.php?c=supplier&a=insert">Thêm nhà cung cấp </a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">shopping_basket</i></span>
                    <span class="menu_title">Sản phẩm</span>
                </a>
                <ul>
                    <li><a href="admin.php?c=product&a=get">Danh sách nhà sản phẩm</a></li>
                    <li><a href="admin.php?c=product&a=insert">Thêm sản phẩm</a></li>
                </ul>
            </li>
            <li>
                <a href="admin.php?c=order&a=get">
                    <span class="menu_icon"><i class="material-icons"></i></span>
                    <span class="menu_title">Đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="admin.php?c=about&a=edit">
                    <span class="menu_icon"><i class="material-icons">keyboard</i></span>
                    <span class="menu_title">About</span>
                </a>
            </li>

        </ul>
    </div>
</aside><!-- main sidebar end -->

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
<script src="public/assets/js/pages/page_invoices.min.js"></script>
<!-- common functions -->
<script src="public/assets/js/common.min.js"></script>
<!-- uikit functions -->
<script src="public/assets/js/uikit_custom.min.js"></script>
<!-- altair common functions/helpers -->
<script src="public/assets/js/altair_admin_common.min.js"></script>

<!-- page specific plugins -->
<!-- d3 -->
<script src="public/bower_components/d3/d3.min.js"></script>
<!-- metrics graphics (charts) -->
<script src="public/bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
<!-- chartist (charts) -->
<script src="public/bower_components/chartist/dist/chartist.min.js"></script>
<!-- maplace (google maps) -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="public/bower_components/maplace.js/src/maplace-0.1.3.js"></script>
<!-- peity (small charts) -->
<script src="public/bower_components/peity/jquery.peity.min.js"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="public/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- countUp -->
<script src="public/bower_components/countUp.js/countUp.min.js"></script>
<!-- handlebars.js -->
<script src="public/bower_components/handlebars/handlebars.min.js"></script>
<script src="public/assets/js/custom/handlebars_helpers.min.js"></script>
<!-- CLNDR -->
<script src="public/bower_components/clndr/src/clndr.js"></script>
<!-- fitvids -->
<script src="public/bower_components/fitvids/jquery.fitvids.js"></script>

<!--  dashbord functions -->
<script src="public/assets/js/pages/dashboard.min.js"></script>
<!-- parsley (validation) -->
<script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
</script>
<script src="public/bower_components/parsleyjs/dist/parsley.min.js"></script>

<!--  forms validation functions -->
<script src="public/assets/js/pages/forms_validation.min.js"></script>
<script>
    $(function() {
        // enable hires images
        altair_helpers.retina_images();
        // fastClick (touch devices)
        if(Modernizr.touch) {
            FastClick.attach(document.body);
        }
    });
</script>


<div id="style_switcher">
    <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
    <div class="uk-margin-medium-bottom">
        <h4 class="heading_c uk-margin-bottom">Colors</h4>
        <ul class="switcher_app_themes" id="theme_switcher">
            <li class="app_style_default active_theme" data-app-theme="">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_a" data-app-theme="app_theme_a">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_b" data-app-theme="app_theme_b">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_c" data-app-theme="app_theme_c">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_d" data-app-theme="app_theme_d">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_e" data-app-theme="app_theme_e">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_f" data-app-theme="app_theme_f">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_g" data-app-theme="app_theme_g">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
        </ul>
    </div>
    <div class="uk-visible-large">
        <h4 class="heading_c">Sidebar</h4>
        <p>
            <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
            <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
        </p>
    </div>
</div>

<script>
    $(function() {
        var $switcher = $('#style_switcher'),
            $switcher_toggle = $('#style_switcher_toggle'),
            $theme_switcher = $('#theme_switcher'),
            $mini_sidebar_toggle = $('#style_sidebar_mini');

        $switcher_toggle.click(function(e) {
            e.preventDefault();
            $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function(e) {
            e.preventDefault();
            var $this = $(this),
                this_theme = $this.attr('data-app-theme');

            $theme_switcher.children('li').removeClass('active_theme');
            $(this).addClass('active_theme');
            $('body')
                .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g')
                .addClass(this_theme);

            if(this_theme == '') {
                localStorage.removeItem('altair_theme');
            } else {
                localStorage.setItem("altair_theme", this_theme);
            }

        });

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $('body').hasClass('sidebar_mini')) {
            $mini_sidebar_toggle.iCheck('check');
        }

        // toggle mini sidebar
        $mini_sidebar_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_mini", '1');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            });

        // hide style switcher
        $document.on('click keyup', function(e) {
            if( $switcher.hasClass('switcher_active') ) {
                if (
                    ( !$(e.target).closest($switcher).length )
                    || ( e.keyCode == 27 )
                ) {
                    $switcher.removeClass('switcher_active');
                }
            }
        });

        if(localStorage.getItem("altair_theme") !== null) {
            $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
        }
    });
</script>

<!-- page specific plugins -->
<!-- kendo UI -->
<script src="public/assets/js/kendoui_custom.min.js"></script>

<!--  kendoui functions -->
<script src="public/assets/js/pages/kendoui.min.js"></script>

<script>
    $(function() {
        // enable hires images
        altair_helpers.retina_images();
        // fastClick (touch devices)
        if(Modernizr.touch) {
            FastClick.attach(document.body);
        }
    });
</script>
<script>
    $(function() {
        // enable hires images
        altair_helpers.retina_images();
        // fastClick (touch devices)
        if(Modernizr.touch) {
            FastClick.attach(document.body);
        }
    });
</script>
<script>
    $(function() {
        var $switcher = $('#style_switcher'),
            $switcher_toggle = $('#style_switcher_toggle'),
            $theme_switcher = $('#theme_switcher'),
            $mini_sidebar_toggle = $('#style_sidebar_mini');

        $switcher_toggle.click(function(e) {
            e.preventDefault();
            $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function(e) {
            e.preventDefault();
            var $this = $(this),
                this_theme = $this.attr('data-app-theme');

            $theme_switcher.children('li').removeClass('active_theme');
            $(this).addClass('active_theme');
            $('body')
                .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g')
                .addClass(this_theme);

            if(this_theme == '') {
                localStorage.removeItem('altair_theme');
            } else {
                localStorage.setItem("altair_theme", this_theme);
            }

        });

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $('body').hasClass('sidebar_mini')) {
            $mini_sidebar_toggle.iCheck('check');
        }

        // toggle mini sidebar
        $mini_sidebar_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_mini", '1');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            });

        // hide style switcher
        $document.on('click keyup', function(e) {
            if( $switcher.hasClass('switcher_active') ) {
                if (
                    ( !$(e.target).closest($switcher).length )
                    || ( e.keyCode == 27 )
                ) {
                    $switcher.removeClass('switcher_active');
                }
            }
        });

        if(localStorage.getItem("altair_theme") !== null) {
            $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
        }
    });
</script>
