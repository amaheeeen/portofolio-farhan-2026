<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Farhan Kholid - Portfolio')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Import CSS */
        @import url("{{ asset('assets/css/style.css') }}");
        
        :root {
            --color-army-dark: #1E2D2B;
            --color-white: #ffffff;
        }
        .text-army { color: var(--color-army-dark); }
        .bg-army { background-color: var(--color-army-dark); }
        .border-army-light { border-color: #4A6E6A; }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; 
            z-index: -1; 
        }
        .hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            object-position: center; 
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); 
            z-index: -1; 
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Inconsolata', 'monospace'],
                    },
                    colors: {
                        'army-dark': '#1E2D2B',
                        'army-light': '#4A6E6A',
                        'accent-gray': '#F3F4F6',
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    @stack('styles')
</head>
<body class="bg-white text-gray-900 font-sans min-h-screen">

    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    <main class="relative overflow-hidden">
        {{-- Konten halaman akan masuk di sini --}}
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        lucide.createIcons();

        // Mobile Menu Logic
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>