@extends('app')

@section('title', 'Booking') 

@section('content')
    @include('partials.navbar')
    @include('partials.margin')
<form class="row" method="POST" action="/contact">
    @csrf
    <div class="col-md-8">
        <label></label>
        <input value="{{old('name')}}" type="text" name="name" required class="form-control" placeholder="Name">
    </div>

    <div class="col-md-8">
        <label></label>
        <input value="{{old('phone_number')}}" type="text" required name="phone_number" class="form-control" placeholder="Phone Number">       
    </div>
    <div class="col-md-8">
            <label></label>
            <input value="{{old('number')}}" type="number" required name="number" class="form-control" placeholder="Number of People">
        </div>
    <div class="col-md-8">
            <label></label>
            <input value="{{old('place')}}" type="text" required name="place" class="form-control" placeholder="Place to Go">
        </div>

    <div class="col-md-8">
        <label></label>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
    </div>
</form>


@endsection