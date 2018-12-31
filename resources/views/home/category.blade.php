@extends('app')

@section('title', $title) 

@section('content') 
    @include('partials.navbar')
    @include('partials.margin')
    <div class="container">
        @if(!empty($posts))
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-6">
                    <h1>{{$post->name}}</h1>
                    <img src="{{ asset($post->image) }}" height="300px" width="400px" alt="{{$post->name}}">
                    <h3>Description</h3>
                    <p>{!! str_limit($post->description, $limit=50, $end=' ... ') !!}</p>                    
                <a href="{{route('show.category', ['slug'=>$post->slug])}}">See more</a>
                </div>
                @endforeach
            </div>
        @else 
        <p>Sorry No data available for this category. Contact us for more information</p>
        @endif
    </div>
@endsection