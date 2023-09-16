<!-- resources/views/rooms/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Room List</h2>
        <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Create New Room</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Hotel Name</th>
                    <th>Room Type</th>
                    <th>Image</th>
                    <th>Available</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <!-- <td>{{ $room->id }}</td> -->
                        <td>{{ $room->hotel->hotel_name }}</td>
                        <td>{{ $room->room_type }}</td>
                        <td><img src="{{ asset('storage/' . $room->photo) }}" width="100"></td>
                        <td>{{ $room->available ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this room?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
