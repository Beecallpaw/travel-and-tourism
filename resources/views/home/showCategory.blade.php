@extends('layouts.app') 
@section('styles')
<style>
    p {
        background-color: transparent !important;
    }

    a:link {
        text-decoration: none !important;
    }
</style>
@endsection
 
@section('title', $post->name) 
@section('content')
    @include('layouts.partials.navbar')
    @include('partials.margin')
<section id="content">
    <section class="section-padding">
        <div class="container">
            <div class="row showcase-section">
                <div class="col-md-6">
                <img src="{{ asset($post->image) }}" height="350px" id="myImg" width="510px" alt="{{$post->name}}">
                </div>
            <a href="{{route('booking', ['name'=>$post->name])}}"><img id="book-img" src="{{asset('assets/pics/book.png')}}" alt="book"></a>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3>{{$post->name}}</h3>
                        <p style="font-size:1.2em;line-height:1.3em;">{{$post->description}}</p>
                    </div>
                </div>
            </div>
            <hr>
            <h3>Travel Plan</h3>
            <p>{!!$post->itinerary!!}</p>
        </div>
    </section>
</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#myImg').click(function({
            console.log('abc');
        }))
    })
</script>
@endsection