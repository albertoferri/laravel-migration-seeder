<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titolo</title>
    
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials/header')

    @yield('content')
   
</body>
</html>