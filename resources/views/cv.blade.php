@extends('layouts.app')

@section('title', 'Curriculum Vitae - Farhan Kholid')

@section('content')
    <div class="bg-gray-100 min-h-screen py-8 md:py-16 font-sans">
        <div class="max-w-[210mm] mx-auto px-4 sm:px-6">
            
            {{-- Toolbar: Tidak akan tercetak --}}
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4 fade-in-up print:hidden">
                <a href="{{ route('home') }}" class="group flex items-center text-gray-600 hover:text-army-dark transition font-medium">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm mr-3 group-hover:scale-110 transition-transform">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    </div>
                    Back to Portfolio
                </a>
                <button onclick="window.print()" class="flex items-center px-6 py-2.5 bg-army-dark text-white rounded-full hover:bg-army-light transition shadow-lg hover:shadow-xl font-medium tracking-wide">
                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Save as PDF
                </button>
            </div>

            {{-- KANVAS CV (Ukuran A4) --}}
            <div class="bg-white shadow-2xl overflow-hidden fade-in-up print:shadow-none print:m-0 w-full" id="cv-area">
                
                {{-- 1. HEADER --}}
                <div class="bg-army-dark text-white p-8 md:p-12 print:p-10 relative overflow-hidden">
                    {{-- Dekorasi Background Abstrak --}}
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    
                    <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                        <div>
                            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-2 uppercase leading-none">Farhan Kholid</h1>
                            <p class="text-lg text-gray-200 font-mono tracking-widest uppercase border-l-4 border-army-light pl-3">Front-End Engineer & Design Specialist</p>
                        </div>
                        
                        <div class="text-left md:text-right space-y-1.5 text-sm">
                            <a href="https://farhankholid.com" target="_blank" class="flex items-center md:justify-end gap-2 hover:text-gray-300 transition">
                                <span class="underline decoration-army-light underline-offset-4">frhnkhld.github.io</span> <i data-lucide="globe" class="w-4 h-4"></i> 
                            </a>
                            <p class="flex items-center md:justify-end gap-2"><span class="opacity-90">Jakarta, Indonesia</span> <i data-lucide="map-pin" class="w-4 h-4"></i></p>
                            <p class="flex items-center md:justify-end gap-2"><span class="opacity-90">farhankholid20@gmail.com</span> <i data-lucide="mail" class="w-4 h-4"></i></p>
                            <p class="flex items-center md:justify-end gap-2"><span class="opacity-90">+62 813-8833-7828</span> <i data-lucide="phone" class="w-4 h-4"></i></p>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-12">
                    
                    {{-- 2. SIDEBAR (KIRI - 4 Kolom) --}}
                    <div class="md:col-span-4 bg-gray-50 p-8 border-r border-gray-200 space-y-8 print:bg-gray-50 print:col-span-4 print:p-6">
                        
                        {{-- Education --}}
                        <section>
                            <h3 class="text-army-dark font-bold uppercase tracking-widest border-b-2 border-army-light pb-2 mb-4 text-xs">Education</h3>
                            
                            <div class="mb-5 relative">
                                <div class="absolute -left-1.5 top-1.5 w-2 h-2 bg-army-dark rounded-full"></div>
                                <div class="pl-4 border-l border-gray-300">
                                    <p class="font-bold text-gray-900 leading-tight">Bachelor of Computer Science</p>
                                    <p class="text-xs text-army-dark font-semibold mt-1">Universitas Pertamina</p>
                                    <p class="text-[10px] text-gray-500 mb-1 font-mono">2023 - Present</p>
                                    <p class="text-xs text-gray-600 mt-2">GPA: 3.xx/4.00 <br> Focus: Web Algorithms, Interaction Design.</p>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="absolute -left-1.5 top-1.5 w-2 h-2 bg-gray-400 rounded-full"></div>
                                <div class="pl-4 border-l border-gray-300">
                                    <p class="font-bold text-gray-900 leading-tight">Bachelor of Architecture</p>
                                    <p class="text-xs text-army-dark font-semibold mt-1">Binus University</p>
                                    <p class="text-[10px] text-gray-500 mb-1 font-mono">2019 - 2020</p>
                                </div>
                            </div>
                        </section>

                        {{-- Hard Skills --}}
                        <section>
                            <h3 class="text-army-dark font-bold uppercase tracking-widest border-b-2 border-army-light pb-2 mb-4 text-xs">Technical Arsenal</h3>
                            
                            <div class="mb-5">
                                <h4 class="font-bold text-gray-800 text-xs mb-2 flex items-center"><i data-lucide="code-2" class="w-3 h-3 mr-1"></i> Development</h4>
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">HTML5 Semantic</span>
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">Tailwind CSS</span>
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">JavaScript ES6+</span>
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">Laravel (PHP)</span>
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">React.js</span>
                                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[10px] font-medium text-gray-700">Git/GitHub</span>
                                </div>
                            </div>

                            <div>
                                <h4 class="font-bold text-gray-800 text-xs mb-2 flex items-center"><i data-lucide="pen-tool" class="w-3 h-3 mr-1"></i> Design & UI/UX</h4>
                                <ul class="space-y-1 text-xs text-gray-600">
                                    <li class="flex items-center"><span class="w-1.5 h-1.5 bg-army-light rounded-full mr-2"></span> Figma & Prototyping</li>
                                    <li class="flex items-center"><span class="w-1.5 h-1.5 bg-army-light rounded-full mr-2"></span> Adobe Photoshop</li>
                                    <li class="flex items-center"><span class="w-1.5 h-1.5 bg-army-light rounded-full mr-2"></span> Adobe Illustrator</li>
                                    <li class="flex items-center"><span class="w-1.5 h-1.5 bg-army-light rounded-full mr-2"></span> Design Systems</li>
                                </ul>
                            </div>
                        </section>

                        {{-- Languages --}}
                        <section>
                            <h3 class="text-army-dark font-bold uppercase tracking-widest border-b-2 border-army-light pb-2 mb-4 text-xs">Languages</h3>
                            <ul class="space-y-2 text-xs text-gray-600">
                                <li class="flex justify-between border-b border-gray-200 pb-1">
                                    <span>Bahasa Indonesia</span>
                                    <span class="font-bold text-army-dark">Native</span>
                                </li>
                                <li class="flex justify-between border-b border-gray-200 pb-1">
                                    <span>English</span>
                                    <span class="font-bold text-army-dark">Intermediate</span>
                                </li>
                            </ul>
                        </section>
                    </div>

                    {{-- 3. MAIN CONTENT (KANAN - 8 Kolom) --}}
                    <div class="md:col-span-8 p-8 md:p-10 space-y-8 print:col-span-8 print:p-8">
                        
                        {{-- Profile Summary --}}
                        <section>
                            <h3 class="text-lg font-bold text-army-dark mb-3 flex items-center uppercase tracking-wider">
                                <i data-lucide="user" class="w-5 h-5 mr-2 text-army-light"></i> Profile Summary
                            </h3>
                            <p class="text-gray-700 leading-relaxed text-justify text-sm">
                                I am a hybrid professional with 4 years of background in visual design, now actively transitioning into <strong>Front-End Engineering</strong>. I specialize in bridging the gap between design fidelity and code quality. My strength lies in building functional, minimalist interfaces using modern stacks like <strong>Laravel, React, and Tailwind CSS</strong>, ensuring every pixel serves a user-centric purpose.
                            </p>
                        </section>

                         {{-- SELECTED PROJECTS (PENTING UNTUK TRANSISI KARIR) --}}
                         <section>
                            <h3 class="text-lg font-bold text-army-dark mb-4 flex items-center uppercase tracking-wider">
                                <i data-lucide="cpu" class="w-5 h-5 mr-2 text-army-light"></i> Engineering Projects
                            </h3>
                            
                            <div class="grid grid-cols-1 gap-4">
                                {{-- Project 1 --}}
                                <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-bold text-gray-900">Mono Stock Dashboard</h4>
                                        <a href="#" class="text-[10px] bg-army-dark text-white px-2 py-0.5 rounded">GitHub</a>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2">A minimalist inventory management system built without frameworks to demonstrate mastery of core DOM manipulation.</p>
                                    <div class="flex gap-2">
                                        <span class="text-[10px] font-mono border border-gray-300 px-1.5 rounded">Vanilla JS</span>
                                        <span class="text-[10px] font-mono border border-gray-300 px-1.5 rounded">HTML5 Canvas</span>
                                    </div>
                                </div>

                                {{-- Project 2 --}}
                                <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="font-bold text-gray-900">Kalcer.id</h4>
                                        <a href="#" class="text-[10px] bg-army-dark text-white px-2 py-0.5 rounded">Live Demo</a>
                                    </div>
                                    <p class="text-xs text-gray-600 mb-2">Viral hangout monitoring application featuring a custom virality algorithm and personality-based filtering.</p>
                                    <div class="flex gap-2">
                                        <span class="text-[10px] font-mono border border-gray-300 px-1.5 rounded">Laravel 11</span>
                                        <span class="text-[10px] font-mono border border-gray-300 px-1.5 rounded">MySQL</span>
                                        <span class="text-[10px] font-mono border border-gray-300 px-1.5 rounded">Tailwind</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        {{-- Experience --}}
                        <section>
                            <h3 class="text-lg font-bold text-army-dark mb-5 flex items-center uppercase tracking-wider">
                                <i data-lucide="briefcase" class="w-5 h-5 mr-2 text-army-light"></i> Experience
                            </h3>

                            <div class="space-y-6 border-l-2 border-gray-200 ml-2">
                                {{-- Job 1 --}}
                                <div class="relative pl-6">
                                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-white border-4 border-army-light rounded-full"></div>
                                    <div class="flex justify-between items-baseline mb-1">
                                        <h4 class="font-bold text-gray-900">Graphic & UI Designer</h4>
                                        <span class="text-xs font-mono text-gray-500">2021 - 2023</span>
                                    </div>
                                    <p class="text-sm text-army-dark font-medium mb-2">Royal Rinjani</p>
                                    <ul class="list-disc list-outside ml-4 space-y-1 text-gray-600 text-sm">
                                        <li>Designed responsive UI layouts for mobile & web apps, improving user engagement metrics.</li>
                                        <li>Developed comprehensive design systems that reduced developer hand-off time by 30%.</li>
                                    </ul>
                                </div>

                                {{-- Job 2 --}}
                                <div class="relative pl-6">
                                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-white border-4 border-gray-300 rounded-full"></div>
                                    <div class="flex justify-between items-baseline mb-1">
                                        <h4 class="font-bold text-gray-900">Digital Marketing Manager</h4>
                                        <span class="text-xs font-mono text-gray-500">2019 - 2020</span>
                                    </div>
                                    <p class="text-sm text-army-dark font-medium mb-2">PT Farhan Surya Indah</p>
                                    <ul class="list-disc list-outside ml-4 space-y-1 text-gray-600 text-sm">
                                        <li>Optimized web assets and SEO strategies to drive organic traffic growth.</li>
                                        <li>Maintained strict brand consistency across all digital touchpoints.</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- CSS Khusus Print & Ikon --}}
    <style>
        @media print {
            @page { margin: 0; size: A4; }
            body { 
                background-color: white; 
                -webkit-print-color-adjust: exact !important; 
                print-color-adjust: exact !important;
            }
            .print\:hidden { display: none !important; }
            #cv-area {
                box-shadow: none !important;
                margin: 0 !important;
                border-radius: 0 !important;
                width: 100% !important;
            }
            /* Memastikan link/href terlihat di print jika dibutuhkan, 
               atau hilangkan baris ini jika ingin bersih */
            a[href]:after { content: none !important; } 
        }
    </style>
    
    {{-- Script untuk render ikon Lucide --}}
    <script>
        lucide.createIcons();
    </script>
@endsection