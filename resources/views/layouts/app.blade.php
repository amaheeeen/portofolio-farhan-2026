<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Farhan Kholid - Creative Engineer')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&family=Playfair+Display:ital,wght@0,400;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Limelight&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* --- POSTMODERN VARIABLES --- */
        :root {
            --pm-black: #1a1a1a;
            --pm-white: #ffffff;
            --pm-paper: #f4f4f0;
            --pm-neon: #ccff00; /* Acid Green */
            --pm-orange: #ff4d00; /* International Orange */
        }

        body {
            background-color: var(--pm-paper);
            color: var(--pm-black);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Typography */
        .font-serif-pm { font-family: 'Playfair Display', serif; }
        .font-mono-pm { font-family: 'Space Mono', monospace; }
        .font-lime { font-family: 'Limelight', cursive; }

        /* Brutalist Utilities */
        .brutal-border { border: 2px solid var(--pm-black); }
        .brutal-shadow { box-shadow: 6px 6px 0px 0px var(--pm-black); }
        .brutal-shadow:hover { 
            box-shadow: 2px 2px 0px 0px var(--pm-black); 
            transform: translate(4px, 4px);
        }

        /* --- PRESENTATION MODE LOGIC --- */
        /* Class ini akan di-inject lewat JS */
        .presentation-active {
            scroll-snap-type: y mandatory;
            height: 100vh;
            overflow-y: scroll;
        }
        
        .presentation-active section {
            scroll-snap-align: start;
            scroll-snap-stop: always;
            min-height: 100vh;
            /* Pastikan konten vertikal bisa discroll jika lebih tinggi dari layar */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Hide scrollbar saat presentasi agar bersih */
        .presentation-active::-webkit-scrollbar { width: 0; }
    </style>
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

    <script>
        lucide.createIcons();

        function togglePresentationMode() {
            const scroller = document.getElementById('main-scroller');
            const btn = document.getElementById('pres-btn');
            
            // Toggle Class
            scroller.classList.toggle('presentation-active');
            
            // Ubah Teks Button
            if(scroller.classList.contains('presentation-active')) {
                btn.innerText = "EXIT SLIDE MODE";
                btn.style.backgroundColor = "#ccff00";
                btn.style.boxShadow = "4px 4px 0px 0px black";
                // Reset scroll ke atas
                window.scrollTo(0,0);
            } else {
                btn.innerText = "ENTER SLIDE MODE";
                btn.style.backgroundColor = "white";
                btn.style.boxShadow = "4px 4px 0px 0px white";
            }
        }
    </script>
</body>
</html>