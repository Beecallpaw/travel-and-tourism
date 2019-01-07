@extends('layouts.app') 
@section('title', 'Contact Us') 
@section('styles')
<style>
.media-right>i,.media-left>i{
    font-size: 6em;
}
</style>
@endsection
@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h2 class="text-center text-primary">About Us</h2>
            <hr>
            <div class="media fadeInLeft wow">
                <h3>Nepali Yatra</h3>
                <p style="text-align:left;">is an online Nepal Based travel agency committed in the mission of creating happy travelers from all over
                    the world with broad smile and fuller satisfied heart.</p>
            </div>
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
                    <i class="icon-lg ion-ios-cloud-download-outline"></i>
                </div>
                <div class="media-body media-middle">
                    <p>Our main Motto is to give the best and bigger satisfaction than the traveler expect within the cheapest
                        fare.
                    </p>
                </div>
            </div>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Customer Satisfaction</h3>
                <div class="media-body media-middle">
                    <p>Our Ideology is to provide full support and maintain the level of customer satisfaction with uncompromising
                        integrity of workforce.
                    </p>
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
                    <p>When you make concept of travelling we starts to make perfect memories of that destination because we
                        know well that your money and time are priceless and we invest it very carefully. May be this is
                        the reason that our main clients are usually same person because 60% of them are regular clients
                        and it really boost our energy level to improve the customer satisfaction day by day.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection