@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Header -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Forgot Your Password?</h3>
                    <p>Please enter your registered email address to reset your password.</p>
                </div>
                <div class="card-body">
                    <!-- Forgot Password Form -->
                    <form action="/send-password-reset-link" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="d-grid gap-2">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success btn-block">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('login') }}" class="btn btn-link">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
