@extends('app') 
@section('title', 'Edit Post') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    @if (count($errors) > 0) @foreach ($errors->all() as $error)
    <li class="text-danger"> {{$error}} </li>
    @endforeach @endif
    <div class="row">
        <div class="col-lg-8">
            <h1>Edit Post</h1>
            <form action="{{ route('posts.update',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                <input value="{{$post->name}}" type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" cols="5" rows="5" class="form-control" id="description">{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="itinerary">Itinerary</label>
                    <textarea name="itinerary" cols="5" rows="5" class="form-control" id="itinerary">{{$post->itinerary}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" class="form-control" id="category">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->type}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Click to Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
