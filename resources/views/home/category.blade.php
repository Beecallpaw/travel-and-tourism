@extends('app')
 
@section('styles')
    <style>
        p {background-color: transparent !important;}
        a:link {text-decoration: none !important;}
    </style>
@endsection

@section('title', $title) 

@section('content') 
    @include('partials.navbar')
    @include('partials.margin')
    <div class="container">
        @if(!empty($posts))
            <div class="row">
                <div class="col-md-8">
                    @foreach ($posts as $post)
                    <h1>{{$post->name}}</h1>
                    <img src="{{ asset($post->image) }}" height="300px" width="600px" alt="{{$post->name}}">
                    <h3>Description</h3>
                    <p>{{$post->description}}</p>
                    <h3>Itinerary</h3>
                    <p>{!!$post->itinerary!!}</p>
                    @endforeach
                    <hr>
                </div>
            </div>
        @else 
        <p>Sorry No data available for this category. Contact us for more information</p>
        @endif
    </div>
@endsection