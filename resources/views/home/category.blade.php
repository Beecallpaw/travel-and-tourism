@extends('layouts.app') 
@section('title', $category->type) 
@section('content')
    @include('layouts.partials.navbar')
    @include('partials.margin')
<div class="container">
    @if(!empty($posts))
    <div class="row box-section">
        @foreach ($posts as $post)
        {{-- {{ dd($post->slug) }} --}}
        <div class="col-md-4">
            <div class="box-content">
                <a href=" {{route('show.category',['slug'=>$post->slug])}} ">
                    <img height="200px" width="335px" src="{{asset($post->image)}}" alt="{{$post->name}}">   
                    <h3>{{$post->name}} <span class="price pull-right">$23</span></h3>
                    <strong>{{$post->name}}</strong>  
                    <p>
                        {!! str_limit($post->description, $limit=100, $end=' ... ') !!}
                    </p>  
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Sorry No data available for this category. Contact us for more information</p>
    @endif
</div>
@endsection