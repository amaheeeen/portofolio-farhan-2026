@extends('layouts.app')

@section('title', 'Front-End Projects - Farhan Kholid')

@section('content')
    <div class="bg-white min-h-screen">
        
        {{-- Header Section --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16">
            <p class="text-army-light font-mono text-sm tracking-widest uppercase mb-4 fade-in-up">Selected Works 2023-2025</p>
            <h1 class="text-5xl md:text-7xl font-extrabold text-army-dark tracking-tight leading-tight mb-6 fade-in-up">
                Crafting <span class="text-gray-400 italic font-serif">Digital</span> <br> Experiences.
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl fade-in-up">
                A showcase of technical expertise combining clean code, responsive design, and interactive user experiences.
            </p>
        </div>

        {{-- Projects Container --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-32 space-y-32">

            {{-- PROJECT 01: MONO STOCK (Layout: Image Left, Text Right) --}}
            <div class="group grid lg:grid-cols-12 gap-12 items-center fade-in-up">
                <div class="lg:col-span-7 relative">
                    <div class="absolute inset-0 bg-army-dark/5 transform translate-x-4 translate-y-4 rounded-2xl transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-100">
                        <img src="{{ asset('assets/img/porto-fe_1.png') }}" alt="Mono Stock Dashboard" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
                
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-6xl font-extrabold text-gray-100 absolute -z-10 -mt-12 select-none">01</span>
                    <h2 class="text-3xl font-bold text-army-dark leading-tight">Mono Stock <br><span class="text-lg font-normal text-gray-500">Inventory Dashboard</span></h2>
                    
                    <p class="text-gray-600 leading-relaxed">
                        A minimalist inventory dashboard built exclusively with core web technologies. It demonstrates advanced mastery of Modular JavaScript and efficient DOM manipulation without relying on heavy frameworks.
                    </p>

                    <div class="space-y-2">
                        <p class="text-xs font-bold text-army-light uppercase tracking-wider">Tech Stack</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">Vanilla JS</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">HTML5 Canvas</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">CSS Grid</span>
                        </div>
                    </div>

                    <div class="pt-4 flex gap-4">
                        <a href="https://frhnkhld.github.io/Mono-Inventory-Dashboard/" target="_blank" class="px-6 py-3 bg-army-dark text-white rounded-lg hover:bg-army-light transition shadow-lg hover:shadow-xl flex items-center gap-2">
                            <i data-lucide="external-link" class="w-4 h-4"></i> Live Demo
                        </a>
                        <a href="https://github.com/frhnkhld/Mono-Inventory-Dashboard" target="_blank" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:border-army-dark hover:text-army-dark transition flex items-center gap-2">
                            <i data-lucide="github" class="w-4 h-4"></i> Code
                        </a>
                    </div>
                </div>
            </div>

            {{-- PROJECT 02: KALCER.ID (Layout: Text Left, Image Right) --}}
            <div class="group grid lg:grid-cols-12 gap-12 items-center fade-in-up">
                <div class="lg:col-span-5 space-y-6 order-2 lg:order-1">
                    <span class="text-6xl font-extrabold text-gray-100 absolute -z-10 -mt-12 right-0 lg:right-auto lg:left-0 select-none">02</span>
                    <h2 class="text-3xl font-bold text-army-dark leading-tight">Kalcer.id <br><span class="text-lg font-normal text-gray-500">Viral Hangout Monitoring System</span></h2>
                    
                    <p class="text-gray-600 leading-relaxed">
                        A robust web application built with Laravel to monitor and recommend viral hangout spots. It features a custom Virality Score algorithm, personality-based filtering, and a seamless administrative backend for data management.
                    </p>

                    <div class="space-y-2">
                        <p class="text-xs font-bold text-army-light uppercase tracking-wider">Tech Stack</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">PHP (Laravel)</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">Tailwind CSS</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">JavaScript</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">MySQL</span>
                        </div>
                    </div>

                    <div class="pt-4 flex gap-4">
                        <a href="https://kalcerid-pemweb-production.up.railway.app/" class="px-6 py-3 bg-army-dark text-white rounded-lg hover:bg-army-light transition shadow-lg hover:shadow-xl flex items-center gap-2">
                            <i data-lucide="external-link" class="w-4 h-4"></i> Live Demo
                        </a>
                        <a href="https://github.com/amaheeeen/kalcer.id-pemweb" target="_blank" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:border-army-dark hover:text-army-dark transition flex items-center gap-2">
                            <i data-lucide="github" class="w-4 h-4"></i> Code
                        </a>
                    </div>
                </div>

                 <div class="lg:col-span-7 relative order-1 lg:order-2">
                    <div class="absolute inset-0 bg-army-light/10 transform -translate-x-4 translate-y-4 rounded-2xl transition-transform duration-500 group-hover:-translate-x-2 group-hover:translate-y-2"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-100 aspect-video">
                        <img src="{{ asset('assets/img/porto-fe_2.png') }}" alt="Kalcer.id Application" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
            </div>

            {{-- PROJECT 03: DATA SMOOTHING TIME SERIES (Layout: Image Left, Text Right) --}}   
            <div class="group grid lg:grid-cols-12 gap-12 items-center fade-in-up">
                <div class="lg:col-span-7 relative">
                    <div class="absolute inset-0 bg-army-dark/5 transform translate-x-4 translate-y-4 rounded-2xl transition-transform duration-500 group-hover:translate-x-2 group-hover:translate-y-2"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-100 aspect-video">
                        <img src="{{ asset('assets/img/porto-fe_3.png') }}" alt="Data Smoothing Visualization" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
                
                <div class="lg:col-span-5 space-y-6">
                    <span class="text-6xl font-extrabold text-gray-100 absolute -z-10 -mt-12 select-none">03</span>
                    <h2 class="text-3xl font-bold text-army-dark leading-tight">DataSmoothing <br><span class="text-lg font-normal text-gray-500">Interactive Time Series Tool</span></h2>
                    
                    <p class="text-gray-600 leading-relaxed">
                        An interactive browser-based tool to explore data smoothing techniques. It allows users to visualize original vs. smoothed series in real-time, tweak parameters for various algorithms, and export processed data without any backend dependency.
                    </p>

                    <div class="space-y-2">
                        <p class="text-xs font-bold text-army-light uppercase tracking-wider">Tech Stack</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">HTML5 (Semantic)</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">Inline CSS3</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">Vanilla JavaScript</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-mono rounded-full">Chart.js / Plotly</span>
                        </div>
                    </div>

                    <div class="pt-4 flex gap-4">
                        <a href="https://amaheeeen.github.io/DataSmoothing/" target="_blank" class="px-6 py-3 bg-army-dark text-white rounded-lg hover:bg-army-light transition shadow-lg hover:shadow-xl flex items-center gap-2">
                            <i data-lucide="external-link" class="w-4 h-4"></i> Live Demo
                        </a>
                        <a href="https://github.com/amaheeeen/DataSmoothing" target="_blank" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:border-army-dark hover:text-army-dark transition flex items-center gap-2">
                            <i data-lucide="github" class="w-4 h-4"></i> Code
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Call to Action --}}
        <div class="bg-accent-gray py-20 text-center">
            <h3 class="text-2xl font-bold text-army-dark mb-4">Want to see more code?</h3>
            <a href="https://github.com/frhnkhld" class="inline-flex items-center text-army-light hover:text-army-dark font-medium transition underline underline-offset-4">
                Visit my GitHub Profile <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
            </a>
        </div>
    </div>
@endsection