<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Apex Sales CRM</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #232946;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            background-color: #8B3103;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login {
            text-align: right;
            margin-bottom: 10px;
        }

        .login a {
            color: #ccc;
            text-decoration: none;
            font-size: 15px;
        }

        .login a:hover {
            text-decoration: underline;
            color: #5cb85c;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #232946;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="{{ route('signup.submit') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <div class="login">
                <a href="{{ route('login') }}">Already have an account?</a>
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
