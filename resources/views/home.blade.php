@extends('layouts.app')

@section('title', 'Farhan Kholid - Creative Portfolio')

@section('content')

    {{-- =======================================================================
         CUSTOM CLAYMORPHISM STYLES
         ======================================================================= --}}
    <style>
        /* Base Clay Styling */
        .clay-card {
            background-color: #ffffff;
            border-radius: 2rem;
            box-shadow: 
                15px 15px 30px #d1d9e6,
                -15px -15px 30px #ffffff,
                inset -5px -5px 10px rgba(0, 0, 0, 0.03),
                inset 5px 5px 10px rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .clay-card-deep {
            background-color: #ffffff;
            border-radius: 2.5rem;
            box-shadow: 
                20px 20px 40px #c8d0e0,
                -20px -20px 40px #ffffff,
                inset -8px -8px 15px rgba(0, 0, 0, 0.05),
                inset 8px 8px 15px rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .clay-btn {
            background-color: #F0F5F9;
            border-radius: 9999px;
            box-shadow: 
                8px 8px 16px #d1d9e6,
                -8px -8px 16px #ffffff,
                inset -3px -3px 6px rgba(0, 0, 0, 0.02),
                inset 3px 3px 6px rgba(255, 255, 255, 0.8);
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            color: #1e293b; /* slate-800 */
            font-weight: bold;
        }

        .clay-btn:hover {
            transform: scale(1.05);
            box-shadow: 
                10px 10px 20px #ccdbed,
                -10px -10px 20px #ffffff,
                inset -5px -5px 10px rgba(0, 0, 0, 0.05),
                inset 5px 5px 10px rgba(255, 255, 255, 0.9);
        }

        .clay-circle {
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 
                10px 10px 20px #d1d9e6,
                -10px -10px 20px #ffffff,
                inset -4px -4px 8px rgba(0, 0, 0, 0.03),
                inset 4px 4px 8px rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .clay-circle:hover {
            transform: scale(1.1);
            box-shadow: 
                12px 12px 24px #cbd5e1,
                -12px -12px 24px #ffffff,
                inset -6px -6px 12px rgba(0, 0, 0, 0.06),
                inset 6px 6px 12px rgba(255, 255, 255, 0.9);
        }

        /* Clay Blob inside hero */
        .clay-blob {
            background-color: #e2e8f0;
            border-radius: 50%;
            box-shadow: 
                15px 15px 30px #cbd5e1,
                -15px -15px 30px #f8fafc,
                inset -10px -10px 20px rgba(0,0,0,0.05),
                inset 10px 10px 20px rgba(255,255,255,0.8);
            animation: float 6s ease-in-out infinite;
        }
        
        body {
            background-color: #F0F5F9;
            color: #1e293b;
        }
        
        /* Utility for internal shadows only (like pressed areas) */
        .clay-inset {
            background-color: #F0F5F9;
            border-radius: 1.5rem;
            box-shadow: 
                inset 8px 8px 16px #d1d9e6,
                inset -8px -8px 16px #ffffff;
        }
    </style>

    {{-- =======================================================================
         SECTION 1: HERO
         ======================================================================= --}}
    <section id="hero" class="min-h-screen w-full flex items-center justify-center relative overflow-hidden pt-20 pb-12">
        
        {{-- Floating 3D Clay Blobs (Background) --}}
        <div class="absolute top-20 left-10 w-48 h-48 clay-blob bg-[#e8f1f8] hidden md:block" style="animation-delay: 0s;"></div>
        <div class="absolute bottom-20 right-20 w-64 h-64 clay-blob bg-[#e0ecf6] hidden md:block" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 right-1/4 w-32 h-32 clay-blob bg-[#f2f7fb] hidden lg:block" style="animation-delay: 4s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="clay-card-deep w-full max-w-5xl mx-auto p-12 md:p-20 text-center flex flex-col items-center justify-center hover:scale-[1.01] transition-transform duration-500">
                
                {{-- Profile Image in Clay Circle --}}
                <div class="w-40 h-40 md:w-56 md:h-56 clay-circle mb-8 p-3">
                    <img src="{{ asset('assets/img/PP FORMAL.PNG') }}" alt="Profile" class="w-full h-full object-cover rounded-full shadow-inner">
                </div>

                {{-- Status Pill --}}
                <div class="clay-btn px-6 py-2 mb-8 text-sm uppercase tracking-widest text-[#8b5cf6] cursor-default hover:scale-100 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-[#8b5cf6] animate-pulse"></span> Available for work
                </div>
                
                <h1 class="font-syne font-black text-5xl md:text-7xl text-slate-800 leading-[1.1] tracking-tight mb-4">
                    Hi, I'm Farhan Kholid.
                </h1>
                
                <h2 class="font-syne font-bold text-2xl md:text-4xl text-slate-500 mb-8 max-w-2xl mx-auto">
                    A <span class="text-slate-700">UI/UX & Graphic Designer</span> molding digital experiences.
                </h2>

                <p class="font-sans text-slate-600 max-w-lg mx-auto leading-relaxed text-lg mb-12 font-medium">
                    I shape soft, accessible, and highly interactive interfaces that feel as natural as clay.
                </p>

                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#uiux" class="clay-btn px-10 py-4 text-lg">
                        View UI/UX Work
                    </a>
                    <a href="#graphic" class="clay-btn px-10 py-4 text-lg text-slate-600 bg-white">
                        Graphic Archives
                    </a>
                </div>

                {{-- Skill Icons Floating near Hero --}}
                <div class="mt-16 flex justify-center gap-4 flex-wrap">
                    <div class="clay-circle w-14 h-14" title="Figma">
                        <img src="https://cdn.simpleicons.org/figma/F24E1E" class="w-7 h-7" alt="Figma">
                    </div>
                    <div class="clay-circle w-14 h-14" title="Adobe Photoshop">
                        <img src="https://cdn.simpleicons.org/adobephotoshop/31A8FF" class="w-7 h-7" alt="Photoshop">
                    </div>
                    <div class="clay-circle w-14 h-14" title="Adobe Illustrator">
                        <img src="https://cdn.simpleicons.org/adobeillustrator/FF9A00" class="w-7 h-7" alt="Illustrator">
                    </div>
                    <div class="clay-circle w-14 h-14" title="Laravel">
                        <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-7 h-7" alt="Laravel">
                    </div>
                    <div class="clay-circle w-14 h-14" title="React">
                        <img src="https://cdn.simpleicons.org/react/61DAFB" class="w-7 h-7" alt="React">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =======================================================================
         SECTION 2: WORK PART 1 - UI/UX ENGINEERING
         ======================================================================= --}}
    <section id="uiux" class="w-full relative z-10 py-24 bg-[#F0F5F9]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="mb-20 text-center reveal-on-scroll">
                <div class="inline-block clay-btn px-6 py-2 mb-4 text-sm font-bold tracking-widest text-[#0ea5e9]">
                    PART 1
                </div>
                <h2 class="font-syne font-black text-4xl md:text-5xl text-slate-800 mb-4">UI/UX Engineering</h2>
                <p class="font-sans text-slate-500 max-w-xl mx-auto font-medium text-lg">
                    Digital products molded with precision, empathy, and code.
                </p>
            </div>

            {{-- CSS Grid Structure for Projects --}}
            <div class="grid md:grid-cols-2 gap-12">
                
                {{-- UI/UX PROJECT 1: MONO STOCK --}}
                <div class="clay-card p-6 flex flex-col h-full group reveal-on-scroll">
                    {{-- Compartment 1: Full Screenshot Window --}}
                    <div class="w-full flex-grow clay-inset mb-6 overflow-hidden flex items-center justify-center p-2">
                        <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="w-full h-auto object-contain rounded-2xl shadow-sm group-hover:scale-105 transition-transform duration-500" alt="Mono Stock Dashboard">
                    </div>
                    
                    {{-- Compartment 2: Brief Description Box --}}
                    <div class="mb-6 px-2">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-syne font-bold text-2xl text-slate-800">Mono Stock</h3>
                            {{-- Tech Stack Icons --}}
                            <div class="flex gap-2">
                                <div class="w-8 h-8 clay-circle bg-white" title="Vue.js">
                                    <img src="https://cdn.simpleicons.org/vuedotjs/4FC08D" class="w-4 h-4" alt="Vue">
                                </div>
                                <div class="w-8 h-8 clay-circle bg-white" title="Tailwind">
                                    <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="Tailwind">
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 font-sans leading-relaxed text-sm">
                            Designed a monochromatic, high-contrast dashboard to reduce decision fatigue for traders. The clean layout prioritizes rapid market scanning without cognitive overload.
                        </p>
                    </div>

                    {{-- Compartment 3: Action Area --}}
                    <div class="mt-auto pt-4 border-t border-slate-200/50">
                        <a href="#" class="clay-btn w-full py-4 text-center block text-sm tracking-wide text-slate-700 bg-white">
                            View Live Demo
                        </a>
                    </div>
                </div>

                {{-- UI/UX PROJECT 2: KALCER.ID --}}
                <div class="clay-card p-6 flex flex-col h-full group reveal-on-scroll">
                    <div class="w-full flex-grow clay-inset mb-6 overflow-hidden flex items-center justify-center p-2">
                        <img src="{{ asset('assets/img/porto-fe_2.png') }}" class="w-full h-auto object-contain rounded-2xl shadow-sm group-hover:scale-105 transition-transform duration-500" alt="Kalcer.ID">
                    </div>
                    <div class="mb-6 px-2">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-syne font-bold text-2xl text-slate-800">Kalcer.ID</h3>
                            <div class="flex gap-2">
                                <div class="w-8 h-8 clay-circle bg-white" title="Laravel">
                                    <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-4 h-4" alt="Laravel">
                                </div>
                                <div class="w-8 h-8 clay-circle bg-white" title="React">
                                    <img src="https://cdn.simpleicons.org/react/61DAFB" class="w-4 h-4" alt="React">
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 font-sans leading-relaxed text-sm">
                            A comprehensive cultural hub bridging fragmented heritage sites into one unified platform. Features dynamic event discovery wrapped in a smooth, responsive UI.
                        </p>
                    </div>
                    <div class="mt-auto pt-4 border-t border-slate-200/50">
                        <a href="#" class="clay-btn w-full py-4 text-center block text-sm tracking-wide text-slate-700 bg-white">
                            View Live Project
                        </a>
                    </div>
                </div>

                {{-- UI/UX PROJECT 3: LUMINA VISA --}}
                <div class="clay-card p-6 flex flex-col h-full group reveal-on-scroll">
                    <div class="w-full flex-grow clay-inset mb-6 overflow-hidden flex items-center justify-center p-2">
                        <img src="{{ asset('assets/img/porto-fe_4.png') }}" class="w-full h-auto object-contain rounded-2xl shadow-sm group-hover:scale-105 transition-transform duration-500" alt="Lumina Visa">
                    </div>
                    <div class="mb-6 px-2">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-syne font-bold text-2xl text-slate-800">LuminaVisa</h3>
                            <div class="flex gap-2">
                                <div class="w-8 h-8 clay-circle bg-white" title="Figma">
                                    <img src="https://cdn.simpleicons.org/figma/F24E1E" class="w-4 h-4" alt="Figma">
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 font-sans leading-relaxed text-sm">
                            A mobile app aimed at simplifying opaque visa processes. Broken down into bite-sized steps with clear visual feedback to ease traveler anxiety.
                        </p>
                    </div>
                    <div class="mt-auto pt-4 border-t border-slate-200/50">
                        <a href="#" class="clay-btn w-full py-4 text-center block text-sm tracking-wide text-slate-700 bg-white">
                            Explore Case Study
                        </a>
                    </div>
                </div>

                {{-- UI/UX PROJECT 4: PORTFOLIO --}}
                <div class="clay-card p-6 flex flex-col h-full group reveal-on-scroll">
                    <div class="w-full h-64 clay-inset mb-6 flex items-center justify-center p-2 bg-gradient-to-br from-[#e0ecf6] to-[#F0F5F9]">
                         <div class="text-center">
                             <div class="w-16 h-16 clay-circle mx-auto mb-4 bg-white">
                                 <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-8 h-8" alt="Laravel">
                             </div>
                             <span class="font-syne font-bold text-slate-700">Claymorphism UI V2</span>
                         </div>
                    </div>
                    <div class="mb-6 px-2">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-syne font-bold text-2xl text-slate-800">This Portfolio</h3>
                            <div class="flex gap-2">
                                <div class="w-8 h-8 clay-circle bg-white" title="Tailwind">
                                    <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-4 h-4" alt="Tailwind">
                                </div>
                            </div>
                        </div>
                        <p class="text-slate-600 font-sans leading-relaxed text-sm">
                            An exploration in strict Claymorphism design logic, utilizing stacked inset and drop shadows in CSS to create fluffy, tactile interfaces.
                        </p>
                    </div>
                    <div class="mt-auto pt-4 border-t border-slate-200/50">
                        <a href="#" class="clay-btn w-full py-4 text-center block text-sm tracking-wide text-[#0ea5e9]">
                            You're Here
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =======================================================================
         SECTION 3: WORK PART 2 - GRAPHIC DESIGN ARCHIVES (BENTO GRID)
         ======================================================================= --}}
    <section id="graphic" class="w-full relative z-10 py-24 min-h-screen bg-[#F0F5F9] border-t border-slate-200/50">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="mb-16 text-center reveal-on-scroll">
                <div class="inline-block clay-btn px-6 py-2 mb-4 text-sm font-bold tracking-widest text-[#f59e0b]">
                    PART 2
                </div>
                <h2 class="font-syne font-black text-4xl md:text-5xl text-slate-800 mb-4">Graphic Archives</h2>
                <p class="font-sans text-slate-500 max-w-xl mx-auto font-medium text-lg">
                    Branding, typography, and visual identities crafted with care.
                </p>
            </div>

            {{-- Bento / Masonry Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 auto-rows-[200px] md:auto-rows-[250px]">
                
                {{-- Item 1: Large Feature (spans 2x2) --}}
                <div class="clay-card col-span-2 md:col-span-2 row-span-2 p-3 group reveal-on-scroll">
                    <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/800x800/e2e8f0/64748b?text=Main+Branding+Showcase" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 1">
                        <div class="absolute bottom-4 left-4 clay-btn px-4 py-2 text-xs">Brand Identity</div>
                    </div>
                </div>

                {{-- Item 2: Tall (spans 1x2) --}}
                <div class="clay-card col-span-2 md:col-span-1 lg:col-span-2 row-span-2 p-3 group reveal-on-scroll">
                     <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/600x1200/cbd5e1/475569?text=Poster+Design" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 2">
                        <div class="absolute bottom-4 left-4 clay-btn px-4 py-2 text-xs">Poster Series</div>
                    </div>
                </div>

                {{-- Item 3: Wide (spans 2x1) --}}
                <div class="clay-card col-span-2 md:col-span-2 row-span-1 p-3 group reveal-on-scroll">
                     <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/800x400/f1f5f9/94a3b8?text=Social+Media" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 3">
                        <div class="absolute bottom-4 left-4 clay-btn px-4 py-2 text-xs">Social Assets</div>
                    </div>
                </div>

                {{-- Item 4: Normal (spans 1x1) --}}
                <div class="clay-card col-span-1 md:col-span-1 lg:col-span-2 row-span-1 p-3 group reveal-on-scroll">
                     <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/400x400/e2e8f0/64748b?text=Logo+Mark" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 4">
                    </div>
                </div>
                
                {{-- Item 5: Normal (spans 1x1) --}}
                <div class="clay-card col-span-1 md:col-span-1 row-span-1 p-3 group reveal-on-scroll hidden md:block">
                     <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/400x400/f8fafc/94a3b8?text=Typography" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 5">
                    </div>
                </div>
                
                {{-- Item 6: Wide Header (spans 3x1) --}}
                <div class="clay-card col-span-2 md:col-span-3 lg:col-span-3 row-span-1 p-3 group reveal-on-scroll">
                     <div class="w-full h-full clay-inset overflow-hidden relative rounded-2xl">
                        <img src="https://placehold.co/1200x400/cbd5e1/475569?text=Packaging+Design" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Graphic Design 6">
                        <div class="absolute bottom-4 left-4 clay-btn px-4 py-2 text-xs">Packaging</div>
                    </div>
                </div>

                {{-- Item 7: Normal info box (spans 1x1) --}}
                <div class="clay-card col-span-2 md:col-span-1 row-span-1 p-6 flex flex-col justify-center items-center text-center reveal-on-scroll">
                    <div class="w-12 h-12 clay-circle mb-4">
                        <img src="https://cdn.simpleicons.org/adobeillustrator/FF9A00" class="w-6 h-6" alt="AI">
                    </div>
                    <span class="font-syne font-bold text-slate-800 text-sm">Vector Artworks</span>
                    <span class="font-sans text-xs text-slate-500 mt-1">2023 - 2026</span>
                </div>

            </div>
            
            <div class="text-center mt-12">
                 <a href="#" class="inline-block clay-btn px-8 py-4 text-slate-700 hover:text-slate-900">
                     Load More Archives
                 </a>
            </div>
        </div>
    </section>

    {{-- =======================================================================
         SECTION 4: CONTACT (CLAYMORPHISM)
         ======================================================================= --}}
    <section id="contact" class="py-24 w-full relative z-10 bg-[#F0F5F9]">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="clay-card-deep p-8 md:p-16 text-center reveal-on-scroll relative overflow-hidden">
                
                <h2 class="font-syne font-black text-4xl md:text-5xl text-slate-800 mb-6 relative z-10">Let's Connect</h2>
                <p class="font-sans text-slate-500 mb-10 text-lg font-medium relative z-10">Have a project in mind? Let's mold it together.</p>

                <form action="#" class="max-w-md mx-auto space-y-6 relative z-10">
                    <input type="text" placeholder="Your Name" class="w-full px-6 py-4 rounded-2xl bg-[#F0F5F9] border-none focus:outline-none text-slate-700 placeholder-slate-400 shadow-[inset_4px_4px_8px_#d1d9e6,inset_-4px_-4px_8px_#ffffff] transition-shadow duration-300 focus:shadow-[inset_6px_6px_10px_#cbd5e1,inset_-6px_-6px_10px_#ffffff]">
                    
                    <input type="email" placeholder="Your Email" class="w-full px-6 py-4 rounded-2xl bg-[#F0F5F9] border-none focus:outline-none text-slate-700 placeholder-slate-400 shadow-[inset_4px_4px_8px_#d1d9e6,inset_-4px_-4px_8px_#ffffff] transition-shadow duration-300 focus:shadow-[inset_6px_6px_10px_#cbd5e1,inset_-6px_-6px_10px_#ffffff]">
                    
                    <textarea rows="4" placeholder="Tell me about your project..." class="w-full px-6 py-4 rounded-2xl bg-[#F0F5F9] border-none focus:outline-none text-slate-700 placeholder-slate-400 shadow-[inset_4px_4px_8px_#d1d9e6,inset_-4px_-4px_8px_#ffffff] transition-shadow duration-300 focus:shadow-[inset_6px_6px_10px_#cbd5e1,inset_-6px_-6px_10px_#ffffff]"></textarea>
                    
                    <button type="button" class="clay-btn w-full py-4 text-slate-700 font-bold text-lg hover:text-slate-900 mt-4">
                        Send Message
                    </button>
                </form>

                 <div class="mt-16 flex justify-center gap-6 relative z-10 flex-wrap">
                    <a href="https://www.linkedin.com/in/farhan-kholid" target="_blank" class="w-16 h-16 clay-circle group" title="LinkedIn">
                        <img src="https://cdn.simpleicons.org/linkedin/0A66C2" class="w-8 h-8 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-transform duration-300" alt="LI">
                    </a>
                    <a href="https://github.com/farhankholid" target="_blank" class="w-16 h-16 clay-circle group" title="GitHub">
                         <img src="https://cdn.simpleicons.org/github/181717" class="w-8 h-8 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-transform duration-300" alt="GH">
                    </a>
                    <a href="mailto:farhankholid20@gmail.com" class="w-16 h-16 clay-circle group" title="Gmail">
                         <img src="https://cdn.simpleicons.org/gmail/EA4335" class="w-8 h-8 opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-transform duration-300" alt="Mail">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="w-full py-8 text-center relative z-10 bg-[#F0F5F9] mt-8 border-t border-slate-200/50">
        <p class="font-mono text-xs text-slate-400 uppercase tracking-widest font-bold">
            &copy; 2026 Farhan Kholid. Molded with Claymorphism.
        </p>
    </footer>

@endsection