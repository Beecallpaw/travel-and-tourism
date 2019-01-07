@extends('layouts.app') 
@section('title', 'Contact Us') 
@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2>Get in Touch</h2>
        <hr class="primary">
        <p>If you have any questions regarding our services and other queries please fill out the form below and we'll get back
            to you as soon as possible.</p>
    </div>
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <form class="contact-form row" method="POST" action="/contact">
            @csrf
            <div class="col-md-4">
                <label></label>
                <input value="{{old('name')}}" type="text" name="name" required class="form-control" placeholder="Name">                @if($errors->has('name'))
                <strong class="text-danger">{{$errors->first('name')}}</strong> @endif
            </div>
            <div class="col-md-4">
                <label></label>
                <input value="{{old('email')}}" type="email" required name="email" class="form-control" placeholder="Email">                @if($errors->has('email'))
                <strong class="text-danger">{{$errors->first('email')}}</strong> @endif
            </div>
            <div class="col-md-4">
                <label></label>
                <input value="{{old('phone_number')}}" type="text" required name="phone_number" class="form-control" placeholder="Phone Number">                @if($errors->has('phone_number'))
                <strong class="text-danger">{{$errors->first('phone_number')}}</strong> @endif
            </div>
            <div class="col-md-12">
                <label></label>
                <textarea class="form-control" required name="message" rows="9" placeholder="Your message here..">{{old('message')}}</textarea>                @if($errors->has('message'))
                <strong class="text-danger">{{$errors->first('message')}}</strong> @endif
            </div>
            <div class="col-md-4 col-md-offset-4">
                <label></label>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection