@extends('layouts.app')

@section('title', 'Student List')

@section('content')
    <div class="dashboard-container">
        <h1>Student List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add Student</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <!-- Form untuk Hapus -->
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
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
