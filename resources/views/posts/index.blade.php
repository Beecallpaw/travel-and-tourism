@extends('app') 
@section('title', 'All Posts') 
@section('content')
@include('admin._navbar')
@include('partials.margin')
<div class="container">
    <a href="{{route('posts.create')}}" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Create A New Post
    </a>
    <table id="contact_table" class="table table-bordered">
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
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
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
                        {!! str_limit($post->itinerary, $limit=100, $end=' ... ') !!}
                    </td>
                    <td> 
                        @if($post->category_id == 1)
                            <span>Long Trekking</span>
                        @elseif($post->category_id == 2)
                            <span>Short Trekking</span>
                        @else
                            <span>Tour</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', [ 'id'=>$post->id]) }}" class='btn btn-info'>Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', [ 'id'=>$post->id ]) }}" method="POST">
                            @csrf
                            @method('DELETE') 
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