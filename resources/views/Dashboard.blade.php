@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <h1>Welcome to the Dashboard</h1>
        <div class="card-row">
            <div class="card item-card">
                <p>Items</p>
                <div class="number">11</div>
            </div>
            <div class="card supplier-card">
                <p>Suppliers</p>
                <div class="number">3</div>
            </div>
            <div class="card customer-card">
                <p>Customers</p>
                <div class="number">11</div>
            </div>
            <div class="card user-card">
                <p>Users</p>
                <div class="number">4</div>
            </div>
        </div>
    </div>
@endsection
