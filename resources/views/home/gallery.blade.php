@extends('app')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endsection
@section('title', 'Gallery')
@section('content')
    @include('partials.navbar')
    @include('partials.margin')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <img height="300px" width="390px" src="{{$post->image}}" alt="{{$post->name}}">
            </div>
            @endforeach
        </div>
    </div>
@endsection