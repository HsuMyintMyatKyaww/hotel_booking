<!-- resources/views/hotels/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Hotel</h2>
        <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="hotel_name">Hotel Name</label>
                <input type="text" class="form-control" id="hotel_name" name="hotel_name" value="{{ $hotel->hotel_name }}" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $hotel->city }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Hotel</button>
        </form>
    </div>
@endsection
