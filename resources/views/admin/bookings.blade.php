@extends('admin.home') 
@section('content')
    @include('admin._navbar')
    @include('partials.margin')
<div class="container">
    <table id="contact-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Number of people</th>
                <th>Place to go</th>
                <th>Created At</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($bookings->count() > 0) @foreach ($bookings as $booking)
            <tr>
                <td>{{$booking->name}}</td>
                <td>{{$booking->phone_number}}</td>
                <td>{{$booking->people_number}}</td>
                <td>{{$booking->place}}</td>
                <td>{{$booking->created_at->diffForHumans()}}</td>
                <td>
                    <form action="{{ route('booking.destroy', ['id'=>$booking->id]) }}" method="post">
                        @method('DELETE') @csrf
                        <button type="submit" class='btn btn-danger'>Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center">There are no messages.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection