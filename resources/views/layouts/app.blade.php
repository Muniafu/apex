<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apex Sales CRM')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom styling for the navbar */
        .navbar {
            box-shadow: 0 4px 2px -2px gray;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #3498db !important;
        }
        .nav-link {
            font-size: 1.1rem;
        }
        .nav-item button {
            background: none;
            border: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <!-- Fixed Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <!-- Dashboard aligned to the left -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
            </ul>

            <!-- Brand centered -->
            <a class="navbar-brand mx-auto" href="{{ route('home') }}">Apex Sales CRM</a>

            <!-- Authentication Links aligned to the right -->
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn nav-link" type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}">Signup</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
