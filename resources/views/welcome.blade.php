<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Mi Primer Proyecto</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://bunny.net">
        <link href="https://bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Importante: Aquí cargamos Bootstrap mediante Vite -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f8f9fa;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                text-align: center;
                background: white;
                padding: 3rem;
                border-radius: 1rem;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            }
            .nav-links {
                margin-top: 2rem;
            }
            .nav-links a {
                margin: 0 15px;
                text-decoration: none;
                color: #0d6efd;
                font-weight: bold;
            }
            .nav-links a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="https://laravel.com" alt="Laravel Logo" width="100">
            <h1 class="mt-4">Bienvenido a Laravel</h1>
            <p class="text-muted">Tu sistema de autenticación está listo.</p>

            <div class="nav-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Ir al Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </body>
</html>
