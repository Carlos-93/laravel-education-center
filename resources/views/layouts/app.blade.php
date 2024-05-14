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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body x-data="{ close: false }" class="font-inter antialiased ">
    <x-banner />

    <div :class="{ 'sm:ml-[16rem]': !close, 'left-0': close }" class="bg-app min-h-screen sm:ml-[16rem] transition-all ease-in-out duration-300">
        <!-- Navigation -->
        <div class="sticky top-0">
            @livewire('navigation-menu')
        </div>

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
