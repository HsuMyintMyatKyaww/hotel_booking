<!-- resources/views/hotels/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Hotel List</h2>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary mb-3">Create New Hotel</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Hotel Name</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <!-- <td>{{ $hotel->id }}</td> -->
                        <td>{{ $hotel->hotel_name }}</td>
                        <td>{{ $hotel->city }}</td>
                        <td>
                            <!-- <a href="" class="btn btn-info btn-sm">View</a> -->
                            <!-- <a href="" class="btn btn-primary btn-sm">Edit</a> -->
                            <a href="{{ route('hotels.edit', $hotel->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this hotel?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
