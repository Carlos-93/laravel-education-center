<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div :class="{ 'sm:ml-[16rem]': !close, 'left-0': close }"
        class="bg-app min-h-screen sm:ml-[16rem] transition-all ease-in-out duration-300">
        @livewire('navigation-menu')

        <!-- Page Content -->
        @livewire('sidebar-navigation')
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewire('wire-elements-modal')
    @livewireScripts
</body>

</html>
