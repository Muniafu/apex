@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: #2c3e50;">Welcome to Apex Sales Dashboard</h1>

    <!-- Custom Dashboard Background -->
    <div class="card p-4" style="background-color: #f8f9fa;">
        <!-- Row for Accounts, Contacts, and Deals -->
        <div class="row text-center mb-4 d-flex justify-content-center">
            <!-- Accounts Section -->
            <div class="col-md-4 col-sm-12 mb-3">
                <h3 style="color: #3498db;">Accounts</h3>
                <ul class="list-unstyled">
                    @foreach($accounts as $account)
                        <li>{{ $account->name }} - {{ $account->industry }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Contacts Section -->
            <div class="col-md-4 col-sm-12 mb-3">
                <h3 style="color: #27ae60;">Contacts</h3>
                <ul class="list-unstyled">
                    @foreach($contacts as $contact)
                        <li>{{ $contact->name }} - {{ $contact->email }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Deals Section -->
            <div class="col-md-4 col-sm-12 mb-3">
                <h3 style="color: #e74c3c;">Deals</h3>
                <ul class="list-unstyled">
                    @foreach($deals as $deal)
                        <li>{{ $deal->title }} - Stage: {{ $deal->stage }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Form for Additional Input (Example: Add a new Deal) -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="text-center" style="color: #2c3e50;">Add New Deal</h4>
                <form action="{{ route('deals.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Deal Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="stage">Deal Stage:</label>
                        <input type="text" name="stage" id="stage" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Add Deal</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
