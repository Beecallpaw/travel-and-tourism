@extends('admin.home') 
@section('content')
@include('admin._navbar')
<table id="contact_table" class="table table-hover table-dark table-bordered">
    <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->created_at->diffForHumans()}} 
                    {{-- <a id='test' href='#'>Delete this</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
