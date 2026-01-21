@extends('layouts.app')

@section('title', 'Mono Stock - Project Detail')

@section('content')
    <div class="bg-white min-h-screen font-sans text-black">
        
        {{-- Navigation Back --}}
        <div class="fixed top-6 left-6 z-50">
            <a href="{{ route('home') }}" class="bg-white border-2 border-black px-4 py-2 font-mono-pm text-xs font-bold hover:bg-[#ccff00] shadow-[4px_4px_0px_0px_black] transition flex items-center gap-2">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> BACK TO HOME
            </a>
        </div>

        {{-- Hero Header Proyek --}}
        <header class="h-[60vh] bg-gray-900 relative flex items-center justify-center border-b-2 border-black overflow-hidden">
            <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-50">
            <div class="relative z-10 text-center text-white px-4">
                <span class="bg-[#ccff00] text-black px-3 py-1 font-mono-pm text-xs font-bold mb-4 inline-block">WEB APPLICATION</span>
                <h1 class="text-5xl md:text-7xl font-black mb-4 uppercase">Mono Stock</h1>
                <p class="font-mono-pm text-sm md:text-lg max-w-2xl mx-auto">A minimalist inventory dashboard built without frameworks.</p>
            </div>
        </header>

        {{-- Konten Detail --}}
        <div class="max-w-5xl mx-auto px-6 py-20">
            <div class="grid md:grid-cols-3 gap-12">
                
                {{-- Sidebar Info --}}
                <div class="md:col-span-1 space-y-8">
                    <div class="p-6 border-2 border-black bg-[#f4f4f0] shadow-[6px_6px_0px_0px_black]">
                        <h3 class="font-bold border-b-2 border-black pb-2 mb-4">TECH STACK</h3>
                        <ul class="font-mono-pm text-sm space-y-2">
                            <li>• Vanilla JavaScript</li>
                            <li>• HTML5 Canvas API</li>
                            <li>• CSS Grid</li>
                            <li>• LocalStorage</li>
                        </ul>
                    </div>
                    
                    <div class="space-y-4">
                        <a href="#" target="_blank" class="block w-full text-center bg-black text-white py-3 font-bold hover:bg-[#ff4d00] transition border-2 border-black">LIVE DEMO</a>
                        <a href="#" target="_blank" class="block w-full text-center bg-white text-black py-3 font-bold hover:bg-[#ccff00] transition border-2 border-black">VIEW REPO</a>
                    </div>
                </div>

                {{-- Main Description --}}
                <div class="md:col-span-2 space-y-8 text-lg leading-relaxed">
                    <h2 class="text-3xl font-bold font-serif-pm italic">The Challenge</h2>
                    <p>
                        Most modern dashboards rely heavily on frameworks like React or Vue. The goal of this project was to go back to basics and build a fully functional, reactive inventory system using only <strong>Vanilla JavaScript</strong>.
                    </p>
                    <p>
                        This required deep understanding of the DOM, Event Bubbling, and State Management without relying on external libraries.
                    </p>

                    <h2 class="text-3xl font-bold font-serif-pm italic mt-12">Key Features</h2>
                    <ul class="list-disc pl-5 space-y-2 font-mono-pm text-sm">
                        <li>Real-time stock updates using Custom Events.</li>
                        <li>Interactive charts rendered via HTML5 Canvas (no Chart.js).</li>
                        <li>Responsive grid layout with pure CSS.</li>
                    </ul>
                </div>
            </div>

            {{-- Gallery / Screenshots --}}
            <div class="mt-20 space-y-8">
                <h3 class="text-2xl font-black border-l-8 border-[#ff4d00] pl-4">PROJECT GALLERY</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="border-2 border-black p-2 shadow-[8px_8px_0px_0px_black]">
                        <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="w-full h-auto grayscale hover:grayscale-0 transition">
                    </div>
                    {{-- Tambahkan gambar lain jika ada --}}
                    <div class="border-2 border-black p-2 shadow-[8px_8px_0px_0px_black]">
                         <div class="w-full h-64 bg-gray-100 flex items-center justify-center font-mono-pm text-gray-400">Another Screenshot</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Next Project --}}
        <div class="border-t-2 border-black py-12 text-center bg-[#ccff00]">
            <p class="font-mono-pm text-xs mb-2">NEXT PROJECT</p>
            <a href="{{ route('project.kalcer') }}" class="text-4xl md:text-6xl font-black hover:underline decoration-4">KALCER.ID &rarr;</a>
        </div>

    </div>
@endsection