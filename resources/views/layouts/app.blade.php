<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Farhan Kholid - Front-End Engineer & Visual Design Specialist Portfolio">
    <meta name="author" content="Farhan Kholid">
    
    <title>@yield('title', 'Farhan Kholid - Creative Engineer')</title>
    
    {{-- Preconnect to external domains for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    {{-- Google Fonts with display=swap for better performance --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&family=Playfair+Display:ital,wght@0,400;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Limelight&display=swap" rel="stylesheet">
    
    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased selection:bg-black selection:text-[#ccff00]">

    {{-- FIXED NAV BUTTON (Floating) --}}
    <nav class="fixed top-6 right-6 z-50 mix-blend-difference text-white">
        <button onclick="togglePresentationMode()" id="pres-btn" class="bg-white text-black px-4 py-2 border-2 border-black font-mono-pm text-xs uppercase hover:bg-[#ccff00] transition shadow-[4px_4px_0px_0px_white]">
            Toggle Slide Mode
        </button>
    </nav>

    {{-- MAIN WRAPPER --}}
    <main id="main-scroller" class="w-full transition-all duration-500">
        @yield('content')
    </main>

</body>
</html>