<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
</head>
<body>
    <h1>Search User by Name</h1>

    <form action="{{ url('/search') }}" method="POST">
        @csrf
        <label for="uname">Enter Name:</label>
        <input type="text" id="uname" name="uname" required>
        <button type="submit">Search</button>
    </form>

    @if(isset($users))
        <h2>Search Results for "{{ $searchTerm }}"</h2>
        @if(count($users) > 0)
            <table border="1">
                <tr>
                    <th>UID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->uid }}</td>
                    <td>{{ $user->uname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->city }}</td>
                </tr>
                @endforeach
            </table>
        @else
            <p>No users found.</p>
        @endif
    @endif
</body>
</html>
