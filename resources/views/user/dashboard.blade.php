@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to Your Dashboard, {{ Auth::user()->name }}!</h1>
        <p>This is where you can view your activities, manage your profile, etc.</p>

        <div class="dashboard-links">
            <ul>
                <li><a href="{{ route('profile') }}">View Profile</a></li>
                <li><a href="{{ route('settings') }}">Settings</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
@endsection
