@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="container">
    <h1>User Dashboard</h1>
    <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>
    <p>Role: {{ Auth::user()->role }}</p>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Last Login:</strong> {{ Auth::user()->last_login ? Auth::user()->last_login->format('Y-m-d H:i:s') : 'Never' }}</p>
        </div>
    </div>
</div>
@endsection
