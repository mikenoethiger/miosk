<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Kiosk Halle 4</title>
    <meta name="description" content="Verpflegung für zwischendurch">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
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
    <!-- banner start -->
    <!-- ================ -->
    <div class="dark-bg banner pv-40">
        <div class="container clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">

                <!-- slider revolution start -->
                <!-- ================ -->
                <div class="slider-banner-container">
                    <div class="slider-banner-boxedwidth">
                        <ul class="slides">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Get 50% Sales">

                                <!-- main image -->
                                <img src="/images/muffin.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="bottom"
                                     data-speed="600"
                                     data-start="0">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption sfb fadeout large_white"
                                     data-x="left"
                                     data-y="80"
                                     data-speed="500"
                                     data-start="1000"
                                     data-easing="easeOutQuad"><span class="text-default">Kiosk</span> Halle 4<br> Verplegung für zwischendurch
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption sfb fadeout large_white tp-resizeme hidden-xs"
                                     data-x="left"
                                     data-y="200"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="easeOutQuad"><div class="separator-2 light"></div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption sfb fadeout medium_white hidden-xs"
                                     data-x="left"
                                     data-y="220"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="easeOutQuad"
                                     data-endspeed="600">Melden Sie sich bei Obgfr Nöthiger im Magazin für technisches Material um etwas zu kaufen.
                                </div>
                            </li>
                            <!-- slide 1 end -->
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!-- slider revolution end -->

            </div>
            <!-- slideshow end -->

        </div>
    </div>
    <!-- banner end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    @if(session('message'))
                        <div class="alert alert-icon alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <i class="fa fa-check"></i>
                            {{ session('message') }}
                        </div>
                    @endif
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">

                                @foreach ($products as $product)
                                    <div class="col-md-4 masonry-grid-item">
                                        <div class="listing-item white-bg bordered mb-20">
                                            <div class="overlay-container">
                                                <img src="/product_images/{{ $product->image_path }}" alt="">
                                                <a class="overlay-link popup-img-single" href="/product_images/{{ $product->image_path }}"><i class="fa fa-search-plus"></i></a>
                                                @if($product->quantity == 0)
                                                    <span class="badge" style="color: red; border-color: red;">Ausverkauft</span>
                                                @elseif($product->sale_price != null)
                                                    <span class="badge">{{ $product->getSaleInPercentage() }}% Rabatt</span>
                                                @endif

                                            </div>
                                            <div class="body">
                                                <h3>{{ $product->name }}</h3>
                                                <p class="small"> {{ $product->description }}</p>
                                                <div class="elements-list clearfix">
                                                    @if($product->sale_price == null)
                                                        <span class="price">{{ number_format($product->price, 2, ',', '\'') }} CHF</span>
                                                    @else
                                                        <span class="price"><del>{{ number_format($product->price, 2, ',', '\'') }} CHF</del> {{ number_format($product->sale_price, 2, ',', '\'') }} CHF</span>
                                                    @endif
                                                        <form role="form" method="POST" enctype="multipart/form-data"  action="/ranking">
                                                            {!! csrf_field() !!}
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            <button type="submit" class="pull-right margin-clear btn btn-sm btn-danger btn-animated">Mag ich<i class="fa fa-heart"></i></button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

    <section class="section dark-bg pv-40 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="title">Schlag ein <strong>Produkt</strong> vor</h2>
                                <form class="form-inline margin-clear" method="post" action="/suggestion">
                                    {!! csrf_field() !!}
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="suggestion">Produkt vorschlagen</label>
                                        <input type="text" class="form-control form-control-lg" id="suggestion" placeholder="Bsp.: Red Bull, Twix, Schoko Drink" name="suggestion" required="">
                                        <i class="form-control-feedback"></i>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear">Einsenden <i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
