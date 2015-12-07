<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Miosk login</title>
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
<body class="no-trans" style="height: 100%;">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper" style="height: 100%;">
    <!-- banner start -->
    <!-- ================ -->
    <div class="pv-40 dark-translucent-bg" style="height: 100%;">
        <div class="container">
            <div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                <!-- logo -->
                <div id="logo" class="logo">
                    <h3 class="margin-clear"><a href="/" class="logo-font link-light"><span class="text-default">Miosk</span></a></h3>
                </div>
                <!-- name-and-slogan -->
                <p class="small"></p>
                <div class="form-block center-block p-30 light-gray-bg border-clear">
                    <h2 class="title text-left">Login</h2>
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form class="form-horizontal text-left" method="post" action="/auth/login">
                        {!! csrf_field() !!}
                        <div class="form-group has-feedback">
                            <label for="inputUserName" class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name="email" placeholder="User Name" required>
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <i class="fa fa-lock form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->



</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/the_project/js/jquery.min.js"></script>
<script type="text/javascript" src="/the_project/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="/the_project/js/modernizr.js"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/the_project/js/jquery.magnific-popup.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="/the_project/js/jquery.waypoints.min.js"></script>

<!-- Contact form -->
<script src="/the_project/js/jquery.validate.js"></script>

<!-- Owl carousel javascript -->
<script type="text/javascript" src="/the_project/js/owl.carousel.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/the_project/js/SmoothScroll.js"></script>

<!-- Count Down javascript -->

<!-- Initialization of Plugins -->
<script type="text/javascript" src="/the_project/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="/the_project/js/custom.js"></script>
</body>
</html>
