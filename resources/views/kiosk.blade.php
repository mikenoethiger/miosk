<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Miosk</title>
    <meta name="description" content="Verpflegung für zwischendurch">
    <meta name="author" content="">

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
    <div class="banner dark-translucent-bg padding-bottom-clear" style="background-image:url('images/bottles-low-quality.png'); background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Willkommen bei <strong>Miosk</strong></h2>
                    <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                    <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Informieren Sie sich über aktuelle Preise, Aktionen und Verfügbarkeit von den Produkten.</p>
                </div>
            </div>
        </div>
        <!-- section start -->
        <!-- ================ -->
        <div class="dark-translucent-bg section">
            <div class="container">
                <!-- filters start -->
                <div class=" text-center mb-20">
                    <form class="form-inline" method="post" action="/search">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="search" type="text" class="form-control" placeholder="Produkte durchsuchen">
                        </div>
                        <button type="submit" href="#" class="btn btn-default">Suchen</button>
                    </form>
                </div>
                <!-- filters end -->
            </div>
        </div>
        <!-- section end -->
    </div>
    <!-- banner end -->

    <section class="section default-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="title">Coming Soon!</h1>
                                <p>Legen Sie ein Benutzerkonto an und profitieren Sie von Vorteilen wie z.B. Bestellungen aufgeben, oder Miosk bitten zu öffnen.</p>
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <p><a href="/services" class="btn btn-lg btn-gray-transparent btn-animated">Mehr Erfahren<i class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container light-gray-bg">

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
                        <ul class="nav nav-pills" role="tablist">
                            <li class="{{ $filter == "all" ? "active" : "" }}"><a href="/" role="tab" title="Alle"><i class="icon-star"></i> Alle</a></li>
                            <li class="{{ $filter == "drinks" ? "active" : "" }}"><a href="/drinks" role="tab" title="Getränke"><i class="fa fa-glass"></i> Getränke</a></li>
                            <li class="{{ $filter == "food" ? "active" : "" }}"><a href="/food" role="tab" title="Esswaren"><i class="fa fa-cutlery"></i> Esswaren</a></li>
                        </ul>
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                            <div class="row masonry-grid-fitrows grid-space-10">

                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-xs-6 masonry-grid-item">
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

                                                <div class="elements-list clearfix">
                                                    @if($product->sale_price == null)
                                                        <span class="price">{{ number_format($product->price, 2, ',', '\'') }} CHF</span>
                                                    @else
                                                        <span class="price"><del>{{ number_format($product->price, 2, ',', '\'') }} CHF</del> {{ number_format($product->sale_price, 2, ',', '\'') }} CHF</span>
                                                    @endif

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

@if(\Illuminate\Support\Facades\App::environment('production'))
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71271229-1', 'auto');
    ga('send', 'pageview');

</script>
@endif
</body>
</html>
