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
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 style="text-align:center">{{$post->name}}</h1>
            <hr>
            <img src="{{ asset($post->image) }}" height="400px" width="750px" alt="{{$post->name}}">
            <hr>
            <h3>Description</h3>
            <h4 style="line-height:1.4em;">{{$post->description}}</h4>
            <hr>
            <h3>Itinerary</h3>
            <p>{!!$post->itinerary!!}</p>
        </div>
        <aside>
            <a href="{{route('booking',['name'=>$post->name])}}">BOOK NOW</a>
        </aside>
    </div>
</div>
@endsection