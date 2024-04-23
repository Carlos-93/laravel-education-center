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
    <header class="flex w-full p-20 text-md font-bold">
        @if (Route::has('login'))
            <nav class="flex gap-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="flex gap-3 rounded-md px-3 py-2 text-yellow-400 ring-1 ring-transparent transition hover:text-yellow-600 transition-all ease-in-out duration-300">
                        Continuar como {{ Auth::user()->name }}
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-square-rounded-arrow-right stroke-current" width="25"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 16l4 -4l-4 -4" />
                            <path d="M8 12h8" />
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                        </svg>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-yellow-400 ring-1 ring-transparent transition hover:text-yellow-600 transition-all ease-in-out duration-300">
                        LOGIN
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center gap-3 rounded-md px-4 py-2 text-black ring-1 ring-transparent transition bg-yellow-400 hover:text-white hover:bg-yellow-600 transition-all ease-in-out duration-300 hover:stroke-white">
                            JOIN US
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-square-rounded-arrow-right stroke-current"
                                width="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 16l4 -4l-4 -4" />
                                <path d="M8 12h8" />
                                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                            </svg>
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main>
        <section class="flex flex-col items-start justify-start ml-48 gap-10">
            <p class="text-white text-3xl">Fun Learning at Your Fingertips</p>
            <h1 class="text-6xl text-start text-yellow-400 font-bold">25K+ STUDENTS <br> TRUST US</h1>
            <p class="text-white text-2xl">We transform Education into an <br> Unforgettable Adventure</p>
            <a href="{{ route('register') }}"
                class="rounded-md text-lg px-8 py-2.5 text-yellow-400 font-bold border-yellow-400 border-2 bg-transparent hover:bg-yellow-600 hover:text-white hover:border-yellow-600 transition-all ease-in-out duration-300">
                Discover Our Games
            </a>
        </section>
    </main>
</body>

</html>
