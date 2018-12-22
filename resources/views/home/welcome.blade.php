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
