@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Booking List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>Hotel</th>
                <th>Room Type</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
                <th>Action</th> <!-- Add this column for the button -->
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <!-- <td>{{ $booking->id }}</td> -->
                    <td>{{ optional($booking->hotel)->hotel_name }}</td>
                    <td>{{ optional($booking->room)->room_type }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->time }}</td>
                    <td>{{ $booking->message }}</td>
                    <td>
                        <form action="{{ route('rooms.updateAvailability', ['room' => $booking->room->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success btn-sm">Mark Available</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
