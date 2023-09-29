@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->toDateString() }}</td>
                    <td>{{ $contact->created_at->toTimeString() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
