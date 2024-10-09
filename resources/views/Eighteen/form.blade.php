<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <h1>Insert User</h1>
    <form action="{{ url('/user/insert') }}" method="POST">
        @csrf
        
        <label for="uid">User Id:</label>
        <input type="text" id="uid" name="uid" required><br><br>

        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <button type="submit">Insert User</button>
    </form>
</body>
</html>
