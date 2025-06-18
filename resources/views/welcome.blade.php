@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to the Application</h1>
        <p>Login to access your dashboard</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
@endsection
