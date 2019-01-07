@extends('layouts.app') 
@section('title','Home') 
@section('content')
    @include('layouts.partials.navbar')
    @include('partials.margin')
<div id="image-slider">
    <img class="mySlides" src="{{asset('assets/pics/Pokhara.jpg')}}">
    <img class="mySlides" src="{{asset('assets/pics/Lumbini.jpg')}}">
    <img class="mySlides" src="{{asset('assets/pics/tilicho.jpg')}}">
    <img class="mySlides" src="{{asset('assets/pics/gumba.jpg')}}">
    <img class="mySlides" src="{{asset('assets/pics/Kathmandu-Durbar-Square-Patan.jpg')}}">
</div>
<hr>
<div id="featured-section">
    <h2>Featured Packages</h2>
    <div class="row">
        @foreach ($featured as $post)
        <div class="col-md-2 col-md-offset-1">
            <a href="{{route('show.category',['slug'=>$post->slug])}}">
            <img src="{{$post->image}}" alt="{{$post->name}}" height="150px" width="200px">
            <h4>{{$post->name}}</h4>
            </a>
        </div>
        @endforeach
    </div>
</div>
{{--
<hr>
<aside id="book-now">
    <a href="{{route('booking')}}">
            <img src="{{asset('assets/pics/bookimg.png')}}" alt="image">
    </a>
</aside> --}}
    @include('partials.footer')
@endsection
 
@section('scripts')
<script>
    var slideIndex = 0; 
    carousel(); 
    function carousel() { 
        var i; 
        var x = document.getElementsByClassName("mySlides"); 
        for (i = 0; i < x.length; i++) { 
            x[i].style.display="none" ; 
        } 
        slideIndex++; 
        if (slideIndex> x.length) {
            slideIndex = 1
        } 
        x[slideIndex-1].style.display = "block"; 
        setTimeout(carousel, 2000); 
    }

</script>
@endsection