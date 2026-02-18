@extends('layouts.app')

@section('title', 'Farhan Kholid - Creative Portfolio')

@section('content')

    {{-- =======================================================================
         HERO SECTION: FADED GREEN GLASS
         ======================================================================= --}}
    <section id="hero" class="min-h-screen w-full flex items-center justify-center relative overflow-hidden pt-20">
        <div class="container mx-auto px-6 relative z-10 grid md:grid-cols-2 gap-12 items-center">
            
            {{-- Typography / Intro (In Strong Glass) --}}
            <div class="text-left space-y-8 reveal-on-scroll col-span-2 md:col-span-1">
                <div class="glass-strong rounded-[2.5rem] p-10 md:p-12 relative overflow-hidden">
                    {{-- Decorative Blur --}}
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -z-10 animate-pulse"></div>
                    
                    <div class="inline-block px-4 py-1 rounded-full bg-emerald-100/50 backdrop-blur-md border border-emerald-200/50 shadow-sm mb-6">
                        <span class="font-mono text-xs text-emerald-800 tracking-widest uppercase font-bold">/// UI_ENGINEER</span>
                    </div>
                    
                    <h1 class="font-syne font-black text-5xl md:text-7xl text-emerald-950 leading-[0.9] tracking-tight mb-4">
                        Farhan<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Kholid.</span>
                    </h1>
                    
                    <div class="space-y-1 mb-8">
                        <h2 class="font-syne font-bold text-2xl md:text-3xl text-emerald-800">UI/UX Designer</h2>
                        <h2 class="font-syne font-bold text-2xl md:text-3xl text-emerald-600/60">& Graphic Designer</h2>
                    </div>

                    <p class="font-sans text-emerald-900/80 max-w-md leading-relaxed text-lg mb-8 font-medium">
                        Crafting <span class="font-bold text-emerald-600">organic interfaces</span> that breathe. 
                        I turn pixels into living, liquid experiences.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#work" class="px-8 py-3 rounded-full bg-emerald-900 text-white font-bold hover:bg-emerald-800 hover:shadow-lg hover:-translate-y-1 transition duration-300">
                            View Work
                        </a>
                        <a href="#contact" class="px-8 py-3 rounded-full bg-white/40 backdrop-blur-sm border border-emerald-800/10 text-emerald-900 font-bold hover:bg-white hover:text-emerald-600 transition duration-300">
                            Contact
                        </a>
                    </div>
                </div>
            </div>

            {{-- Visual / Glass Card with CDN Icons --}}
            <div class="relative reveal-on-scroll text-center md:text-right flex justify-center md:justify-end">
                <div class="glass-faded rounded-[3rem] p-4 inline-block transform rotate-2 hover:rotate-0 transition duration-500 relative">
                     {{-- Floating Decor --}}
                    <div class="absolute -top-6 -right-6 w-24 h-24 rounded-full bg-gradient-to-br from-teal-200 to-emerald-200 blur-xl opacity-60 animate-float"></div>
                    
                    <img src="{{ asset('assets/img/PP FORMAL.PNG') }}" alt="Profile" class="w-72 h-72 md:w-96 md:h-96 object-cover rounded-[2.5rem] shadow-2xl shadow-emerald-900/10">
                    
                    {{-- Floating Glass Chips (CDN Icons) --}}
                    <div class="absolute -bottom-6 -left-6 glass-chip px-5 py-3 rounded-2xl flex items-center gap-3 animate-float-delay-1">
                        <img src="https://cdn.simpleicons.org/figma/0acf83" class="w-6 h-6" alt="Figma">
                        <span class="font-mono text-xs font-bold text-emerald-900">Figma</span>
                    </div>
                     <div class="absolute top-12 -right-10 glass-chip px-5 py-3 rounded-2xl flex items-center gap-3 animate-float-delay-2">
                        <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-6 h-6" alt="Laravel">
                        <span class="font-mono text-xs font-bold text-emerald-900">Laravel</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =======================================================================
         ABOUT SECTION: EXPANDED NARRATIVE
         ======================================================================= --}}
    <section id="about" class="py-24 w-full relative z-10">
        <div class="container mx-auto px-6 max-w-5xl">
            {{-- Narrative --}}
            <div class="grid md:grid-cols-5 gap-12 mb-20 items-start">
                <div class="md:col-span-2 reveal-on-scroll">
                    <h2 class="font-syne font-bold text-4xl md:text-5xl text-emerald-950 mb-6 leading-tight">
                        Bridging<br>
                        <span class="text-emerald-600">Design &<br>Code.</span>
                    </h2>
                </div>
                <div class="md:col-span-3 space-y-6 reveal-on-scroll">
                    <p class="font-sans text-emerald-900/80 text-lg leading-relaxed">
                        I am a hybrid professional standing at the intersection of aesthetic and engineering. My journey began in the structured world of <strong>Architecture & Design</strong>, where I learned the importance of form, space, and user harmony. This foundation seamlessly transitioned into Computer Science, where I now apply those same principles to build digital environments. I don't just code; I architect experiences.
                    </p>
                    <p class="font-sans text-emerald-900/80 text-lg leading-relaxed">
                        My approach is deeply <strong>detail-oriented and user-centric</strong>. I am obsessed with clean, maintainable code and pixel-perfect design execution. Whether it's refining a micro-interaction or structuring a complex database, I believe that quality lies in the details that others might overlook. I build interfaces that feel natural, intuitive, and alive.
                    </p>
                </div>
            </div>

            {{-- Tech Stack --}}
            <div class="glass-faded rounded-[3rem] p-10 reveal-on-scroll border border-emerald-100/50">
                <div class="grid md:grid-cols-2 gap-12">
                     <div>
                        <h3 class="font-mono text-emerald-600 text-sm tracking-widest uppercase mb-6 font-bold flex items-center gap-2">
                             <span class="w-2 h-2 rounded-full bg-emerald-500"></span> DESIGN_LAB
                        </h3>
                        <div class="flex flex-wrap gap-3">
                             <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                <img src="https://cdn.simpleicons.org/figma/0acf83" class="w-6 h-6" alt="Figma"> Figma
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                <img src="https://cdn.simpleicons.org/adobephotoshop/31A8FF" class="w-6 h-6" alt="PS"> Photoshop
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                <img src="https://cdn.simpleicons.org/adobeillustrator/FF9A00" class="w-6 h-6" alt="AI"> Illustrator
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                <img src="https://cdn.simpleicons.org/adobexd/FF61F6" class="w-6 h-6" alt="XD"> Adobe XD
                            </div>
                        </div>
                     </div>
                     
                     <div>
                        <h3 class="font-mono text-teal-600 text-sm tracking-widest uppercase mb-6 font-bold flex items-center gap-2">
                             <span class="w-2 h-2 rounded-full bg-teal-500"></span> DEV_TERMINAL
                        </h3>
                        <div class="flex flex-wrap gap-3">
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                 <img src="https://cdn.simpleicons.org/laravel/FF2D20" class="w-6 h-6" alt="Laravel"> Laravel
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                <img src="https://cdn.simpleicons.org/react/61DAFB" class="w-6 h-6" alt="React"> React
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                 <img src="https://cdn.simpleicons.org/vue.js/4FC08D" class="w-6 h-6" alt="Vue"> Vue
                            </div>
                            <div class="glass-chip px-5 py-3 rounded-xl text-emerald-900 font-bold text-sm flex items-center gap-3">
                                 <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" class="w-6 h-6" alt="Tailwind"> Tailwind
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =======================================================================
         WORK SECTION: FULL SHOWCASE (VERTICAL)
         ======================================================================= --}}
    <section id="work" class="w-full relative z-10 pb-24">
        <div class="container mx-auto px-6 max-w-6xl">
             <div class="mb-24 text-center reveal-on-scroll">
                 <h2 class="font-syne font-bold text-4xl md:text-5xl text-emerald-950 mb-4">Selected Works</h2>
                 <p class="font-sans text-emerald-700/70 font-medium">A curated selection of problems solved and universes built.</p>
            </div>

            <div class="space-y-32">
                {{-- PROJECT 1: MONO STOCK --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-auto bg-emerald-50/50 rounded-[2.5rem] overflow-hidden flex items-center justify-center relative">
                            {{-- Image Container: object-contain to avoid cropping --}}
                            <img src="{{ asset('assets/img/porto-fe_1.png') }}" class="w-full h-auto object-contain max-h-[80vh] hover:scale-[1.01] transition duration-700" alt="Mono Stock Dashboard">
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">Mono Stock</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Web App</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Dashboard</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Problem</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Financial dashboards often suffer from information overload, presenting dense data without hierarchy or visual breathing room. Users struggle to identify key stock trends quickly, leading to decision fatigue in high-stakes trading environments.
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Solution</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     I designed a monochromatic, high-contrast interface that prioritizes data clarity. By using a "card-based" layout and subtle glassmorphism, I separated distinct data streams. The result is a dashboard that allows traders to scan market movements instantly while reducing cognitive load through a clean, minimalist aesthetic.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>

                {{-- PROJECT 2: KALCER.ID --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-auto bg-emerald-50/50 rounded-[2.5rem] overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('assets/img/porto-fe_2.png') }}" class="w-full h-auto object-contain max-h-[80vh] hover:scale-[1.01] transition duration-700" alt="Kalcer.ID">
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">Kalcer.ID</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Fullstack</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Culture</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Problem</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Cultural events and local heritage sites in Indonesia lacked a unified digital platform for discovery and ticketing. Users had to navigate fragmented websites with poor mobile compatibility to find cultural activities.
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Solution</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Kalcer.ID bridges this gap as a comprehensive cultural hub. I developed a responsive full-stack application that integrates event discovery, booking, and educational content. The UI focuses on vibrant imagery and smooth navigation to evoke the richness of the culture it represents.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>

                {{-- PROJECT 3: LUMINA VISA --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-auto bg-emerald-50/50 rounded-[2.5rem] overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('assets/img/porto-fe_4.png') }}" class="w-full h-auto object-contain max-h-[80vh] hover:scale-[1.01] transition duration-700" alt="Lumina Visa">
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">LuminaVisa</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Mobile App</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Utility</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Problem</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Visa application processes are notoriously complex and opaque. Travelers often feel anxious about document requirements and status tracking, leading to abandonment or errors.
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Solution</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     LuminaVisa simplifies the journey with a progress-based mobile interface. I focused on breaking down complex forms into bite-sized steps with clear visual feedback. The "Lumina" branding uses light and transparency metaphors to suggest clarity and ease in a typically bureaucratic process.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>
                
                {{-- PROJECT 4: CITEUP 2025 --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-auto bg-emerald-50/50 rounded-[2.5rem] overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('assets/img/porto-gd_1.png') }}" class="w-full h-auto object-contain max-h-[80vh] hover:scale-[1.01] transition duration-700" alt="CiteUp 2025">
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">CiteUp 2025</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Event Branding</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Identity</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Problem</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     The annual tech conference needed a fresh identity that signaled innovation while remaining accessible to a diverse student body. Previous brandings felt too corporate and stiff.
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Solution</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     For CiteUp 2025, I developed a dynamic visual identity system based on "connected nodes." The branding uses vibrant gradients and geometric patterns to represent the convergence of ideas. The assets were deployed across social media, merchandise, and stage design, creating a cohesive and energetic atmosphere.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>

                {{-- PROJECT 5: CITEUP 2026 (PLACEHOLDER) --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-[500px] bg-gradient-to-br from-emerald-100 to-teal-100 rounded-[2.5rem] overflow-hidden flex flex-col items-center justify-center relative">
                            <div class="glass-strong px-8 py-4 rounded-full border border-white/50 animate-pulse">
                                <span class="font-mono text-xl font-bold text-emerald-800 tracking-widest">CONFIDENTIAL</span>
                            </div>
                            <span class="font-sans text-emerald-600/60 mt-4 text-sm font-medium">Coming Soon</span>
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">CiteUp 2026</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Future Project</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Branding</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Vision</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Currently in the conceptualization phase, the 2026 edition of CiteUp will explore the theme of "Digital Symbiosis." 
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">Status</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Early visual explorations focus on organic typography and bio-digital textures. Full case study to be revealed upon official launch.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>

                {{-- PROJECT 6: FARHAN SURYA INDAH --}}
                <div class="group reveal-on-scroll">
                    <div class="glass-faded rounded-[3rem] p-4 md:p-6 transition-all duration-500 hover:shadow-2xl hover:shadow-emerald-900/10 mb-8 border border-white/60">
                         <div class="w-full h-auto bg-emerald-50/50 rounded-[2.5rem] overflow-hidden flex items-center justify-center relative">
                            <img src="{{ asset('assets/img/porto-gd_2.png') }}" class="w-full h-auto object-contain max-h-[80vh] hover:scale-[1.01] transition duration-700" alt="Farhan Surya Indah">
                         </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8 px-4">
                        <div class="md:col-span-1">
                             <h3 class="font-syne font-bold text-3xl md:text-4xl text-emerald-950 mb-2">FSI Corporate</h3>
                             <div class="flex flex-wrap gap-2 mb-4">
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-emerald-700 uppercase bg-emerald-100 px-3 py-1 rounded-full">Corporate Identity</span>
                                 <span class="text-[10px] font-mono font-bold tracking-widest text-teal-700 uppercase bg-teal-100 px-3 py-1 rounded-full">Marketing</span>
                             </div>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Problem</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     Farhan Surya Indah, a growing enterprise, struggled with an outdated brand image that didn't reflect its modern workplace values. Their internal communications and external marketing lacked consistency.
                                 </p>
                             </div>
                             <div>
                                 <h4 class="font-mono text-xs text-emerald-500 font-bold uppercase tracking-widest mb-1">The Solution</h4>
                                 <p class="text-emerald-900/80 font-sans leading-relaxed">
                                     I led a comprehensive rebrand focusing on "Workplace Experience." The new identity utilizes professional yet approachable typography and a color palette that signifies growth and stability. The project included redesigning internal portals, marketing decks, and physical signage.
                                 </p>
                             </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- =======================================================================
         CONTACT SECTION: GLASS FORM
         ======================================================================= --}}
    <section id="contact" class="py-24 w-full relative z-10">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="glass-faded rounded-[3rem] p-8 md:p-16 text-center reveal-on-scroll relative overflow-hidden">
                {{-- Decorative Blob behind form --}}
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -z-10 animate-pulse"></div>

                <h2 class="font-syne font-bold text-4xl md:text-5xl text-emerald-950 mb-6">Let's Create Together</h2>
                <p class="font-sans text-emerald-800/80 mb-10 text-lg font-medium">Have a project in mind? Let's build something organic.</p>

                <form action="#" class="max-w-md mx-auto space-y-4">
                    <input type="text" placeholder="Your Name" class="w-full px-6 py-4 rounded-xl bg-white/50 backdrop-blur-sm border border-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-400 text-emerald-900 placeholder-emerald-800/40 shadow-sm transition">
                    <input type="email" placeholder="Your Email" class="w-full px-6 py-4 rounded-xl bg-white/50 backdrop-blur-sm border border-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-400 text-emerald-900 placeholder-emerald-800/40 shadow-sm transition">
                    <textarea rows="4" placeholder="Tell me about your project..." class="w-full px-6 py-4 rounded-xl bg-white/50 backdrop-blur-sm border border-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-400 text-emerald-900 placeholder-emerald-800/40 shadow-sm transition"></textarea>
                    
                    <button type="button" class="w-full py-4 rounded-xl bg-gradient-to-r from-emerald-600 to-teal-500 text-white font-bold text-lg hover:shadow-lg hover:shadow-emerald-500/20 hover:scale-[1.02] transition duration-300">
                        Send Message
                    </button>
                </form>

                 <div class="mt-12 flex justify-center gap-6">
                    <a href="https://www.linkedin.com/in/farhan-kholid" target="_blank" class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center hover:scale-110 transition shadow-sm group border border-emerald-100">
                        <img src="https://cdn.simpleicons.org/linkedin/0077b5" class="w-6 h-6 opacity-80 group-hover:opacity-100" alt="LI">
                    </a>
                    <a href="https://www.instagram.com/frhnkhld_" target="_blank" class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center hover:scale-110 transition shadow-sm group border border-emerald-100">
                        <img src="https://cdn.simpleicons.org/instagram/E4405F" class="w-6 h-6 opacity-80 group-hover:opacity-100" alt="IG">
                    </a>
                    <a href="mailto:farhankholid20@gmail.com" class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center hover:scale-110 transition shadow-sm group border border-emerald-100">
                         <img src="https://cdn.simpleicons.org/gmail/EA4335" class="w-6 h-6 opacity-80 group-hover:opacity-100" alt="Mail">
                    </a>
                    <a href="https://github.com/farhankholid" target="_blank" class="w-14 h-14 bg-white/80 rounded-full flex items-center justify-center hover:scale-110 transition shadow-sm group border border-emerald-100">
                         <img src="https://cdn.simpleicons.org/github/181717" class="w-6 h-6 opacity-80 group-hover:opacity-100" alt="GH">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="w-full py-8 text-center relative z-10 border-t border-white/20">
        <p class="font-mono text-[10px] text-emerald-800/50 uppercase tracking-widest font-bold">
            &copy; 2026 Farhan Kholid. Faded Green Universe.
        </p>
    </footer>

@endsection