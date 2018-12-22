@extends('admin.home') 
@section('content')
@include('admin._navbar')
@include('partials.margin')
<div class="container">
    <table id="contact_table" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @if($contacts->count() > 0)
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5" class="text-center">There are no messages.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
