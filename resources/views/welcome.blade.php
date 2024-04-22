<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Tech-Play Education</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-hero-home font-sans antialiased min-h-screen">
    <header class="flex w-full p-20 text-lg font-semibold">
        @if (Route::has('login'))
            <nav class="flex gap-5">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-yellow-400 ring-1 ring-transparent transition hover:text-yellow-600 transition-all ease-in-out duration-300">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-yellow-400 ring-1 ring-transparent transition hover:text-yellow-600 transition-all ease-in-out duration-300">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-5 py-2 text-black ring-1 ring-transparent transition bg-yellow-400 hover:bg-yellow-600 transition-all ease-in-out duration-300">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
</body>

</html>
