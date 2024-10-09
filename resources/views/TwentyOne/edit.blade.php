<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <form action="{{ url('/user/update/' . $user->uid) }}" method="POST">
        @csrf
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" value="{{ $user->uname }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="{{ $user->mobile }}" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $user->city }}" required><br><br>

        <button type="submit">Update User</button>
    </form>
</body>
</html>
