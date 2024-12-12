@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1>Edit Mentor</h1>
        <form action="{{ route('mentors.update', $mentor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $mentor->name }}" required>
            </div>

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $mentor->position }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $mentor->email }}">
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $mentor->phone_number }}">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ $mentor->address }}</textarea>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="Laki-laki" {{ ($mentor->gender == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ ($mentor->gender == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
                    <option value="other" {{ ($mentor->gender == 'other') ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Mentor</button>
        </form>
    </div>
@endsection