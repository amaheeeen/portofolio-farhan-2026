@extends('layouts.app')

@section('title', 'Farhan Kholid - Ultra Portfolio')

@section('content')

    {{-- =======================================================================
         SLIDE 1: HERO (COVER) - POSTMODERN STYLE
         ======================================================================= --}}
    <section id="hero" class="relative min-h-screen flex items-center justify-center p-6 border-b-4 border-black bg-[#e6e6e6] overflow-hidden snap-start">
        {{-- Background Grid --}}
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 40px 40px;"></div>

        <div class="max-w-7xl w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            <div class="lg:col-span-8">
                {{-- Sticker Decor --}}
                <div class="inline-block bg-[#ccff00] border-2 border-black px-4 py-1 mb-6 -rotate-2 shadow-[4px_4px_0px_0px_black]">
                    <span class="font-mono-pm text-sm font-bold tracking-widest">SYSTEM_READY /// V.3.0</span>
                </div>
                
                <h1 class="text-7xl md:text-9xl font-black leading-[0.85] tracking-tighter mb-6 mix-blend-hard-light relative">
                    FARHAN<br>
                    <span class="font-serif-pm italic font-light ml-12 block text-stroke-black text-transparent md:text-black">KHOLID</span>
                    {{-- Decorative Circle --}}
                    <div class="absolute -top-10 -left-10 w-32 h-32 rounded-full border-2 border-black animate-spin-slow opacity-20 hidden md:block" style="border-style: dashed;"></div>
                </h1>
                
                <div class="font-mono-pm max-w-xl border-l-8 border-[#ff4d00] pl-6 py-4 bg-white/80 backdrop-blur-sm border-2 border-black shadow-[8px_8px_0px_0px_rgba(0,0,0,0.2)]">
                    <p class="text-xl font-bold uppercase">Front-End Engineer & <br> Visual Design Specialist.</p>
                </div>
            </div>

            {{-- Photo Collage --}}
            <div class="lg:col-span-4 hidden lg:block relative h-[500px]">
                 <div class="absolute top-0 right-0 w-72 h-96 bg-gray-300 border-4 border-black shadow-[12px_12px_0px_0px_#ccff00] z-20 overflow-hidden hover:translate-x-2 hover:translate-y-2 transition duration-300">
                    <img src="{{ asset('assets/img/PP Formal.png') }}" class="w-full h-full object-cover grayscale contrast-125">
                 </div>
                 {{-- Abstract Shapes --}}
                 <div class="absolute top-20 -right-8 w-72 h-96 bg-[#ff4d00] border-4 border-black z-10"></div>
                 <div class="absolute bottom-10 -left-8 bg-white border-2 border-black px-4 py-2 z-30 font-mono-pm text-xs font-bold rotate-3">
                    JAKARTA /// ID
                 </div>
            </div>
        </div>
        
        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="font-mono-pm text-[10px] bg-black text-white px-2">SCROLL TO BEGIN</span>
            <i data-lucide="arrow-down" class="w-6 h-6"></i>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 2: ABOUT (THE HYBRID)
         ======================================================================= --}}
    <section id="about" class="min-h-screen bg-white flex items-center border-b-4 border-black relative py-20 snap-start overflow-hidden">
        {{-- Decorative Marquee Background --}}
        <div class="absolute top-10 left-0 w-full opacity-5 -rotate-3 pointer-events-none whitespace-nowrap text-9xl font-black select-none">
            DESIGN /// CODE /// DESIGN /// CODE /// DESIGN /// CODE ///
        </div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-6xl md:text-8xl font-serif-pm italic mb-8 relative inline-block">
                        The Hybrid
                        <span class="absolute -bottom-2 left-0 w-full h-4 bg-[#ccff00] -z-10"></span>
                    </h2>
                    
                    <div class="font-mono-pm text-sm leading-relaxed text-justify space-y-6">
                        <div class="p-8 border-4 border-black bg-[#f4f4f0] shadow-[10px_10px_0px_0px_#ff4d00] relative">
                            <i data-lucide="zap" class="absolute -top-4 -left-4 w-8 h-8 bg-black text-[#ccff00] p-1 border-2 border-white"></i>
                            <p class="font-bold mb-2">/// PROFILE_SUMMARY</p>
                            <p>A hybrid professional with 4 years of visual design background, currently transitioning into Front-End Engineering. I combine architectural aesthetic sensibility with computer algorithmic precision.</p>
                        </div>
                    </div>
                </div>

                {{-- Brutalist Skills Grid --}}
                <div class="order-1 lg:order-2 grid grid-cols-2 gap-6">
                    <div class="bg-[#1a1a1a] text-[#ccff00] p-6 border-4 border-black aspect-square flex flex-col justify-between hover:bg-[#ccff00] hover:text-black transition duration-300">
                        <i data-lucide="terminal" class="w-12 h-12"></i>
                        <span class="font-mono-pm font-bold text-2xl">DEV.<br>CORE</span>
                    </div>
                    <div class="bg-white p-6 border-4 border-black aspect-square flex flex-col justify-center gap-2 shadow-[8px_8px_0px_0px_gray]">
                        <span class="bg-black text-white px-2 py-1 text-xs font-mono-pm">Laravel 11</span>
                        <span class="bg-black text-white px-2 py-1 text-xs font-mono-pm">React.js</span>
                        <span class="bg-black text-white px-2 py-1 text-xs font-mono-pm">Tailwind</span>
                    </div>
                    <div class="bg-[#ff4d00] p-6 border-4 border-black aspect-square flex flex-col justify-center gap-2">
                        <span class="bg-white border-2 border-black px-2 py-1 text-xs font-mono-pm font-bold">Figma</span>
                        <span class="bg-white border-2 border-black px-2 py-1 text-xs font-mono-pm font-bold">Adobe Suite</span>
                    </div>
                    <div class="bg-[#f4f4f0] p-6 border-4 border-black aspect-square flex flex-col justify-between hover:rotate-3 transition">
                        <i data-lucide="pen-tool" class="w-12 h-12"></i>
                        <span class="font-mono-pm font-bold text-2xl">ART.<br>DIR</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 3: EXPERIENCE & EDUCATION
         ======================================================================= --}}
    <section id="experience" class="min-h-screen bg-[#ccff00] flex items-center border-b-4 border-black py-20 snap-start relative">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, #000 25%, transparent 25%, transparent 75%, #000 75%, #000), repeating-linear-gradient(45deg, #000 25%, #ccff00 25%, #ccff00 75%, #000 75%, #000); background-position: 0 0, 20px 20px; background-size: 40px 40px;"></div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
            <h2 class="text-5xl md:text-7xl font-black mb-12 uppercase bg-white border-4 border-black inline-block px-6 py-2 shadow-[8px_8px_0px_0px_black]">
                Timeline
            </h2>
            
            <div class="grid md:grid-cols-2 gap-12">
                {{-- Experience --}}
                <div class="space-y-6">
                    <h3 class="font-mono-pm text-xl bg-black text-white inline-block px-2 py-1 mb-4">/// EXPERIENCE</h3>
                    
                    <div class="bg-white border-4 border-black p-6 shadow-[8px_8px_0px_0px_black] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-xl">Graphic & UI Designer</h4>
                            <span class="font-mono-pm text-xs bg-[#ff4d00] text-white px-2 py-1">2021-2023</span>
                        </div>
                        <p class="font-serif-pm italic mb-2">Royal Rinjani</p>
                        <ul class="list-disc list-inside text-sm text-gray-700 font-mono-pm">
                            <li>Designed responsive UI layouts</li>
                            <li>Developed design systems</li>
                        </ul>
                    </div>

                    <div class="bg-white border-4 border-black p-6 shadow-[8px_8px_0px_0px_black] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-xl">Digital Mkt. Manager</h4>
                            <span class="font-mono-pm text-xs bg-black text-white px-2 py-1">2019-2020</span>
                        </div>
                        <p class="font-serif-pm italic mb-2">PT Farhan Surya Indah</p>
                        <p class="text-sm text-gray-700 font-mono-pm">Managed corporate assets & SEO.</p>
                    </div>
                </div>

                {{-- Education --}}
                <div>
                    <h3 class="font-mono-pm text-xl bg-black text-white inline-block px-2 py-1 mb-10">/// EDUCATION</h3>
                    
                    <div class="bg-[#ff4d00] border-4 border-black p-6 text-white shadow-[8px_8px_0px_0px_black] relative">
                        {{-- Paper Clip Decor --}}
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-32 h-8 bg-gray-200 border-2 border-black rotate-2"></div>
                        
                        <h4 class="font-bold text-2xl mb-1">Bachelor of Comp. Science</h4>
                        <p class="font-mono-pm text-sm text-black bg-white inline-block px-1">Universitas Pertamina (2023 - Present)</p>
                        <p class="text-sm mt-4 font-bold">Focus: Web Algorithms, Interaction Design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 4: FRONT-END PROJECT 1 - MONO STOCK
         ======================================================================= --}}
    <section id="project-mono" class="min-h-screen bg-black text-white flex items-center border-b-4 border-white snap-start relative overflow-hidden">
        {{-- FADED BACKGROUND IMAGE --}}
        <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-30 grayscale blur-sm">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 mb-4 bg-[#ccff00] text-black px-3 py-1 border-2 border-white">
                    <i data-lucide="cpu" class="w-4 h-4"></i>
                    <span class="font-mono-pm text-xs font-bold">PROJECT_01 /// INVENTORY</span>
                </div>
                
                <h2 class="text-6xl md:text-8xl font-black mb-6 uppercase leading-none text-transparent stroke-text" style="-webkit-text-stroke: 2px white;">
                    MONO<br>STOCK
                </h2>
                
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 text-xs font-mono-pm text-[#ccff00]">VANILLA JS</span>
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 text-xs font-mono-pm text-[#ccff00]">CANVAS API</span>
                    <span class="bg-gray-800 border border-gray-600 px-3 py-1 text-xs font-mono-pm text-[#ccff00]">NO FRAMEWORK</span>
                </div>
                
                <p class="text-lg text-gray-300 mb-8 max-w-md leading-relaxed border-l-4 border-[#ff4d00] pl-4">
                    A minimalist inventory dashboard built exclusively with core web technologies. Demonstrating mastery of Modular JavaScript without dependencies.
                </p>
                
                <div class="flex gap-4">
                    <a href="https://frhnkhld.github.io/Mono-Inventory-Dashboard/" target="_blank" class="bg-[#ccff00] text-black border-2 border-[#ccff00] px-8 py-3 font-bold hover:bg-transparent hover:text-[#ccff00] transition">
                        LIVE DEMO
                    </a>
                    <a href="https://github.com/frhnkhld/Mono-Inventory-Dashboard" target="_blank" class="border-2 border-white px-8 py-3 font-bold hover:bg-white hover:text-black transition">
                        REPO
                    </a>
                </div>
            </div>
            
            {{-- Floating Preview --}}
            <div class="hidden lg:block relative">
                <div class="absolute -top-6 -left-6 bg-[#ff4d00] text-white px-4 py-2 font-mono-pm text-xs font-bold border-2 border-white z-20">
                    RAW DOM MANIPULATION
                </div>
                <div class="border-4 border-white p-2 shadow-[16px_16px_0px_0px_#ccff00] bg-gray-900 rotate-2 hover:rotate-0 transition duration-500">
                    <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="w-full h-auto grayscale hover:grayscale-0 transition">
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 5: FRONT-END PROJECT 2 - KALCER.ID
         ======================================================================= --}}
    <section id="project-kalcer" class="min-h-screen bg-white text-black flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- FADED BACKGROUND IMAGE --}}
        <img src="{{ asset('assets/img/porto-fe_2.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-10 blur-sm">
        
        <div class="max-w-7xl w-full mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
            {{-- Preview Left --}}
            <div class="order-2 lg:order-1 relative">
                <div class="absolute -bottom-6 -right-6 bg-black text-white px-4 py-2 font-mono-pm text-xs font-bold border-2 border-[#ff4d00] z-20">
                    ALGORITHM: VIRALITY SCORE
                </div>
                <div class="border-4 border-black p-2 shadow-[-16px_16px_0px_0px_#ff4d00] bg-white -rotate-1 hover:rotate-0 transition duration-500">
                    <img src="{{ asset('assets/img/porto-fe_2.png') }}" class="w-full h-auto">
                </div>
            </div>

            <div class="order-1 lg:order-2 text-right lg:text-left">
                <div class="inline-flex items-center gap-2 mb-4 bg-black text-white px-3 py-1 border-2 border-[#ff4d00] justify-end lg:justify-start">
                    <span class="font-mono-pm text-xs font-bold">PROJECT_02 /// FULLSTACK</span>
                    <i data-lucide="database" class="w-4 h-4"></i>
                </div>
                
                <h2 class="text-6xl md:text-8xl font-black mb-6 uppercase text-black">
                    Kalcer<span class="text-[#ff4d00]">.</span>ID
                </h2>
                
                <div class="flex flex-wrap gap-2 mb-8 justify-end lg:justify-start">
                    <span class="bg-gray-100 border-2 border-black px-2 py-1 text-xs font-mono-pm font-bold">LARAVEL 11</span>
                    <span class="bg-gray-100 border-2 border-black px-2 py-1 text-xs font-mono-pm font-bold">MYSQL</span>
                    <span class="bg-gray-100 border-2 border-black px-2 py-1 text-xs font-mono-pm font-bold">TAILWIND</span>
                </div>
                
                <p class="text-lg text-gray-800 mb-8 max-w-md ml-auto lg:ml-0 font-medium">
                    Viral hangout monitoring system. Features a custom Virality Score algorithm, personality-based filtering, and a seamless administrative backend.
                </p>
                
                <div class="flex gap-4 justify-end lg:justify-start">
                    <a href="https://kalcerid-pemweb-production-f0a2.up.railway.app/" target="_blank" class="bg-black text-white px-8 py-3 font-bold hover:bg-[#ff4d00] transition shadow-[4px_4px_0px_0px_gray]">
                        VISIT APP
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 6: FRONT-END PROJECT 3 - LUMINA VISA
         ======================================================================= --}}
    <section id="project-lumina" class="min-h-screen bg-[#1e1e1e] text-white flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- FADED BACKGROUND IMAGE --}}
        <img src="{{ asset('assets/img/porto-fe_4.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-20 blur-sm">
        
        <div class="max-w-7xl w-full mx-auto px-6 relative z-10 grid lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-5">
                <span class="font-mono-pm text-xs font-bold tracking-widest mb-4 block text-[#ccff00] border-b border-[#ccff00] pb-1 w-max">PROJECT 03 /// UTILITY</span>
                
                <h2 class="text-6xl md:text-8xl font-black mb-6 uppercase leading-none">
                    Lumina<br><span class="text-transparent stroke-text" style="-webkit-text-stroke: 1px white;">Visa</span>
                </h2>
                
                <div class="bg-white/10 backdrop-blur-md p-6 border-2 border-white mb-8">
                    <p class="text-lg font-bold font-mono-pm text-[#ccff00] mb-2">
                        "Simplifying international travel bureaucracy."
                    </p>
                    <ul class="space-y-2 font-mono-pm text-sm text-gray-300">
                        <li>+ Interactive Visa Calculator</li>
                        <li>+ Real-time Embassy Directory</li>
                        <li>+ Document Checklist Generator</li>
                    </ul>
                </div>

                <a href="https://fsi-visa-production.up.railway.app/" target="_blank" class="inline-block bg-[#ccff00] text-black px-8 py-4 font-bold border-2 border-transparent hover:bg-black hover:text-white hover:border-[#ccff00] transition">
                    LAUNCH PLATFORM
                </a>
            </div>
            
            <div class="lg:col-span-7 relative">
                <img src="{{ asset('assets/img/porto-fe_4.png') }}" class="w-full border-4 border-white shadow-[12px_12px_0px_0px_#ccff00] relative z-10 rotate-1 hover:rotate-0 transition duration-500">
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 7: GRAPHIC 1 - CITEUP 2025
         ======================================================================= --}}
    <section id="graphic-citeup-2025" class="min-h-screen bg-white flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- RIPPLE TEXT (MARQUEE BG) --}}
        <div class="absolute top-1/2 -translate-y-1/2 w-full -rotate-6 z-0 opacity-10 pointer-events-none">
             <div class="whitespace-nowrap text-[12rem] font-black text-black">
                CITEUP 2025 /// CITEUP 2025 /// CITEUP 2025 ///
             </div>
        </div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <span class="bg-black text-white px-3 py-1 font-mono-pm text-xs font-bold">GRAPHIC_01</span>
                    <h2 class="text-6xl font-black mt-2">CITEUP 2025</h2>
                </div>
                <div class="text-right">
                    <p class="font-mono-pm text-sm">EVENT BRANDING</p>
                    <p class="font-mono-pm text-xs text-gray-500">SCROLL HORIZONTALLY &rarr;</p>
                </div>
            </div>

            {{-- HORIZONTAL SLIDER --}}
            <div class="flex overflow-x-auto gap-8 pb-8 snap-x snap-mandatory hide-scrollbar">
                {{-- Slide Item 1 --}}
                <div class="min-w-[80vw] md:min-w-[40vw] snap-center bg-[#f4f4f0] border-4 border-black p-4 shadow-[8px_8px_0px_0px_black]">
                    <div class="h-80 bg-white border-2 border-gray-200 flex items-center justify-center mb-4">
                        <img src="{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}" class="h-48 object-contain">
                    </div>
                    <h3 class="font-bold font-mono-pm">PRIMARY LOGO MARK</h3>
                </div>

                {{-- Slide Item 2 (Placeholder) --}}
                <div class="min-w-[80vw] md:min-w-[40vw] snap-center bg-black text-white border-4 border-black p-4 shadow-[8px_8px_0px_0px_#ccff00]">
                    <div class="h-80 bg-gray-800 flex items-center justify-center mb-4 border-2 border-white">
                        <span class="font-lime text-2xl">MERCHANDISE</span>
                    </div>
                    <h3 class="font-bold font-mono-pm text-[#ccff00]">APPAREL DESIGN</h3>
                </div>

                 {{-- Slide Item 3 (Placeholder) --}}
                 <div class="min-w-[80vw] md:min-w-[40vw] snap-center bg-white border-4 border-black p-4 shadow-[8px_8px_0px_0px_gray]">
                    <div class="h-80 bg-gray-100 flex items-center justify-center mb-4 border-2 border-black">
                        <span class="font-lime text-2xl">SOCIAL MEDIA</span>
                    </div>
                    <h3 class="font-bold font-mono-pm">INSTAGRAM FEEDS</h3>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 8: GRAPHIC 2 - CITEUP 2024
         ======================================================================= --}}
    <section id="graphic-citeup-2024" class="min-h-screen bg-[#ff4d00] flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- RIPPLE TEXT --}}
        <div class="absolute top-1/2 -translate-y-1/2 w-full rotate-3 z-0 opacity-20 pointer-events-none">
             <div class="whitespace-nowrap text-[12rem] font-black text-black">
                CITEUP 2024 /// CITEUP 2024 /// CITEUP 2024 ///
             </div>
        </div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
             <div class="flex justify-between items-end mb-8 text-white">
                <div>
                    <span class="bg-white text-black px-3 py-1 font-mono-pm text-xs font-bold">GRAPHIC_02</span>
                    <h2 class="text-6xl font-black mt-2">CITEUP 2024</h2>
                </div>
                <div class="text-right">
                    <p class="font-mono-pm text-sm">VISUAL IDENTITY</p>
                </div>
            </div>

            {{-- SLIDER --}}
            <div class="flex overflow-x-auto gap-8 pb-8 snap-x snap-mandatory hide-scrollbar">
                <div class="min-w-[80vw] md:min-w-[40vw] snap-center bg-white border-4 border-black p-4 shadow-[8px_8px_0px_0px_black]">
                    <div class="h-80 bg-gray-100 border-2 border-black flex items-center justify-center mb-4">
                        <span class="font-bold text-2xl">LOGO CONCEPT</span>
                    </div>
                </div>
                <div class="min-w-[80vw] md:min-w-[40vw] snap-center bg-black border-4 border-black p-4 shadow-[8px_8px_0px_0px_white]">
                    <div class="h-80 bg-gray-800 border-2 border-white flex items-center justify-center mb-4">
                        <span class="font-bold text-2xl text-white">KEY VISUAL</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 9: GRAPHIC 3 - ROYAL RINJANI
         ======================================================================= --}}
    <section id="graphic-royal" class="min-h-screen bg-[#1a1a1a] text-white flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- RIPPLE TEXT --}}
        <div class="absolute top-20 w-full z-0 opacity-10 pointer-events-none">
             <div class="whitespace-nowrap text-[10rem] font-black text-white animate-marquee">
                ROYAL RINJANI /// ROYAL RINJANI /// ROYAL RINJANI ///
             </div>
        </div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
             <div class="mb-10">
                <span class="text-[#ccff00] font-mono-pm text-xs font-bold tracking-widest border border-[#ccff00] px-2 py-1">GRAPHIC_03</span>
                <h2 class="text-6xl font-black mt-4 uppercase">Royal Rinjani</h2>
            </div>

            {{-- SLIDER --}}
            <div class="flex overflow-x-auto gap-8 pb-8 snap-x snap-mandatory hide-scrollbar">
                <div class="min-w-[80vw] md:min-w-[30vw] snap-center border-2 border-white p-6 hover:bg-[#ccff00] hover:text-black hover:border-black transition duration-300 group">
                    <i data-lucide="figma" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-3xl font-bold mb-2">UI Design</h3>
                    <p class="font-mono-pm text-xs opacity-70 group-hover:opacity-100">BOOKING ENGINE INTERFACE</p>
                </div>
                 <div class="min-w-[80vw] md:min-w-[30vw] snap-center border-2 border-white p-6 hover:bg-[#ccff00] hover:text-black hover:border-black transition duration-300 group">
                    <i data-lucide="smartphone" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-3xl font-bold mb-2">Mobile App</h3>
                    <p class="font-mono-pm text-xs opacity-70 group-hover:opacity-100">TRAVEL COMPANION APP</p>
                </div>
                 <div class="min-w-[80vw] md:min-w-[30vw] snap-center border-2 border-white p-6 hover:bg-[#ccff00] hover:text-black hover:border-black transition duration-300 group">
                    <i data-lucide="book-open" class="w-12 h-12 mb-6"></i>
                    <h3 class="text-3xl font-bold mb-2">Brand Guide</h3>
                    <p class="font-mono-pm text-xs opacity-70 group-hover:opacity-100">VISUAL IDENTITY SYSTEM</p>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 10: GRAPHIC 4 - DESIGN LAB
         ======================================================================= --}}
    <section id="graphic-lab" class="min-h-screen bg-[#f4f4f0] flex items-center border-b-4 border-black snap-start relative overflow-hidden">
        {{-- RIPPLE TEXT --}}
        <div class="absolute bottom-0 w-full z-0 opacity-10 pointer-events-none">
             <div class="whitespace-nowrap text-[8rem] font-black text-black">
                DESIGN LAB /// DESIGN LAB /// DESIGN LAB ///
             </div>
        </div>

        <div class="max-w-7xl w-full mx-auto px-6 relative z-10">
             <div class="flex items-center gap-4 mb-10">
                 <div class="w-16 h-16 bg-black text-white flex items-center justify-center font-bold text-2xl border-4 border-[#ff4d00]">DL</div>
                 <h2 class="text-6xl font-black uppercase">Design Lab</h2>
            </div>
            
            <p class="font-mono-pm max-w-lg mb-8 p-4 bg-white border-2 border-black">
                /// ACADEMIC ARCHIVES & EXPERIMENTS
                <br>A collection of raw ideas, university assignments, and visual explorations.
            </p>

            {{-- SLIDER --}}
            <div class="flex overflow-x-auto gap-6 pb-8 snap-x snap-mandatory hide-scrollbar">
                {{-- Lab Item 1 --}}
                <div class="min-w-[60vw] md:min-w-[25vw] snap-center bg-white border-2 border-black p-2 shadow-[4px_4px_0px_0px_black] rotate-1">
                    <div class="h-64 bg-gray-200 border border-black mb-2 flex items-center justify-center">POSTER</div>
                    <p class="font-bold text-center font-mono-pm text-xs">TYPOGRAPHY 101</p>
                </div>
                {{-- Lab Item 2 --}}
                <div class="min-w-[60vw] md:min-w-[25vw] snap-center bg-white border-2 border-black p-2 shadow-[4px_4px_0px_0px_black] -rotate-1">
                    <div class="h-64 bg-gray-800 text-white border border-black mb-2 flex items-center justify-center">3D RENDER</div>
                    <p class="font-bold text-center font-mono-pm text-xs">SPATIAL FORM</p>
                </div>
                {{-- Lab Item 3 --}}
                <div class="min-w-[60vw] md:min-w-[25vw] snap-center bg-white border-2 border-black p-2 shadow-[4px_4px_0px_0px_black] rotate-2">
                    <div class="h-64 bg-[#ff4d00] border border-black mb-2 flex items-center justify-center">SKETCH</div>
                    <p class="font-bold text-center font-mono-pm text-xs">MANUAL DRAWING</p>
                </div>
            </div>
        </div>
    </section>


    {{-- =======================================================================
         SLIDE 11: CONTACT
         ======================================================================= --}}
    <section id="contact" class="min-h-screen bg-[#ccff00] flex items-center justify-center p-6 border-b-4 border-black snap-start relative">
        {{-- Background Noise --}}
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#000 2px, transparent 2px); background-size: 30px 30px;"></div>

        <div class="max-w-4xl w-full text-center relative z-10">
            
            <div class="inline-block border-4 border-black px-8 py-2 mb-8 bg-white shadow-[8px_8px_0px_0px_black] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition cursor-pointer">
                <span class="font-mono-pm text-sm font-bold tracking-widest">STATUS: OPEN FOR WORK</span>
            </div>

            <h2 class="text-7xl md:text-9xl font-black mb-12 tracking-tighter text-black mix-blend-multiply">
                LET'S TALK
            </h2>

            <div class="grid md:grid-cols-2 gap-8 text-left">
                {{-- Form --}}
                <div class="bg-[#f4f4f0] border-4 border-black p-8 shadow-[12px_12px_0px_0px_black]">
                    <h3 class="font-bold text-xl mb-6 font-mono-pm border-b-2 border-black pb-2">SEND SIGNAL ///</h3>
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="name" placeholder="YOUR NAME" class="w-full bg-white border-2 border-black p-4 font-mono-pm focus:outline-none focus:bg-[#ccff00] focus:placeholder-black transition">
                        <input type="email" name="email" placeholder="EMAIL ADDRESS" class="w-full bg-white border-2 border-black p-4 font-mono-pm focus:outline-none focus:bg-[#ccff00] focus:placeholder-black transition">
                        <textarea name="message" rows="3" placeholder="MESSAGE..." class="w-full bg-white border-2 border-black p-4 font-mono-pm focus:outline-none focus:bg-[#ccff00] focus:placeholder-black transition"></textarea>
                        <button type="submit" class="w-full bg-black text-white py-4 font-bold hover:bg-[#ff4d00] transition border-2 border-transparent hover:border-black shadow-[4px_4px_0px_0px_white]">INITIATE</button>
                    </form>
                </div>

                {{-- Info --}}
                <div class="flex flex-col justify-between font-mono-pm">
                    <div class="space-y-8 bg-white border-4 border-black p-8 shadow-[8px_8px_0px_0px_black]">
                        <div>
                            <p class="text-xs text-black uppercase mb-1 font-bold">Direct Email</p>
                            <a href="mailto:farhankholid20@gmail.com" class="text-xl font-bold hover:bg-[#ff4d00] hover:text-white px-1">farhankholid20@gmail.com</a>
                        </div>
                        <div>
                            <p class="text-xs text-black uppercase mb-1 font-bold">Phone</p>
                            <p class="text-xl font-bold">+62 813-8833-7828</p>
                        </div>
                        <div>
                            <p class="text-xs text-black uppercase mb-1 font-bold">Base</p>
                            <p class="text-xl font-bold">Jakarta, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4 mt-8 justify-center">
                        <a href="#" class="w-14 h-14 border-4 border-black bg-white flex items-center justify-center hover:bg-black hover:text-white transition shadow-[6px_6px_0px_0px_black] hover:shadow-none hover:translate-x-[6px] hover:translate-y-[6px]"><i data-lucide="linkedin"></i></a>
                        <a href="#" class="w-14 h-14 border-4 border-black bg-white flex items-center justify-center hover:bg-black hover:text-white transition shadow-[6px_6px_0px_0px_black] hover:shadow-none hover:translate-x-[6px] hover:translate-y-[6px]"><i data-lucide="github"></i></a>
                        <a href="#" class="w-14 h-14 border-4 border-black bg-white flex items-center justify-center hover:bg-black hover:text-white transition shadow-[6px_6px_0px_0px_black] hover:shadow-none hover:translate-x-[6px] hover:translate-y-[6px]"><i data-lucide="instagram"></i></a>
                    </div>
                </div>
            </div>

            <footer class="mt-20 text-center text-black/60 font-mono-pm text-[10px] uppercase tracking-widest font-bold">
                &copy; 2026 FARHAN KHOLID. BUILT WITH LARAVEL & RAW PASSION.
            </footer>
        </div>
    </section>

@endsection