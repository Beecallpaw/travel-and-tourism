@extends('app') 
@section('title', 'Admin Login') 
@section('content')

<form action="login" method="post">
    @csrf
    <div id="admin-form">
        <h2 style="text-decoration:underline">Admin Login Form</h2>
        <br>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="username">Username</label>
                <input type="text" name="username" required class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="password">Password</label>
                <input type="password" name="password" required class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
@endsection