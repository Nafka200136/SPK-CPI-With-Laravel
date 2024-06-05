<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK CPI</title>

    <link rel="icon" href="{{ asset('assets/img/Favicon-FTIK-USM.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <!-- Logo -->
                <div>
                    <a href="/" class="flex items-center py-4 px-2">
                        <img src="{{ asset('assets/img/Favicon-FTIK-USM.png') }}" alt="Logo" class="h-10 w-10 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">SPK CPI</span>
                    </a>
                </div>
            </div>
            <!-- Primary Navbar items -->
            @if(Route::has('login'))
                <div class="hidden md:flex items-center space-x-1">
                    @auth
                        <a href="{{ route('dashboard') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Login</a>
                        @if(Route::has('register'))
                            <a href="{{ route('register') }}" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-blue-500" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="hidden mobile-menu">
        @if(Route::has('login'))
            <ul class="">
                @auth
                    <li><a href="{{ route('dashboard') }}" class="block text-sm px-2 py-4 text-gray-500 hover:bg-gray-200 transition duration-300">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="block text-sm px-2 py-4 text-gray-500 hover:bg-gray-200 transition duration-300">Login</a></li>
                    @if(Route::has('register'))
                        <li><a href="{{ route('register') }}" class="block text-sm px-2 py-4 text-gray-500 hover:bg-gray-200 transition duration-300">Register</a></li>
                    @endif
                @endauth
            </ul>
        @endif
    </div>
</nav>

<!-- Page Content -->
<main>
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-white shadow mt-8">
    <div class="max-w-6xl mx-auto px-4 py-6">
        <div class="flex justify-between items-center">
            <p class="text-gray-500 text-sm">© 2024 SPK CPI. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-500 hover:text-blue-500 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c6.627 0 12 5.373 12 12 0 4.991-3.657 9.136-8.438 10.326-.617.113-.844-.267-.844-.593 0-.293.01-1.07.016-2.1 3.436.744 4.165-1.652 4.165-1.652.562-1.428 1.373-1.809 1.373-1.809 1.12-.764-.085-.748-.085-.748-1.237-.086-1.888 1.202-1.888 1.202-1.104 1.896-2.896 1.348-3.605 1.031-.112-.798-.431-1.348-.782-1.659 2.74-.312 5.62-1.367 5.62-6.086 0-1.345-.465-2.444-1.235-3.305.124-.313.535-1.561-.117-3.256 0 0-1.01-.323-3.314 1.23-.961-.267-1.99-.4-3.01-.404-1.02.004-2.05.137-3.01.404-2.303-1.553-3.312-1.23-3.312-1.23-.654 1.695-.243 2.943-.12 3.256-.77.861-1.235 1.96-1.235 3.305 0 4.729 2.88 5.772 5.625 6.077-.434.375-.82 1.114-.82 2.244 0 1.62.014 2.924.014 3.324 0 .329-.225.71-.848.591C3.657 23.299 0 19.154 0 14.163c0-6.627 5.373-12 12-12z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-500 hover:text-blue-500 transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.83.656-2.828.775a4.92 4.92 0 0 0 2.165-2.717c-.951.555-2.005.959-3.127 1.175a4.916 4.916 0 0 0-8.373 4.482c-4.084-.205-7.697-2.164-10.125-5.144a4.822 4.822 0 0 0-.665 2.475c0 1.71.87 3.213 2.19 4.096a4.904 4.904 0 0 1-2.229-.616c-.054 1.803 1.257 3.506 3.115 3.878a4.902 4.902 0 0 1-2.224.085c.626 1.956 2.444 3.379 4.6 3.419a9.863 9.863 0 0 1-6.102 2.105c-.398 0-.79-.023-1.17-.069a13.933 13.933 0 0 0 7.557 2.213c9.054 0 14-7.496 14-13.986 0-.213-.005-.425-.014-.637A10.025 10.025 0 0 0 24 4.557z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<script>
    // Toggle mobile menu
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
