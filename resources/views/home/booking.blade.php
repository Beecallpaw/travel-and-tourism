@extends('app')

@section('title', 'Booking') 

@section('content')
    @include('partials.navbar')
    @include('partials.margin')
<form id="booking-form" class="row" method="POST" action="/booking">
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
            <input value="{{old('number')}}" type="number" required name="people_number" class="form-control" placeholder="Number of People">
        </div>
    <div class="col-md-8">
            <label></label>
            <input style="background-color:#36333d !important;" value="{{$name}}" type="text" required name="place" class="form-control" placeholder="Place to Go" readonly="true">
        </div>
    <div class="col-md-8">
        <label></label>
        <button type="submit" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
    </div>
</form>
@endsection