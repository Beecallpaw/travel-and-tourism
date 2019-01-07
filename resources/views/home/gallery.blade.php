@extends('layouts.app')

@section('title', 'Gallery') 

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endsection

@section('content')
@include('partials.margin')
    <div class="container-fluid">
        <h1 class="text-center">Enjoy Amazing Images</h1>
         
        <section id="gallery-1" class="content-block section-wrapper gallery-1">
            <div class="container">
        
                <div class="editContent">
                    <ul class="filter">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        @foreach ($categories as $category)
                        <li><a href="#" data-filter=".{!! $category->slug !!}">{{$category->type}}</a></li>
                        @endforeach
                    </ul>
                </div>
        
                <div class="row">
                    <div id="isotope-gallery-container">
                        @foreach($posts as $post)
                            <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper {!! $post->category->slug !!}">
                                <div class="gallery-item">
                                    <a href="{{route('show.category',['slug'=>$post->slug])}}">
                                    <div class="gallery-thumb">
                                        <img src="{{ asset($post->image) }}" width="360px" height="240px" alt="{{$post->name}}">
                                        <div class="image-overlay"></div>
                                    </div>
                                    <div class="gallery-details">
                                        <div class="editContent">
                                            <h5>{{$post->name}}</h5>
                                        </div>
                                        <div class="editContent">
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection