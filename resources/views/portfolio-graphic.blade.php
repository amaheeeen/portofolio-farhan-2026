@extends('layouts.app')

@section('title', 'Visual Works - Farhan Kholid')

@section('content')
    <div class="bg-white min-h-screen">
        
        {{-- Header: Minimalist Studio Style --}}
        <div class="pt-32 pb-16 px-6 md:px-12 border-b border-gray-100">
            <div class="max-w-7xl mx-auto">
                <span class="text-army-light font-mono text-xs tracking-widest uppercase mb-2 block">Selected Works</span>
                <h1 class="text-6xl md:text-8xl font-black text-army-dark tracking-tighter mb-6">
                    VISUAL<span class="text-gray-300">INDEX.</span>
                </h1>
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
                    <p class="text-gray-500 max-w-xl text-lg leading-relaxed">
                        A collection of brand identities, illustrations, and digital assets. Each project is a deep dive into solving visual problems.
                    </p>
                    
                    {{-- Filter Sederhana --}}
                    <div class="flex gap-4 text-sm font-bold text-army-dark">
                        <button class="border-b-2 border-army-dark pb-1">All</button>
                        <button class="text-gray-400 hover:text-army-dark transition">Branding</button>
                        <button class="text-gray-400 hover:text-army-dark transition">Social</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Content: MASONRY LAYOUT (Pinterest Style) --}}
        <div class="max-w-400 mx-auto px-4 sm:px-6 py-12">
            <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">

                {{-- ITEM 1: CITEUP (Branding) --}}
                <div class="break-inside-avoid group cursor-pointer" onclick="openCaseStudy('citeup')">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 mb-4">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 z-10 flex flex-col justify-center items-center text-white p-6 text-center">
                            <span class="text-xs font-mono uppercase tracking-widest mb-2">View Case Study</span>
                            <h3 class="text-3xl font-black">CITEUP 2025</h3>
                            <p class="text-sm opacity-80 mt-2">Full Branding & Identity</p>
                        </div>
                        <img src="{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}" class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105">
                    </div>
                </div>

                {{-- ITEM 2: Social Media (Vertical/Portrait) --}}
                <div class="break-inside-avoid group cursor-pointer" onclick="openCaseStudy('hiring')">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 mb-4">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 z-10 flex flex-col justify-center items-center text-white p-6 text-center">
                            <span class="text-xs font-mono uppercase tracking-widest mb-2">View Case Study</span>
                            <h3 class="text-3xl font-black">Recruitment</h3>
                            <p class="text-sm opacity-80 mt-2">Social Media Visuals</p>
                        </div>
                        {{-- Placeholder Portrait --}}
                        <img src="https://placehold.co/600x800/4A6E6A/FFFFFF?text=Social+Media+Portrait" class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105">
                    </div>
                </div>

                {{-- ITEM 3: 3D Art (Square) --}}
                <div class="break-inside-avoid group cursor-pointer" onclick="openCaseStudy('3d')">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 mb-4">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 z-10 flex flex-col justify-center items-center text-white p-6 text-center">
                            <span class="text-xs font-mono uppercase tracking-widest mb-2">View Case Study</span>
                            <h3 class="text-3xl font-black">Abstract Form</h3>
                            <p class="text-sm opacity-80 mt-2">3D Render Experiment</p>
                        </div>
                        <img src="https://placehold.co/800x800/1E2D2B/F3F4F6?text=3D+Abstract" class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105">
                    </div>
                </div>

                {{-- ITEM 4: Merchandise (Landscape) --}}
                <div class="break-inside-avoid group cursor-pointer" onclick="openCaseStudy('merch')">
                    <div class="relative overflow-hidden rounded-xl bg-gray-100 mb-4">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 z-10 flex flex-col justify-center items-center text-white p-6 text-center">
                            <span class="text-xs font-mono uppercase tracking-widest mb-2">View Case Study</span>
                            <h3 class="text-3xl font-black">Event Merch</h3>
                            <p class="text-sm opacity-80 mt-2">T-Shirt & Lanyard</p>
                        </div>
                        <img src="https://placehold.co/800x500/6B7280/FFFFFF?text=Merchandise" class="w-full h-auto object-cover transform transition duration-700 group-hover:scale-105">
                    </div>
                </div>

            </div>
        </div>

        {{-- Footer Simple --}}
        <div class="py-12 text-center text-gray-400 text-sm border-t border-gray-100">
            &copy; 2025 Farhan Kholid. Design Portfolio.
        </div>

    </div>

    {{-- MODAL FULL SCREEN (Overlay) --}}
    <div id="case-study-modal" class="hidden fixed inset-0 z-50 bg-white/95 backdrop-blur-xl overflow-y-auto">
        
        {{-- Floating Close Button --}}
        <button id="close-modal" class="fixed top-6 right-6 z-60 bg-white text-army-dark hover:bg-army-dark hover:text-white rounded-full p-3 transition shadow-xl border border-gray-100 group">
            <i data-lucide="x" class="w-6 h-6 group-hover:rotate-90 transition duration-300"></i>
        </button>

        {{-- Container Landing Page di dalam Modal --}}
        <div id="modal-content" class="min-h-screen">
            {{-- Konten akan di-inject lewat JS --}}
        </div>

    </div>
@endsection

@push('scripts')
<script>
    // DATA PROJECT (Simulasi Database Kecil-kecilan)
    // Di sinilah Anda mengatur isi "Landing Page" untuk setiap project
    const projects = {
        'citeup': {
            title: "CITEUP 2025 Branding",
            category: "Brand Identity",
            description: "Visual identity for a technology event focusing on the future of connectivity. The goal was to create a dynamic, energetic, yet professional look.",
            cover: "{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}",
            // Array gambar untuk konten landing page
            gallery: [
                { type: 'image', src: "{{ asset('assets/img/LOGO CU25 (no Bg)_low.png') }}", caption: "Primary Logo Mark" },
                { type: 'text', title: "The Concept", content: "The logo represents a connection node, symbolizing the gathering of students and professionals. The geometric shapes provide stability while the vibrant colors suggest innovation." },
                { type: 'image', src: "https://placehold.co/1200x600/1E2D2B/FFFFFF?text=Color+Palette+&+Typography", caption: "Visual System" },
                { type: 'image', src: "https://placehold.co/800x1000/4A6E6A/FFFFFF?text=Mascot+Design", caption: "Official Mascot Character" },
                { type: 'grid', images: [
                    "https://placehold.co/600x600/F3F4F6/1E2D2B?text=ID+Card",
                    "https://placehold.co/600x600/F3F4F6/1E2D2B?text=T-Shirt",
                ]},
                { type: 'image', src: "https://placehold.co/1200x400/1E2D2B/FFFFFF?text=Website+Banner+Implementation", caption: "Digital Application" }
            ]
        },
        'hiring': {
            title: "Recruitment Campaign",
            category: "Social Media Strategy",
            description: "A cohesive set of social media assets designed to attract high-quality talent through bold typography and clear messaging.",
            cover: "https://placehold.co/1200x600/4A6E6A/FFFFFF?text=Hiring+Header",
            gallery: [
                { type: 'image', src: "https://placehold.co/1080x1080/4A6E6A/FFFFFF?text=Feed+Post+1", caption: "Main Announcement" },
                { type: 'image', src: "https://placehold.co/1080x1920/1E2D2B/FFFFFF?text=Instagram+Story+Template", caption: "Story Template" },
                { type: 'text', title: "Typography", content: "Using a bold sans-serif font to ensure readability on small mobile screens while maintaining a professional corporate tone." }
            ]
        },
        '3d': {
            title: "Abstract Dimensions",
            category: "3D Visualization",
            description: "Exploration of form, light, and texture using Blender.",
            cover: "https://placehold.co/1200x800/1E2D2B/FFFFFF?text=3D+Header",
            gallery: [
                { type: 'image', src: "https://placehold.co/1000x1000/6B7280/FFFFFF?text=Render+View+1", caption: "Perspective 01" },
                { type: 'image', src: "https://placehold.co/1000x1000/4A6E6A/FFFFFF?text=Render+View+2", caption: "Perspective 02" }
            ]
        },
        'merch': {
            title: "Event Merchandise",
            category: "Print Design",
            description: "Wearable branding for volunteers and participants.",
            cover: "https://placehold.co/1200x600/6B7280/FFFFFF?text=Merch+Header",
            gallery: [
                { type: 'image', src: "https://placehold.co/800x800/F3F4F6/1E2D2B?text=T-Shirt+Mockup", caption: "T-Shirt Design" }
            ]
        }
    };

    const modal = document.getElementById('case-study-modal');
    const modalContent = document.getElementById('modal-content');
    const closeModalBtn = document.getElementById('close-modal');

    function openCaseStudy(projectId) {
        const data = projects[projectId];
        if(!data) return;

        // 1. Build Content HTML
        let htmlContent = `
            <div class="w-full">
                
                {{-- Hero Header Image --}}
                <div class="h-[50vh] md:h-[70vh] w-full relative">
                    <img src="${data.cover}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent"></div>
                </div>

                {{-- Project Title & Intro --}}
                <div class="max-w-4xl mx-auto px-6 -mt-20 relative z-10 mb-16">
                    <div class="bg-white p-8 md:p-12 shadow-2xl rounded-2xl border border-gray-100">
                        <span class="text-army-light font-mono text-xs uppercase tracking-widest mb-4 block">${data.category}</span>
                        <h2 class="text-4xl md:text-6xl font-black text-army-dark mb-6">${data.title}</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">${data.description}</p>
                    </div>
                </div>

                {{-- Gallery Loop (The "Landing Page" Feel) --}}
                <div class="max-w-5xl mx-auto px-6 pb-32 space-y-16">
        `;

        // Loop melalui gallery data
        data.gallery.forEach(item => {
            if(item.type === 'image') {
                htmlContent += `
                    <div class="fade-in-up">
                        <div class="rounded-xl overflow-hidden shadow-lg border border-gray-100">
                            <img src="${item.src}" class="w-full h-auto">
                        </div>
                        ${item.caption ? `<p class="text-center text-gray-400 text-sm mt-3 italic">${item.caption}</p>` : ''}
                    </div>
                `;
            } 
            else if (item.type === 'text') {
                htmlContent += `
                    <div class="max-w-2xl mx-auto text-center py-8 fade-in-up">
                        <h3 class="text-2xl font-bold text-army-dark mb-4">${item.title}</h3>
                        <p class="text-gray-600 leading-relaxed">${item.content}</p>
                    </div>
                `;
            }
            else if (item.type === 'grid') {
                htmlContent += `<div class="grid md:grid-cols-2 gap-6 fade-in-up">`;
                item.images.forEach(imgSrc => {
                    htmlContent += `
                        <div class="rounded-xl overflow-hidden shadow-md">
                            <img src="${imgSrc}" class="w-full h-auto">
                        </div>
                    `;
                });
                htmlContent += `</div>`;
            }
        });

        // Close Tags
        htmlContent += `
                </div>
                
                {{-- Next Project CTA --}}
                <div class="bg-accent-gray py-20 text-center">
                    <h3 class="text-xl font-bold text-army-dark mb-4">Interested in collaboration?</h3>
                    <a href="{{ url('/contact') }}" class="inline-block px-8 py-3 bg-army-dark text-white rounded-full hover:bg-army-light transition">Get in Touch</a>
                </div>
            </div>
        `;

        modalContent.innerHTML = htmlContent;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    });

</script>
@endpush