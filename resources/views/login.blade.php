<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #232946;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #8B3103;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #000100FF;
        }

        .login-container label {
            font-size: 16px;
            color: #000100FF;
            display: block;
            margin-bottom: 6px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #232946;
        }

        .login-container button {
            background-color: #5cb85c;
            color: #fff;
            border: none;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.7s ease;
        }

        .login-container button:hover {
            background-color: #232946;
        }

        .login-container .forgot-password {
            text-align: right;
            margin-bottom: 10px;
        }

        .login-container .forgot-password a {
            color: #ccc;
            text-decoration: none;
            font-size: 15px;
        }

        .login-container .forgot-password a:hover {
            text-decoration: underline;
            color: #5cb85c;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <div class="forgot-password">
            <a href="{{route('password.request')}}">Forgot your password?</a>
        </div>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
