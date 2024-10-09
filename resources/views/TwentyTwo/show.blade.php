<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
</head>
<body>
    <h1>All Users</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>UID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>City</th>
            <th>Action</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->uid }}</td>
            <td>{{ $user->uname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->city }}</td>
            <td>
                <a href="{{ url('/user/delete/' . $user->uid) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
