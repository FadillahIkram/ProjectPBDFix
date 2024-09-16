<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('style/image/backgroundLogin.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 8px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .invalid-feedback {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form action="{{ url('/login') }}" method="post">
        @csrf
        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif

        <h1>Login</h1>

        <label for="email_admin">Email:</label>
        <input type="text" name="email_admin" id="email_admin" placeholder="name@example.com" required>

        <label for="kata_sandi_admin">Password:</label>
        <input type="password" name="kata_sandi_admin" id="email_admin" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
