<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html ng-app="memberApp" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Miosk - Premium</title>
    <meta name="description" content="Verpflegung für zwischendurch">
    <meta name="author" content="">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/the_project/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/the_project/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/the_project/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/the_project/css/magnific-popup.css" rel="stylesheet">
    <link href="/the_project/css/settings.css" rel="stylesheet">
    <link href="/the_project/css/animations.css" rel="stylesheet">
    <link href="/the_project/css/owl.carousel.css" rel="stylesheet">
    <link href="/the_project/css/owl.transitions.css" rel="stylesheet">
    <link href="/the_project/css/hover-min.css" rel="stylesheet">

    <!-- the project core CSS file -->
    <link href="/the_project/css/style.css" rel="stylesheet">

    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/the_project/css/light_blue.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="/the_project/css/custom.css" rel="stylesheet">

    <link href="/menu.css" rel="stylesheet">
    <link href="/member_app/css/style.css" rel="stylesheet">
    <link href="/member_app/css/ribbon.css" rel="stylesheet">

</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans   ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper light-gray-bg">
    <div ng-controller="MenuController" class="header-top dark ">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-6 col-md-9">
                    <!-- header-top-first start -->
                    <!-- ================ -->
                    <div class="header-top-first clearfix">
                        <div class="social-links hidden-xs circle small">
                            <div class="btn-group">
                                <a href="/member" class="menu-button hidden-xs"><i class="fa fa-home"></i> Shop</a>
                                <a href="/member#/settings" class="menu-button hidden-xs"><i class="fa fa-cog"></i>
                                    Einstellungen</a>
                                <a href="/member#/feedback" class="menu-button hidden-xs"><i class="fa fa-comment"></i>
                                    Feedback</a>
                                <a href="/auth/logout" class="menu-button hidden-xs"><i class="fa fa-sign-out"></i>
                                    Logout</a>
                            </div>
                        </div>

                        <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                            <div class="btn-group">
                                <a href="/member" class="menu-button"><i class="fa fa-home"></i></a>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-ellipsis-h"></i></button>
                                <ul class="dropdown-menu dropdown-animation">
                                    <div class="btn-group">
                                        <a href="/member#/settings" class="menu-button"><i class="fa fa-cog"></i></a>
                                        <a href="/member#/feedback" class="menu-button"><i
                                                    class="fa fa-comment"></i></a>
                                        <a href="/auth/logout" class="menu-button"><i class="fa fa-sign-out"></i></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- header-top-first end -->
                </div>
                <div class="col-xs-8 col-sm-6 col-md-3">

                    <!-- header-top-second start -->
                    <!-- ================ -->
                    <div id="header-top-second" class="clearfix">

                        <!-- header top dropdowns start -->
                        <!-- ================ -->
                        <div class="header-top-dropdown text-right">
                            <div class="btn-group">
                                <button type="button" data-toggle="modal" data-target="#alarmModal"
                                        class="btn btn-default btn-sm"><i class="fa fa-bell"></i></button>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle btn-default btn-sm"
                                        data-toggle="dropdown"><i class="icon-basket-1"></i><span
                                            ng-show="ngCart.getTotalItems()"
                                            class="cart-count default-bg">@{{ ngCart.getTotalItems() }}</span></button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                    <li ng-show="ngCart.getTotalItems()">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="quantity">Anz</th>
                                                <th class="product">Produkt</th>
                                                <th class="amount">Subtotal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr ng-repeat="cartItem in ngCart.getItems()">
                                                <td class="quantity">@{{ cartItem.getQuantity() }} x</td>
                                                <td class="product">@{{ cartItem.getName() }}</td>
                                                <td class="amount">CHF @{{ cartItem.getPrice() | number:2 }}</td>
                                            </tr>
                                            <tr>
                                                <td class="total-quantity" colspan="2">
                                                    Total @{{ ngCart.getTotalItems() }} Produkte
                                                </td>
                                                <td class="total-amount">CHF @{{ ngCart.totalCost() | number:2 }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="panel-body text-right">
                                            <a href="/member#/cart" class="btn btn-group btn-gray btn-sm">Zum
                                                Warenkorb</a>
                                        </div>
                                    </li>
                                    <li ng-show="ngCart.getTotalItems() == 0">
                                        Warenkorb ist leer
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  header top dropdowns end -->
                    </div>
                    <!-- header-top-second end -->
                </div>
            </div>
        </div>
    </div>


    <div ng-controller="AlarmController" class="modal fade" id="alarmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row" ng-hide="alarmTriggered">
                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-8 col-md-offset-2">
                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title text-center"><i class="fa fa-bell pl-10"></i></h1>

                            <div class="separator"></div>
                            <!-- page-title end -->
                            <p class="lead text-center">Klingeln Sie und Miosk wird vielleicht öffnen.</p>

                            <p class="text-center">
                                <a href="" ng-disabled="sending" ng-click="triggerAlarm()" class="btn btn-default btn-lg">Jetzt Klingeln</a>
                            </p>
                        </div>
                        <!-- main end -->
                    </div>
                    <div class="row" ng-show="alarmTriggered">
                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-8 col-md-offset-2">
                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title text-center"><i class="fa fa-bicycle pl-10"></i></h1>

                            <div class="separator"></div>
                            <!-- page-title end -->
                            <p class="lead text-center">Bin auf dem Weg!</p>

                            <p class="text-center">
                                <button ng-click="close()" data-dismiss="modal" class="btn btn-default btn-lg">Zurück</button>
                            </p>
                        </div>
                        <!-- main end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div ng-view></div>

    <!-- banner start -->
    <!-- ================ -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/the_project/js/jquery.min.js"></script>
<script type="text/javascript" src="/the_project/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="/the_project/js/modernizr.js"></script>

<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/the_project/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/the_project/js/jquery.themepunch.revolution.min.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="/the_project/js/isotope.pkgd.min.js"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/the_project/js/jquery.magnific-popup.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="/the_project/js/jquery.waypoints.min.js"></script>

<!-- Count To javascript -->
<script type="text/javascript" src="/the_project/js/jquery.countTo.js"></script>

<!-- Parallax javascript -->
<script src="/the_project/js/jquery.parallax-1.1.3.js"></script>

<!-- Contact form -->
<script src="/the_project/js/jquery.validate.js"></script>

<!-- Owl carousel javascript -->
<script type="text/javascript" src="/the_project/js/owl.carousel.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/the_project/js/jquery.browser.js"></script>
<script type="text/javascript" src="/the_project/js/SmoothScroll.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="/the_project/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="/the_project/js/custom.js"></script>

<script type="text/javascript"
        src="/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

<!-- Dependencies for angular-masonry: https://github.com/passy/angular-masonry -->
<!-- Test -->
<script src="/bower_components/jquery-bridget/jquery-bridget.js"></script>
<script src="/bower_components/ev-emitter/ev-emitter.js"></script>
<script src="/bower_components/desandro-matches-selector/matches-selector.js"></script>
<script src="/bower_components/fizzy-ui-utils/utils.js"></script>
<script src="/bower_components/outlayer/item.js"></script>
<script src="/bower_components/outlayer/outlayer.js"></script>
<script src="/bower_components/masonry/masonry.js"></script>
<script src="/bower_components/imagesloaded/imagesloaded.js"></script>

<script type="text/javascript" src="/bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="/bower_components/angular-masonry/angular-masonry.js"></script>
<script type="text/javascript" src="/bower_components/angular-route/angular-route.min.js"></script>
<script type="text/javascript" src="/bower_components/angular-resource/angular-resource.min.js"></script>
<script type="text/javascript" src="/bower_components/ngCart/dist/ngCart.js"></script>

<script type="text/javascript" src="/member_app/app.js"></script>
<script type="text/javascript" src="/member_app/services/services.js"></script>
<script type="text/javascript" src="/member_app/controllers/shop-controller.js"></script>
<script type="text/javascript" src="/member_app/controllers/menu-controller.js"></script>
<script type="text/javascript" src="/member_app/controllers/cart-controller.js"></script>
<script type="text/javascript" src="/member_app/controllers/checkout-controller.js"></script>
<script type="text/javascript" src="/member_app/controllers/alarm-controller.js"></script>

@if(\Illuminate\Support\Facades\App::environment('production'))
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-71271229-1', 'auto');
        ga('send', 'pageview');

    </script>
@endif
</body>
</html>
