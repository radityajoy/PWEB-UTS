<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 p-4 text-white">
        <h1 class="text-xl">@yield('header', 'My Website')</h1>
        <nav class="mt-2">
             <a href="/login" class="text-white mr-4">Login</a>
             <a href="/register" class="text-white">Register</a>
         </nav>
    </header>
    
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 p-4 text-white text-center">
        @include('partials.footer')
    </footer>
</body>
</html>