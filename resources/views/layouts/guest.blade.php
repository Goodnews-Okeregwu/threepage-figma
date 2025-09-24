<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing-rendering-services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/asset/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0d0d0d] text-white font-sans">

    <!-- Header -->
    <nav class="flex items-center justify-between px-6 py-4 bg-black text-white">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo" class="h-20 w-auto" />
        </a>

        <!-- Center Nav Links (Desktop) -->
        <div class="hidden md:flex flex-1 justify-center space-x-8">
            <a href="#" class="hover:text-orange-500">Home</a>
            <a href="#" class="hover:text-orange-500">services</a>
            <a href="#" class="hover:text-orange-500">Portfolio</a>
            <a href="#" class="hover:text-orange-500">About</a>
            <a href="#" class="hover:text-orange-500">Careers</a>
            <a href="#" class="hover:text-orange-500">Contact</a>

        </div>

        <!-- Quick Quote Button (Desktop) -->
        <div class="hidden md:block">
            <a href="#" class="px-4 py-2 bg-orange-500 rounded-lg hover:bg-orange-600">
                Quick Quote
            </a>
        </div>

        <!-- Hamburger (Mobile) -->
        <div class="md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu (hidden by default) -->
    <!-- Mobile Menu (hidden by default) -->
    <div id="menu"
        class="hidden flex-col space-y-4 px-6 py-6 bg-black text-white md:hidden transition-all duration-300 ease-in-out">
        <a href="#" class="hover:text-orange-500 block">Home</a>
        <a href="#" class="hover:text-orange-500 block">Services</a>
        <a href="#" class="hover:text-orange-500 block">Portfolio</a>
        <a href="#" class="hover:text-orange-500 block">About</a>
        <a href="#" class="hover:text-orange-500 block">Careers</a>
        <a href="#" class="hover:text-orange-500 block">Contact</a>
        <a href="#" class="px-4 py-2 bg-orange-500 rounded-lg hover:bg-orange-600 text-center block mt-4">
            Quick Quote
        </a>
    </div>


    {{-- Page Content --}}
    <main class="pt-20">
        {{ $slot }}
    </main>


    <!-- Footer -->
    <footer class="bg-[#111] text-gray-400 text-center px-6 py-10">
        <div class="mb-4">
            <a href="#" class="mx-2 hover:text-white text-sm">Services</a>
            <a href="#" class="mx-2 hover:text-white text-sm">Careers</a>
            <a href="#" class="mx-2 hover:text-white text-sm">Contact</a>
        </div>
        <div class="mb-4 space-x-4 text-lg">
            <a href="#" class="hover:text-white"><i class="fab fa-github"></i></a>
            <a href="mailto:yourmail@example.com" class="hover:text-white"><i class="fas fa-envelope"></i></a>
            <a href="#" class="hover:text-white"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="hover:text-white"><i class="fab fa-youtube"></i></a>
            <a href="#" class="hover:text-white"><i class="fab fa-x-twitter"></i></a>
            <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-white"><i class="fab fa-facebook"></i></a>
        </div>

        <p class="text-xs">© 2025 Company Name. All rights reserved.</p>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    </script>



</body>

</html>
