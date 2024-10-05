@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="color: #2c3e50;">Welcome to Apex Sales Dashboard</h1>

    <!-- Custom Dashboard Background -->
    <div class="card p-4" style="background-color: #fef9fa;">

    <!-- Row for Accounts, Contacts and Deals -->
        <div class="row text-center mb-4">

        <!-- accounts Section -->
            <div class="col-md-4">
                <h3 style="color: #3498db;">Accounts</h3>
                <ul class="list-unstyled">
                    @foreach($accounts as $account)
                        <li>{{ $account->name }} - {{ $account->industry }}</li>
                    @endforeach
                </ul>
            </div>

        <!-- Contacts Section -->
            <div class="col-md-4">
                <h3 style="color: #27ae60;">Contacts</h3>
                <ul class="list-unstyled">
                    @foreach($contacts as $contact)
                        <li>{{ $contact->name }} - {{ $contact->email }}</li>
                    @endforeach
                </ul>
            </div>

        <!-- Deals Section -->
            <div class="col-md-4">
                <h3 style="color: #e74c3c;">Deals</h3>
                <ul class="list-unstyled">
                    @foreach($deals as $deal)
                        <li>{{ $deal->title }} - Stage: {{ $deal->stage }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
