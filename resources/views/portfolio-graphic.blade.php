@extends('layouts.app')

@section('title', 'Visual Works - Farhan Kholid')

@section('content')
    
    {{-- Import Font Limelight untuk Header --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Limelight&display=swap');
        .font-limelight { font-family: 'Limelight', cursive; }
    </style>

    <div class="bg-white min-h-screen">
        
        {{-- HEADER SECTION --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 border-b border-gray-100">
            <h1 class="text-6xl md:text-9xl font-limelight text-army-dark mb-6 fade-in-up">
                VISUAL DIARY
            </h1>
            <div class="flex flex-col md:flex-row justify-between items-start gap-8 fade-in-up delay-100">
                <p class="text-xl text-gray-500 max-w-2xl leading-relaxed">
                    A curated selection of brand identities, corporate assets, and user interface designs. 
                    Structure meets aesthetics.
                </p>
                <div class="flex gap-2">
                    <span class="px-3 py-1 border border-gray-200 rounded-full text-xs uppercase tracking-widest text-gray-400">Branding</span>
                    <span class="px-3 py-1 border border-gray-200 rounded-full text-xs uppercase tracking-widest text-gray-400">UI/UX</span>
                    <span class="px-3 py-1 border border-gray-200 rounded-full text-xs uppercase tracking-widest text-gray-400">Social</span>
                </div>
            </div>
        </div>

        {{-- PROJECT 01: CITEUP 2025 (Layout: Sticky Description Left + Masonry Right) --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-b border-gray-100">
            <div class="grid lg:grid-cols-12 gap-12">
                
                {{-- Text Area (Sticky) --}}
                <div class="lg:col-span-4">
                    <div class="sticky top-24 fade-in-up">
                        <span class="text-army-light font-mono text-xs uppercase tracking-widest mb-2 block">01 — Event Branding</span>
                        <h2 class="text-5xl font-bold text-army-dark mb-6 font-limelight">CITEUP 2025</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Complete visual identity for a technology summit. The concept "Node of Connection" visualizes the gathering of diverse tech enthusiasts into one central point.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500 mb-8 border-l border-gray-200 pl-4">
                            <li>• Logo Design & Usage Guidelines</li>
                            <li>• Merchandise (Lanyard, T-Shirt)</li>
                            <li>• Social Media Templates</li>
                        </ul>
                        <button class="text-army-dark font-bold border-b-2 border-army-dark pb-1 hover:text-army-light transition">View Full Case Study</button>
                    </div>
                </div>

                {{-- Visual Area (Masonry Grid) --}}
                <div class="lg:col-span-8 space-y-6">
                    {{-- Gambar Utama Besar --}}
                    <div class="w-full h-96 bg-gray-100 rounded-lg overflow-hidden relative group fade-in-up delay-100">
                        <img src="{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}" class="w-full h-full object-contain p-10 group-hover:scale-105 transition duration-700">
                        <div class="absolute bottom-4 left-4 bg-white/90 px-3 py-1 text-xs font-mono rounded">Primary Logo Mark</div>
                    </div>

                    {{-- Grid Kecil di Bawahnya --}}
                    <div class="grid grid-cols-2 gap-6">
                        <div class="h-64 bg-gray-900 rounded-lg overflow-hidden relative group fade-in-up delay-200">
                             {{-- Placeholder Mockup Hitam --}}
                             <div class="absolute inset-0 flex items-center justify-center text-gray-600 font-limelight text-2xl group-hover:text-white transition">Mockup 1</div>
                        </div>
                        <div class="h-64 bg-gray-200 rounded-lg overflow-hidden relative group fade-in-up delay-300">
                             {{-- Placeholder Pattern --}}
                             <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-limelight text-2xl group-hover:text-army-dark transition">Pattern</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        {{-- PROJECT 02: PT FARHAN SURYA INDAH (Layout: Bento Box / Grid) --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-b border-gray-100">
            
            {{-- Header Tengah --}}
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
                <span class="text-army-light font-mono text-xs uppercase tracking-widest mb-2 block">02 — Corporate Identity</span>
                <h2 class="text-5xl font-bold text-army-dark mb-4 font-limelight">PT Farhan Surya Indah</h2>
                <p class="text-gray-600">Rebranding and digital asset management for a corporate entity, focusing on trust, stability, and professional growth.</p>
            </div>

            {{-- Bento Grid Layout --}}
            <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-4 h-[800px] md:h-[600px]">
                
                {{-- Item 1: Besar Kiri --}}
                <div class="md:col-span-2 md:row-span-2 bg-gray-800 rounded-2xl overflow-hidden relative group fade-in-up">
                    <img src="https://placehold.co/800x800/1f2937/FFFFFF?text=Stationery+Mockup" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition duration-500">
                    <div class="absolute top-6 left-6 text-white">
                        <h4 class="font-bold text-xl">Stationery Kit</h4>
                        <p class="text-xs opacity-70">Business Card & Letterhead</p>
                    </div>
                </div>

                {{-- Item 2: Kanan Atas --}}
                <div class="md:col-span-2 bg-gray-100 rounded-2xl overflow-hidden relative group fade-in-up delay-100">
                    <img src="https://placehold.co/800x400/e5e7eb/1f2937?text=Web+Banner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>

                {{-- Item 3: Kanan Bawah 1 --}}
                <div class="bg-gray-100 rounded-2xl overflow-hidden relative group fade-in-up delay-200">
                     <div class="absolute inset-0 flex flex-col justify-center items-center p-4 text-center group-hover:bg-army-dark group-hover:text-white transition duration-300">
                        <i data-lucide="bar-chart-2" class="w-8 h-8 mb-2"></i>
                        <span class="font-bold text-sm">SEO Report Assets</span>
                     </div>
                </div>

                {{-- Item 4: Kanan Bawah 2 --}}
                <div class="bg-gray-100 rounded-2xl overflow-hidden relative group fade-in-up delay-300">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-4 text-center group-hover:bg-army-dark group-hover:text-white transition duration-300">
                        <i data-lucide="globe" class="w-8 h-8 mb-2"></i>
                        <span class="font-bold text-sm">Web Assets</span>
                     </div>
                </div>
            </div>
        </section>


        {{-- PROJECT 03: ROYAL RINJANI (Layout: Split 50/50 Overlapping) --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                {{-- Visual Stack (Tumpukan Gambar) --}}
                <div class="relative h-[500px] w-full fade-in-up order-2 lg:order-1">
                    {{-- Gambar Belakang --}}
                    <div class="absolute top-0 left-0 w-3/4 h-3/4 bg-gray-200 rounded-xl overflow-hidden z-0">
                         <img src="https://placehold.co/600x600/e5e7eb/9ca3af?text=Desktop+UI" class="w-full h-full object-cover">
                    </div>
                    {{-- Gambar Depan (Overlap) --}}
                    <div class="absolute bottom-0 right-0 w-2/3 h-2/3 bg-gray-800 rounded-xl overflow-hidden shadow-2xl z-10 border-4 border-white hover:-translate-y-2 transition duration-500">
                        <img src="https://placehold.co/400x400/1f2937/FFFFFF?text=Mobile+UI" class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- Text Area --}}
                <div class="order-1 lg:order-2 fade-in-up delay-100">
                    <span class="text-army-light font-mono text-xs uppercase tracking-widest mb-2 block">03 — UI/UX Design</span>
                    <h2 class="text-5xl font-bold text-army-dark mb-6 font-limelight">Royal Rinjani</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        User Interface design for a travel and hospitality service. The challenge was to create a booking system that feels adventurous yet trustworthy.
                    </p>
                    <div class="flex gap-3 mb-8">
                         <div class="flex items-center gap-2 text-sm text-gray-500">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center"><i data-lucide="figma" class="w-4 h-4"></i></div>
                            Figma
                         </div>
                         <div class="flex items-center gap-2 text-sm text-gray-500">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center"><i data-lucide="layout" class="w-4 h-4"></i></div>
                            Wireframing
                         </div>
                    </div>
                    <button class="px-8 py-3 bg-army-dark text-white rounded-full hover:bg-army-light transition shadow-lg">Explore Prototypes</button>
                </div>

            </div>
        </section>


        {{-- CALL TO ACTION --}}
        <div class="bg-accent-gray py-20 text-center border-t border-gray-200">
            <h3 class="text-2xl font-bold text-army-dark mb-4">Need visuals like these?</h3>
            <a href="{{ route('contact') }}" class="inline-flex items-center text-army-light hover:text-army-dark font-medium transition underline underline-offset-4">
                Let's discuss your project <i data-lucide="arrow-right" class="ml-2 w-4 h-4"></i>
            </a>
        </div>

    </div>
@endsection