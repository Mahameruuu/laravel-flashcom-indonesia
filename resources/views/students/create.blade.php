@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <div class="dashboard-container">    
        <h1>Add Student</h1>
        
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number') }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" class="form-control" required>{{ old('address') }}</textarea>
            </div>

            <!-- Button Group -->
            <div class="form-group d-flex justify-content-between">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </div>
        </form>
    </div>
@endsection
