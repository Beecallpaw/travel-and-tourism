@extends('layouts.app')

@section('title', 'Gallery') 
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4 col-md-offset-1">
                <a href="{{route('show.category', ['slug'=>$post->slug])}}">
                <img height="300px" width="390px" src="{{$post->image}}" alt="{{$post->name}}">
                </a>
                <hr>
            </div>
            @endforeach
        </div>
    </div>
@endsection