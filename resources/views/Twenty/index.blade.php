<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>
    <h1>All Users</h1>

    <table border="1">
        <thead>
            <tr>
                <th>UID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->uid }}</td>
                    <td>{{ $user->uname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->city }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
