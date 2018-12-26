@extends('app') 
@section('title','Home') 
@section('content')
    @include('partials.navbar')
    @include('partials.margin')
<div id="image-slider">
    <img class="mySlides" src="http://lorempixel.com/993/493">
</div>
<div id="featured-section">
    <h3>Featured Packages</h3>
    @foreach ($featured as $post)
        <ul>
        <a href="#">{{$post->name}}</a>
        </ul>
    @endforeach
</div>
<hr>
<aside id="book-now">
    <a href="{{route('booking')}}">
            <img src="{{asset('assets/pics/bookimg.png')}}" alt="image">
        </a>
</aside>
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