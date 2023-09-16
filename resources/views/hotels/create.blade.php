<!-- resources/views/hotels/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Hotel</h2>
        <form action="{{ route('hotels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="hotel_name">Hotel Name</label>
                <input type="text" class="form-control" id="hotel_name" name="hotel_name" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Hotel</button>
        </form>
    </div>
@endsection
