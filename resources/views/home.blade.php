@extends('layouts.app')

@section('title', 'Farhan Kholid - Home')

@section('content')
    {{-- Monogram Background --}}
    <div class="monogram-bg">FK</div>

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center p-4">
        
        <div class="hero-background">
            <img src="{{ asset('assets/img/BG-DEPAN.png') }}" alt="City skyline background" class="w-full h-full object-cover object-center">
        </div>

        <div class="text-center text-white z-10 fade-in-up mt-20">
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8 mb-12 mt-20">
                <div class="text-2xl sm:text-3xl font-mono border-2 border-white rounded-full px-6 py-2 transition-transform duration-300 hover:scale-105 hover:bg-white/10">
                    Front-End Developer
                </div>
                <div class="text-2xl sm:text-3xl font-mono border-2 border-white rounded-full px-6 py-2 transition-transform duration-300 hover:scale-105 hover:bg-white/10">
                    Graphic Designer
                </div>
            </div>

            <div class="space-y-4 sm:space-y-0 sm:space-x-6 flex flex-col sm:flex-row justify-center">
                <a href="{{ url('/portfolio-frontend') }}" class="inline-flex items-center justify-center px-8 py-3 text-base font-medium rounded-lg text-army-dark border-2 border-amber-500 bg-white hover:bg-gray-100 transition duration-300 shadow-xl border border-white">
                    <i data-lucide="code" class="mr-2"></i>
                    View Front-End Portfolio
                </a>
                <a href="{{ url('/portfolio-graphic') }}" class="inline-flex items-center justify-center px-8 py-3 text-base font-medium rounded-lg text-white border-2 border-white hover:bg-white/20 transition duration-300">
                    <i data-lucide="palette" class="mr-2"></i>
                    View Graphic Design Portfolio
                </a>
            </div>
        </div>
    </section>
    
    {{-- Quick Overview Section --}}
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center mb-12 fade-in-up">Quick Overview</h2>
        <div class="grid md:grid-cols-3 gap-8 text-center fade-in-up">
            <div class="p-6 rounded-xl border border-gray-200 shadow-md">
                <i data-lucide="rocket" class="mx-auto mb-4 text-army-light w-8 h-8"></i>
                <h3 class="text-xl font-semibold mb-2">Vision & Mission</h3>
                <p class="text-gray-600">Creating digital experiences that are intuitive, functional, and aesthetic.</p>
            </div>
            <div class="p-6 rounded-xl border border-gray-200 shadow-md">
                <i data-lucide="monitor-dot" class="mx-auto mb-4 text-army-light w-8 h-8"></i>
                <h3 class="text-xl font-semibold mb-2">Technical Expertise</h3>
                <p class="text-gray-600">Focused on HTML, Tailwind CSS, Vanilla JS, and Adobe Creative Suite tools.</p>
            </div>
            <div class="p-6 rounded-xl border border-gray-200 shadow-md">
                <i data-lucide="message-circle" class="mx-auto mb-4 text-army-light w-8 h-8"></i>
                <h3 class="text-xl font-semibold mb-2">Collaboration</h3>
                <p class="text-gray-600">Open to project collaboration, both in development and visual design.</p>
            </div>
        </div>
        <div class="text-center mt-12 fade-in-up">
            <a href="{{ url('/about') }}" class="text-army-dark font-medium border-b border-army-dark hover:border-army-light transition duration-150">Read more about Farhan Kholid &rarr;</a>
        </div>
    </section>
@endsection