<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include any CSS or scripts here -->
</head>
<body>
    <!-- Header section -->
    <header>
        <h1>My Website Header</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 My Website Footer</p>
    </footer>
</body>
</html>
