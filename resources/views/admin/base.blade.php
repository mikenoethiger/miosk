<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Miosk - Admin</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='/the_project/google_fonts/roboto_font.css' rel='stylesheet' type='text/css'>
    <link href='/the_project/google_fonts/raleway_font.css' rel='stylesheet' type='text/css'>
    <link href='/the_project/google_fonts/pacifico_font.css' rel='stylesheet' type='text/css'>
    <link href='/the_project/google_fonts/pt_serif_font.css' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="/the_project/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/the_project/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="/the_project/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="/the_project/css/magnific-popup.css" rel="stylesheet">
    <link href="/the_project/css/animations.css" rel="stylesheet">
    <link href="/the_project/css/owl.carousel.css" rel="stylesheet">
    <link href="/the_project/css/owl.transitions.css" rel="stylesheet">
    <link href="/the_project/css/hover-min.css" rel="stylesheet">

    <!-- the project core CSS file -->
    <link href="/the_project/css/style.css" rel="stylesheet" >

    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/the_project/css/light_blue.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="/the_project/css/custom.css" rel="stylesheet">
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
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">

        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top dark ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second"  class="clearfix">

                            <!-- header top dropdowns start -->
                            <!-- ================ -->
                            <div class="header-top-dropdown text-right">
                                <div class="btn-group">
                                    <a href="/auth/logout" class="btn btn-default btn-sm"><i class="fa fa-sign-out pr-10"></i> Logout</a>
                                </div>
                            </div>
                            <!--  header top dropdowns end -->
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header  fixed   clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                Miosk
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Angebot / Nachfrage
                            </div>

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-9">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                            <!-- ================ -->
                            <div class="main-navigation  animated with-dropdown-buttons">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->
                                            <ul class="nav navbar-nav ">

                                                <!-- mega-menu start -->
                                                <li class="">
                                                    <a href="/admin" class="" data-toggle="">Dashboard</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produkte</a>
                                                    <ul class="dropdown-menu">
                                                        <li ><a href="/admin/product">Verwalten</a></li>
                                                        <li ><a href="/admin/product/create">Erstellen</a></li>
                                                    </ul>
                                                </li>
                                                <li class="">
                                                    <a href="/admin/suggestions" class="" data-toggle="">Vorschläge</a>
                                                </li>
                                                <li class="">
                                                    <a href="/admin/ranking" class="" data-toggle="">Ranking</a>
                                                </li>
                                            </ul>
                                            <!-- main-menu end -->
                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->

    @yield('content')
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
</body>
</html>
