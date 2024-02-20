<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include any other styles or external libraries here -->
</head>
<body>

<div class="login-container">
    <form action="{{ route('web-admin.post-login') }}" method="post">
        @csrf
        <h2>Login</h2>

        @if(session('status'))
            <p class="error">{{ session('status') }}</p>
        @endif

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
