@extends('app') 
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@endsection
 
@section('title', 'All Posts') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    <a href="{{route('posts.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Create A New Post
    </a>
    <table id="contact-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Post Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Itinerary</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts) > 0) @foreach ($posts as $post)
            <tr>
                <td>
                    {{$post->name}}
                </td>
                <td>
                    <img src="{{$post->image}}" width="180px" height="100px" alt="{{$post->name}}">
                </td>
                <td>
                    {!! str_limit($post->description, $limit=100, $end=' ... ') !!}
                </td>
                <td>
                    Contains the journey Data
                </td>
                <td>
                    {{$post->category->type}}
                </td>
                <td>
                    <a href="{{ route('posts.edit', [ 'slug'=>$post->slug]) }}" class='btn btn-info'>Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('posts.destroy', [ 'id'=>$post->id ]) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class='btn btn-danger'>Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center"> No Posts to show. Please add Categories first and then posts to see here. </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection