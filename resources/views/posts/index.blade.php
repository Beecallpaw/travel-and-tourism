@extends('app')

@section('title', 'All Posts') 

@section('content') 
<a class="text-danger" href="{{ route('posts.create') }}">Click me</a>
@foreach ($posts as $post)
<div class="row">
    <div class="col-md-6">
        <h1>{{$post->id}}</h1>
        <p>{{$post->name}}</p>
        <img src="{{$post->image}}" alt="image">
        <p>{{$post->description}}</p>
        <p>{{$post->itinerary}}</p>
        <p>{{$post->category_id}}</p>
    </div>
</div>
<hr>
@endforeach
@endsection