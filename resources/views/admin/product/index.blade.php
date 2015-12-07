@extends('admin.base')

@section('content')
    <div class="banner border-clear light-translucent-bg" style="background-image:url('images/shop-banner.jpg');background-position: 50% 32%;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><strong>Produkte</strong> verwalten</h2>
                </div>
            </div>
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
                                            <div class="overlay-to-top links">
														<span class="small">
															<a href="#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
															<a href="#" class="btn-sm-link"><i class="icon-link pr-5"></i>View Details</a>
														</span>
                                            </div>
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
                                                <a href="/admin/product/{{ $product->id }}/edit" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Bearbeiten<i class="fa fa-edit"></i></a>
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

    <!-- section start -->
    <!-- ================ -->

    <!-- section end -->
    @stop