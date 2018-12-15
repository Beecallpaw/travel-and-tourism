@extends('app')
@section('title', 'home')
@section('content')
@include('admin._navbar')
@endsection
@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session('message') }}
</div>
@endif