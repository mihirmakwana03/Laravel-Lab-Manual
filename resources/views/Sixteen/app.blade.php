<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- Include Header Component -->
    <x-header />

    <!-- Main Content -->
    <div>
        @yield('content')
    </div>

    <!-- Include Footer Component -->
    <x-footer />
</body>
</html>
