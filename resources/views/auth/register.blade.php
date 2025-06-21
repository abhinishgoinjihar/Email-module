@extends('layouts.app')

@section('content')
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow-lg border-0 rounded-3 animate__animated animate__fadeIn">
                        <div class="card-body p-5">
                            <h2 class="card-title text-center mb-4 fw-bold">Create an Account</h2>
                            <p class="text-center text-muted mb-4">Enter your details to register</p>
                            <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label fw-medium">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="bi bi-person"></i>
                                        </span>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autofocus placeholder="John Doe">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fw-medium">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required placeholder="your@email.com">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label fw-medium">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required placeholder="••••••••">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input id="password_confirmation" type="password" class="form-control"
                                            name="password_confirmation" required placeholder="••••••••">
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg rounded-pill fw-semibold py-2 transition-all hover:shadow">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <p class="text-center mt-4">Already have an account? <a href="{{ route('login') }}"
                                    class="text-decoration-none">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-primary {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #0b5ed7, #520dc2);
        }
    </style>

    <!-- Include Bootstrap Icons for input group icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
