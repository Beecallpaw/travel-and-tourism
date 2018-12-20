@extends('app')
@section('title', 'Create A Post')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Create a new Post</h1>
        <hr> 
        {!! Form::open(['route' => 'posts.store','method'=>'post', 'files'=>true]) !!} 
            {!! Form::label('name','Name : ') !!} 
            {!! Form::text('name', null, ['class'=>'form-control'])!!} 
            {!! Form::label('image','Image : ') !!} 
            {!! Form::file('image', null, ['class'=>'form-control'])!!} 
            {!! Form::label('description','Description : ') !!} 
            {!! Form::textArea('description', null, ['class'=>'form-control'])!!} 
            {!! Form::label('itinerary','Itinerary : ') !!} 
            {!! Form::textArea('itinerary',null,['class'=>'form-control'])!!}
            {!! Form::label('category','Category : ') !!}
            {!! Form::select('category', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}
            {!! Form::submit('Add this Post',['class'=>'btn btn-success'])!!} 
        {!! Form::close() !!}
    </div>
</div>
@endsection