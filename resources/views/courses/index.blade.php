@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="dashboard-container">
        <h1>Courses</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add Course</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Kursus</th>
                    <th>Tanggal</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->student->name }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_date }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No courses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
