<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    
    <!-- Your header content goes here -->
    @yield('content') <!-- This is where the dynamic content will be injected -->
    <!-- Include the non-minified jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
