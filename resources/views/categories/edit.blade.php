@extends('app') 
@section('title', 'Edit category') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    @if (count($errors) > 0) @foreach ($errors->all() as $error)
    <li class="text-danger"> {{$error}} </li>
    @endforeach @endif
    <div class="row">
        <div class="col-lg-8">
            <h1>Edit this category</h1>
            <form action="{{ route('categories.update',['id' =>$category->id]) }}" method="post">
                @csrf @method('PUT')
                <div class="form-group">
                    <label for="name">Category Type</label>
                    <input value="{{$category->type}}" type="text" name="type" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Click to Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection