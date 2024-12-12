@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1>Welcome to the Dashboard</h1>
        <div class="card-row">
            <div class="card item-card">
                <p>Student</p>
                <div class="number">{{$jumlahStudent}}</div>
            </div>
            <div class="card supplier-card">
                <p>Course</p>
                <div class="number">{{$jumlahCourse}}</div>
            </div>
        </div>
    </div>
@endsection