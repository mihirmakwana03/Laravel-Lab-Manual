<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>