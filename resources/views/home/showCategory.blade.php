@extends('app') 
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
    @include('partials.navbar')
    @include('partials.margin')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->name}}</h1>
            <img src="{{ asset($post->image) }}" height="400px" width="600px" alt="{{$post->name}}">
            <h3>Description</h3>
            {{$post->description}} 
            <p>{!!$post->itinerary!!}</p>
        </div>
    </div>
</div>
@endsection