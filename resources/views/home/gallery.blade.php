@extends('app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endsection
@section('title', 'Gallery')
@section('content')
    @include('partials.navbar')
<div class="container">
    <ul class="rslides">
        <li><img src="http://lorempixel.com/200/200" alt="a"></li>
        <li><img src="http://lorempixel.com/300/200" alt="v"></li>
        <li><img src="http://lorempixel.com/100/200" alt="b"></li>
    </ul>
</div>
{{-- <section id="three" class="no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/PatanDurbarSquare.jpg">
                        <img src="./assets/images/PatanDurbarSquare.jpg" class="img-responsive" alt="Image 1">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/KathmanduDurbarSquare.jpg">
                        <img src="./assets/images/KathmanduDurbarSquare.jpg" class="img-responsive" alt="Image 2">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/PatanDurbarSquare.jpg">
                        <img src="./assets/images/PatanDurbarSquare.jpg" class="img-responsive" alt="Image 3">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/rafting.jpg">
                        <img src="./assets/images/rafting.jpg" class="img-responsive" alt="Image 4">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/sauraha.jpg">
                        <img src="./assets/images/sauraha.jpg" class="img-responsive" alt="Image 5">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/images/chisapani.jpg">
                        <img src="./assets/images/chisapani.jpg" class="img-responsive" alt="Image 6">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>
</section> --}}
@section('scripts')
<script src="{{asset('js/slides.min.js')}}"></script>
<script>
    $(function() {
    $(".rslides").responsiveSlides(
        {
            prevText: "Previous",
            nextText: "Next",
        }
    );
  });
</script>
@endsection