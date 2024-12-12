@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1>Mentors</h1>
        <a href="{{ route('mentors.create') }}" class="btn btn-primary">Add Mentor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mentors as $mentor)
                    <tr>
                        <td>{{ $mentor->id }}</td>
                        <td>{{ $mentor->name }}</td>
                        <td>{{ $mentor->position }}</td>
                        <td>{{ $mentor->address }}</td>
                        <td>{{ $mentor->gender }}</td>
                        <td>{{ $mentor->phone_number }}</td>
                        <td>
                            <a href="{{ route('mentors.edit', $mentor->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('mentors.destroy', $mentor->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection