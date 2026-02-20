<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Farhan Kholid - UI/UX Designer & Graphic Designer">
    <meta name="author" content="Farhan Kholid">
    
    <title>@yield('title', 'Farhan Kholid - Creative Portfolio')</title>
    
    {{-- Preconnect to external domains --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.simpleicons.org">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    {{-- Google Fonts: Inter (UI), Syne (Display), Space Mono (Data) --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Syne:wght@400;700;800&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Global Styles for Faded Green Glass */
        html, body {
            margin: 0;
            padding: 0;
            background-color: #ecfdf5; /* Emerald 50 (Very light mint/sage) */
            color: #064e3b; /* Emerald 900 (Deep Green Text) */
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #d1fae5; 
        }
        ::-webkit-scrollbar-thumb {
            background: #6ee7b7; 
            border-radius: 5px;
            border: 2px solid #d1fae5;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #34d399; 
        }

        /* Font Families */
        .font-syne { font-family: 'Syne', sans-serif; }
        .font-mono { font-family: 'Space Mono', monospace; }
        .font-sans { font-family: 'Inter', sans-serif; }

        /* Liquid Mesh Animation (Living Liquid) */
        @keyframes liquid-drift {
            0% { transform: translate(0, 0) scale(1) rotate(0deg); }
            33% { transform: translate(30px, -20px) scale(1.1) rotate(10deg); }
            66% { transform: translate(-20px, 20px) scale(0.95) rotate(-5deg); }
            100% { transform: translate(0, 0) scale(1) rotate(0deg); }
        }
        
        /* Floating Animation */
        @keyframes float-y {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        /* Liquid Blobs (Faded Green Theme) */
        .liquid-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px); /* Heavy blur for soft fade */
            opacity: 0.8; 
            animation: liquid-drift 25s infinite alternate ease-in-out;
            z-index: -1;
            pointer-events: none;
            mix-blend-mode: multiply; 
        }

        /* Faded Glass Utilities */
        .glass-faded {
            background: rgba(255, 255, 255, 0.3); 
            backdrop-filter: blur(20px); 
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5); 
            box-shadow: 0 8px 32px 0 rgba(6, 78, 59, 0.05); /* Soft emerald shadow */
            transition: all 0.3s ease;
        }
        
        .glass-faded:hover {
            background: rgba(255, 255, 255, 0.45);
            border-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 8px 32px 0 rgba(6, 78, 59, 0.1);
        }
        
        /* Strong Glass (For Hero) */
        .glass-strong {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
        }

        /* Glass Pill Nav */
        .glass-nav {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 4px 15px rgba(6, 78, 59, 0.05);
        }
        
        /* Glass Chip (Skill Badge) */
        .glass-chip {
            background: linear-gradient(135deg, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.3) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 2px 4px 10px rgba(6, 78, 59, 0.05);
            transition: transform 0.2s;
        }
        .glass-chip:hover {
             transform: translateY(-3px) scale(1.05);
             background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.5) 100%);
        }
    </style>
</head>
<body class="antialiased selection:bg-emerald-200 selection:text-emerald-900">

    {{-- FLOATING NAVBAR (Pill) --}}
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-[100] w-[90%] max-w-lg">
        <div class="glass-nav rounded-full px-2 py-2 flex items-center justify-between transition-transform hover:scale-[1.02] duration-300">
            
            {{-- Logo --}}
            <a href="#" class="w-10 h-10 rounded-full bg-white flex items-center justify-center font-syne font-bold text-emerald-800 shadow-sm ml-1 hover:bg-emerald-50 transition">FK</a>
            
            {{-- Links --}}
            <ul class="flex items-center gap-6 font-sans text-xs font-semibold text-emerald-800/80">
                <li><a href="#hero" class="hover:text-emerald-600 transition">Home</a></li>
                <li><a href="#about" class="hover:text-emerald-600 transition">About</a></li>
                <li><a href="#work" class="hover:text-emerald-600 transition">Work</a></li>
                <li><a href="#contact" class="hover:text-emerald-600 transition">Contact</a></li>
            </ul>
            
            {{-- Social Orb (One for brevity, rest in hero) --}}
            <a href="mailto:farhankholid20@gmail.com" class="w-10 h-10 rounded-full bg-gradient-to-tr from-emerald-500 to-teal-500 flex items-center justify-center text-white shadow-md hover:scale-110 transition mr-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </a>
        </div>
    </nav>

    {{-- MAIN WRAPPER --}}
    <main class="relative w-full min-h-screen">
        {{-- Global Faded Green Mesh Background --}}
        <div class="fixed inset-0 w-full h-full overflow-hidden pointer-events-none -z-10 bg-[#ecfdf5]">
            {{-- Sage Green Blob --}}
            <div class="liquid-blob blob-1" style="width: 70vw; height: 70vw; background: #d1fae5; top: -30%; left: -10%; animation-duration: 25s;"></div>
            {{-- Mint Blob --}}
            <div class="liquid-blob blob-2" style="width: 60vw; height: 60vw; background: #a7f3d0; bottom: -20%; right: -20%; animation-duration: 30s;"></div>
            {{-- Faded Emerald Blob --}}
            <div class="liquid-blob blob-3" style="width: 50vw; height: 50vw; background: #6ee7b7; top: 30%; right: 10%; animation-duration: 35s;"></div>
            {{-- White/Light Blob for airiness --}}
            <div class="liquid-blob blob-4" style="width: 40vw; height: 40vw; background: #ffffff; bottom: 10%; left: 0%; animation-duration: 28s; opacity: 0.5;"></div>
            
            {{-- Noise Texture (Subtle) --}}
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjAwIDIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZmlsdGVyIGlkPSJub2lzZUZpbHRlciI+PGZlVHVyYnVsZW5jZSB0eXBlPSJmcmFjdGFsTm9pc2UiIGJhc2VGcmVxdWVuY3k9IjAuNjUiIG51bU9jdGF2ZXM9IjMiIHN0aXRjaFRpbGVzPSJzdGl0Y2giLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWx0ZXI9InVybCgjbm9pc2VGaWx0ZXIpIiBvcGFjaXR5PSIwLjUiLz48L3N2Zz4=')] opacity-[0.03] mix-blend-overlay"></div>
        </div>

        @yield('content')
    </main>
    
    {{-- Scripts --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.reveal-on-scroll').forEach((el) => {
                el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-800', 'ease-out');
                observer.observe(el);
            });
        });
    </script>
</body>
</html>