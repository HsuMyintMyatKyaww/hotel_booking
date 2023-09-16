@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Room Details at {{ $hotel->hotel_name }}</h2>
        <a href="{{ route('rooms.index', ['hotel_id' => $hotel->id]) }}" class="btn btn-secondary mb-3">Back to Rooms</a>
        <div class="card">
            <img src="{{ asset('storage/' . $room->photo) }}" class="card-img-top" alt="Room Photo">
            <div class="card-body">
                <h5 class="card-title">{{ $room->room_type }}</h5>
                <p class="card-text">
                    @if ($room->available)
                        Available
                    @else
                        Not available
                    @endif
                </p>
                @if ($room->available)
                    <a href="{{ route('bookings.create', ['hotel_id' => $hotel->id, 'room_id' => $room->id]) }}" class="btn btn-primary">Book Now</a>
                @endif
            </div>
        </div>
    </div>
@endsection
