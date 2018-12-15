@extends('app')
  @section('title','Home')
  @section('content')
  @include('partials.navbar')
    
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Nepali Yatra</h1>
                <h3 style="text-align:center;">is an online Nepal Based travel agency committed in the mission of creating happy travelers from all over
                the world with broad smile and fuller satisfied heart.</h3>
            </div>
        </div>
    </header>
    <section id="three" class="no-padding">
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
    </section>
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">About Us</h2>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>High Demand</h3>
                    <div class="media-body media-middle">
                        <p>Nepali yatra is one the most demanded online travel partner in Nepal.</p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeIn">
                    <h3>Affordable</h3>
                    <div class="media-left">
                        <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i class="icon-lg ion-ios-cloud-download-outline"></i></a>
                    </div>
                    <div class="media-body media-middle">
                        <p>Our main Motto is to give the best and bigger satisfaction than the traveler expect within the cheapest fare.</p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Customer Satisfaction</h3>
                    <div class="media-body media-middle">
                        <p>Our Ideology is to provide full support and maintain the level of customer satisfaction with uncompromising integrity of
                        workforce.</p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-people"></i>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeIn">
                    <h3>Popular</h3>
                    <div class="media-left">
                        <i class="icon-lg ion-ios-heart-outline"></i>
                    </div>
                    <div class="media-body media-middle">
                        <p>When you make concept of travelling we starts to make perfect memories of that destination because we know well that your
                        money and time are priceless and we invest it very carefully. May be this is the reason that our main clients are usually
                        same person because 60% of them are regular clients and it really boost our energy level to improve the customer satisfaction
                        day by day.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="galleryImage" class="img-responsive" />
                    <p>
                        <br/>
                        <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
