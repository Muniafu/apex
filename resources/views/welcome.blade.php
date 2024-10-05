<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Sales</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #232946;
        }

        header {
            text-align: center;
        }

        header h1 {
            font-size: 40px;
            margin-bottom: 15%;
            color: #FFFFFE;
        }

        header p {
            font-size: 28px;
            margin-bottom: 30px;
            color: #EEBBC3;
        }

        .footer {
            margin-top: auto;
            display: flex;
            justify-content: center;
            padding: 20px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        .footer a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-button {
            background-color: #007bff;
            color: white;
            width: 30%;
            text-align: center;
        }

        .signup-button {
            background-color: #28a745;
            color: white;
            width: 30%;
            text-align: center;
        }

        .login-button:hover, .signup-button:hover {
            opacity: 1.2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Apex Sales CRM</h1>
        <p>Your go-to tool for managing sales, tracking deals, and closing with ease!</p>
        @if (Auth::check())
            <p>Hello, <br>
                {{ Auth::user()->name }}</p>
        @endif
    </header>

    <div class="footer">
        @if (Auth::check())
            <a href="{{ route('logout') }}" class="login-button">Logout</a>
        @else
            <a href="{{ route('login') }}" class="login-button">Login</a>
            <a href="{{ route('signup') }}" class="signup-button">Sign Up</a>
        @endif
    </div>
</body>
</html>
