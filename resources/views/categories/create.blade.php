@extends('app') 
@section('title', 'Create A category') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    @if (count($errors) > 0) @foreach ($errors->all() as $error)
    <li class="text-danger"> {{$error}} </li>
    @endforeach @endif
    <div class="row">
        <div class="col-lg-8">
            <h2 style="text-decoration:underline">Create a new category</h2>
            <hr>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Category Type</label>
                    <input type="text" name="type" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Click to Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection