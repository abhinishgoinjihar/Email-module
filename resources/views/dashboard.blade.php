@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4 fw-bold">Welcome, {{ Auth::user()->name }}!</h2>
                        <p class="text-center text-muted mb-4">Here's your account information:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-medium">Name:</span>
                                <span>{{ Auth::user()->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-medium">Email:</span>
                                <span>{{ Auth::user()->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
