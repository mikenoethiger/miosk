@extends('admin.base')

@section('content')
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><strong>Produkt</strong> erstellen</h2>
                </div>
            </div>
        </div>

    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form role="form" method="POST" enctype="multipart/form-data"  action="/admin/product">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name eingeben">
                        </div>
                        <div class="form-group">
                            <label>Beschreibung</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Preis</label>
                            <input type="number" step="0.05" class="form-control" id="price" name="price" placeholder="Preis eingeben">
                        </div>
                        <div class="form-group">
                            <label for="sale_price">Aktionspreis</label>
                            <input type="number" step="0.05" class="form-control" id="sale_price" name="sale_price" placeholder="Aktionspreis eingeben">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Bestand</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Bestand eingeben">
                        </div>
                        <div class="form-group">
                            <label for="product_image">Produkt Bild</label>
                            <input type="file" id="product_image" name="product_image">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <!-- pagination end -->
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->
@stop