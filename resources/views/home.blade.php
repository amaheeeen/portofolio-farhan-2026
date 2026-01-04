@extends('layouts.app')

@section('title', 'Farhan Kholid - Front-End Engineer & Designer')

@section('content')
    
    {{-- 1. HERO SECTION (Fullscreen) --}}
    <section class="relative min-h-screen flex flex-col items-center justify-start p-4 overflow-hidden">
        {{-- Background Image --}}
        <div class="hero-background">
            <img src="{{ asset('assets/img/BG-DEPAN.png') }}" alt="Background City" class="w-full h-full object-cover object-center">
        </div>
        
        {{-- Overlay Gelap (Opsional: sesuaikan opacity jika tulisan BG kurang terbaca) --}}
        <div class="hero-overlay bg-black/20"></div>

        {{-- Hero Content --}}
        {{-- 'pt-80 md:pt-96': Memberi jarak kosong di atas agar tulisan Subtitle turun ke bawah nama di BG --}}
        <div class="relative z-10 text-center text-white fade-in-up pt-80 md:pt-[30rem]">
            {{-- MAIN TITLE (Nama di background) --}}
            
            {{-- SUBTITLE (Posisinya sekarang di bawah area nama background) --}}
            <p class="text-lg md:text-2xl uppercase tracking-[0.2em] mb-8 font-mono font-semibold text-shadow-md">
                Front-End Engineer & Design Specialist
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                {{-- Tombol ke Summary --}}
                <a href="#about-summary" class="w-full sm:w-auto px-8 py-3 bg-white text-army-dark font-bold rounded-full hover:bg-army-light hover:text-white transition duration-300 shadow-lg">
                    Explore Profile
                </a>
                
                {{-- Tombol View CV --}}
                <a href="{{ route('cv.web') }}" class="w-full sm:w-auto px-8 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-army-dark transition duration-300 flex items-center justify-center gap-2">
                    <i data-lucide="eye" class="w-4 h-4"></i> View CV
                </a>
            </div>
        </div>
    </section>

    {{-- 2. ABOUT SUMMARY --}}
    <section id="about-summary" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                
                <div class="fade-in-up">
                    <h2 class="text-4xl font-bold text-army-dark mb-6 leading-tight">Bridging Code <br><span class="text-army-light">and Design Rigor.</span></h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        I specialize in creating pixel-perfect interfaces and robust applications. With 4 years of background in visual design, I ensure every line of code serves a purpose—combining aesthetic sensibility with engineering precision.
                    </p>
                    <a href="{{ route('about') }}" class="group inline-flex items-center text-army-dark font-bold border-b-2 border-army-dark pb-1 hover:text-army-light hover:border-army-light transition">
                        Read full biography <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <div class="bg-accent-gray p-8 rounded-2xl shadow-inner fade-in-up delay-100">
                    <h3 class="font-bold text-army-dark mb-6 uppercase tracking-widest text-xs">Technical Ecosystem</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">Laravel</span>
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">React.js</span>
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">Tailwind CSS</span>
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">TypeScript</span>
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">Figma</span>
                        <span class="px-4 py-2 bg-white text-army-dark rounded-lg text-sm font-mono shadow-sm border border-gray-100">HTML5 Canvas</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3. FEATURED PROJECTS (Front-End) --}}
    <section class="py-24 bg-accent-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 fade-in-up">
                <div>
                    <p class="text-army-light font-mono text-sm tracking-widest uppercase mb-2">Selected Works</p>
                    <h2 class="text-4xl font-bold text-army-dark">Software Engineering</h2>
                </div>
                <a href="{{ route('porto.fe') }}" class="hidden md:inline-flex items-center text-gray-600 hover:text-army-dark font-medium transition">
                    View all projects <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                {{-- Project Card 1: Mono Stock --}}
                <a href="{{ route('porto.fe') }}" class="group block fade-in-up">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 h-full flex flex-col">
                        <div class="aspect-video overflow-hidden bg-gray-200">
                            <img src="{{ asset('assets/img/porto-fe_1.png') }}" alt="Mono Stock" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-8 flex-1">
                            <h3 class="text-2xl font-bold text-army-dark mb-2 group-hover:text-army-light transition">Mono Stock</h3>
                            <p class="text-gray-500 mb-4 line-clamp-2">Minimalist inventory dashboard built with Vanilla JS and HTML5 Canvas without heavy frameworks.</p>
                            <div class="flex gap-2 mt-auto">
                                <span class="text-[10px] font-mono bg-gray-100 text-gray-600 px-2 py-1 rounded">Vanilla JS</span>
                                <span class="text-[10px] font-mono bg-gray-100 text-gray-600 px-2 py-1 rounded">Canvas API</span>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Project Card 2: Kalcer.id --}}
                <a href="{{ route('porto.fe') }}" class="group block fade-in-up delay-100">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 h-full flex flex-col">
                        <div class="aspect-video overflow-hidden bg-gray-200">
                            <img src="{{ asset('assets/img/porto-fe_2.png') }}" alt="Kalcer.id" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-8 flex-1">
                            <h3 class="text-2xl font-bold text-army-dark mb-2 group-hover:text-army-light transition">Kalcer.id</h3>
                            <p class="text-gray-500 mb-4 line-clamp-2">Viral hangout monitoring system built with Laravel and a custom virality algorithm.</p>
                            <div class="flex gap-2 mt-auto">
                                <span class="text-[10px] font-mono bg-gray-100 text-gray-600 px-2 py-1 rounded">Laravel</span>
                                <span class="text-[10px] font-mono bg-gray-100 text-gray-600 px-2 py-1 rounded">MySQL</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="mt-8 text-center md:hidden">
                <a href="{{ route('porto.fe') }}" class="text-army-light font-bold">View all projects &rarr;</a>
            </div>
        </div>
    </section>

    {{-- 4. CREATIVE SHOWCASE (Graphic Design) --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-army-light font-mono text-sm tracking-widest uppercase mb-2 fade-in-up">Visual & Branding</p>
            <h2 class="text-4xl font-bold text-army-dark mb-12 fade-in-up">Creative Direction</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12 fade-in-up">
                {{-- Thumbnail 1 --}}
                <div class="aspect-square bg-accent-gray rounded-xl p-6 flex items-center justify-center hover:bg-gray-200 transition duration-300">
                    <img src="{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}" class="max-w-full max-h-full object-contain filter grayscale hover:grayscale-0 transition duration-500">
                </div>
                {{-- Thumbnail Placeholder 2 --}}
                <div class="aspect-square bg-accent-gray rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
                    <div class="text-center">
                        <i data-lucide="layout" class="mx-auto mb-2 w-6 h-6"></i>
                        <span class="font-mono text-xs block">Social Media Kit</span>
                    </div>
                </div>
                {{-- Thumbnail Placeholder 3 --}}
                <div class="aspect-square bg-accent-gray rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
                    <div class="text-center">
                        <i data-lucide="smartphone" class="mx-auto mb-2 w-6 h-6"></i>
                        <span class="font-mono text-xs block">UI Prototypes</span>
                    </div>
                </div>
                {{-- Thumbnail Placeholder 4 --}}
                <div class="aspect-square bg-accent-gray rounded-xl flex items-center justify-center text-gray-400 border border-dashed border-gray-300">
                    <div class="text-center">
                        <i data-lucide="pen-tool" class="mx-auto mb-2 w-6 h-6"></i>
                        <span class="font-mono text-xs block">Brand Identity</span>
                    </div>
                </div>
            </div>

            <a href="{{ route('porto.graphic') }}" class="inline-flex items-center px-8 py-3 border-2 border-army-dark text-army-dark font-bold rounded-full hover:bg-army-dark hover:text-white transition duration-300">
                Enter Design Gallery
            </a>
        </div>
    </section>

    {{-- 5. CONTACT CTA --}}
    <section class="py-24 bg-army-dark text-white text-center">
        <div class="max-w-3xl mx-auto px-4 fade-in-up">
            <h2 class="text-4xl font-bold mb-6">Let's work together.</h2>
            <p class="opacity-75 mb-10 text-lg">Currently available for freelance projects and full-time opportunities. Have an idea? Let's make it real.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center bg-white text-army-dark px-10 py-4 rounded-full font-bold hover:bg-army-light hover:text-white transition duration-300 shadow-xl">
                Start a Conversation
            </a>
        </div>
    </section>

@endsection