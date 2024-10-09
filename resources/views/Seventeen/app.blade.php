<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to CSS if any -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="/Home">Home</a></li>
                <li><a href="/About">About</a></li>
                <li><a href="/Contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Main Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Link to JS if any -->
</body>
</html>
