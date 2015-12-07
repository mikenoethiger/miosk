@extends('admin.base')

@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><strong>Vorschläge</strong> verwalten</h2>
            </div>
        </div>
    </div>
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                @if(session('archivedMessage'))
                    <div class="alert alert-icon alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-check"></i>
                        {{ session('archivedMessage') }}
                    </div>
                @endif
                </div>

                <div class="main col-md-12">
                    <p><a href="/admin/suggestions">Alle Vorschläge</a> | <a href="/admin/suggestions/marked">Markierte Vorschläge</a> | <a href="/admin/suggestions/archived">Archivierte Vorschläge</a></p>
                </div>
                @yield('suggestions')
            </div>
        </div>
    </section>
@stop