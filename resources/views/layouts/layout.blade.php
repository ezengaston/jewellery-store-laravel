<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diamond</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="favicon.svg">
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Nab -->
        <nav class="navbar navbar-expand-md bg-light">
            <div class="container-xxl">
                <a class="navbar-brand" href="/">
                    <img src="logo.svg" alt="Logo" width="50" height="40" class="d-inline-block align-text-top" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                    <div class="navbar-nav">
                        <a class="nav-link text-center px-4 fs-4" href="/">Home</a>
                        <a class="nav-link text-center px-4 fs-4" href="/products">Products</a>
                        <a class="nav-link d-md-none text-center fs-4" href="/login">Login</a>
                        <a class="nav-link btn btn-outline-secondary d-none d-md-inline text-center px-4 fs-4" href="/login">Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content -->
        @yield('content')

        <footer class="container-fluid pt-5 pb-4">
            <div class="text-center fs-5">Copyright 2022</div>
        </footer>
    </body>
</html>