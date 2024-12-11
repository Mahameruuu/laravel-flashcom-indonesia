@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <div class="dashboard-container">
        <h1>Edit Course</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="student_id">Student:</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $course->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="course_name">Course:</label>
                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $course->course_name }}" required>
            </div>

            <div class="form-group">
                <label for="course_date">Course Date:</label>
                <input type="date" name="course_date" id="course_date" class="form-control" value="{{ $course->course_date }}" required>
            </div>

            <div class="form-group d-flex justify-content-between">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update Course</button>
            </div>
        </form>
    </div>
@endsection
