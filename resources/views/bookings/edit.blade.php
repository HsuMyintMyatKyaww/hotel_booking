<!-- resources/views/rooms/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Room</h2>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="hotel_id">Hotel</label>
                <select class="form-control" id="hotel_id" name="hotel_id" required>
                    @foreach ($hotels as $hotel)
                        <option value="{{ $hotel->id }}" {{ $room->hotel_id == $hotel->id ? 'selected' : '' }}>{{ $hotel->hotel_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="room_type">Room Type</label>
                <select class="form-control" id="room_type" name="room_type" required>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="quad">Quad</option>
                    <option value="king">King</option>
                    <option value="suite">Suite</option>
                    <option value="villa">Villa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>
            <div class="form-group">
                <label for="available">Available</label>
                <select class="form-control" id="available" name="available" required>
                    <option value="1" {{ $room->available ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$room->available ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Room</button>
        </form>
    </div>
@endsection
