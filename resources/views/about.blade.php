@extends('layouts.app')

@section('title', 'About - Farhan Kholid')

@section('content')
    <div class="monogram-bg">FK</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h1 class="text-5xl font-extrabold text-army-dark mb-4 fade-in-up">About Farhan Kholid</h1>
        <p class="text-xl text-gray-600 mb-12 fade-in-up">A Front-End Developer & Graphic Designer with passion on retro-modern designs.</p>

        <div class="grid lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2 space-y-10">
                
                {{-- PROFILE SECTION --}}
                <section class="p-6 bg-accent-gray rounded-xl shadow-lg border border-gray-200 fade-in-up">
                    <div class="flex items-start space-x-6 mb-6">
                         <img src="{{ asset('assets/img/PP Formal.png') }}" alt="Foto Profil Farhan Kholid" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-md">
                        <div>
                            <h2 class="text-3xl font-bold text-army-dark">I'm Farhan Kholid, <span class="text-army-light">Design Specialist</span></h2>
                            <p class="text-gray-600 mt-1">Front-End Engineer Associate | UI/Visual Designer.</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        I am a hybrid professional with a strong background in visual design and branding (4 years), currently actively transitioning into Front-End Engineering. I thrive on translating complex ideas into elegant user interfaces and powerful visual assets. My passion lies in building functional, minimalist designs with a unique aesthetic flair, often inspired by retro-modern style, which I bring to life using modern technologies like JavaScript, React, and Tailwind CSS.
                    </p>

                    {{-- BAGIAN CV (DITAMBAHKAN DI SINI) --}}
                    <div class="mt-8 flex flex-wrap gap-4 border-t border-gray-300 pt-6">
                        {{-- Tombol Lihat Online --}}
                        <a href="{{ route('cv.web') }}" class="inline-flex items-center px-6 py-3 bg-army-dark text-white font-bold rounded-lg hover:bg-army-light transition duration-300 shadow-md group">
                            <i data-lucide="eye" class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform"></i> View CV Online
                        </a>
                        
                        {{-- Tombol Download PDF --}}
                        <a href="{{ asset('assets/docs/CV_Farhan-Kholid.pdf') }}" download class="inline-flex items-center px-6 py-3 border-2 border-army-dark text-army-dark font-bold rounded-lg hover:bg-army-dark hover:text-white transition duration-300 group">
                            <i data-lucide="download" class="w-5 h-5 mr-2 group-hover:translate-y-1 transition-transform"></i> Download PDF
                        </a>
                    </div>
                </section>
                
                <section class="p-6 bg-white rounded-xl shadow-lg border border-gray-200 fade-in-up" id="education">
                    <h3 class="text-2xl font-bold text-army-dark mb-4 border-b border-gray-200 pb-2">Education</h3>
                    <ul class="space-y-4">
                        <li class="border-l-4 border-army-light pl-4">
                            <p class="text-lg font-semibold">Bachelor of Computer Science (S.Kom)</p>
                            <p class="text-gray-600">Universitas Pertamina - Jakarta (2023 - Present)</p>
                            <p class="text-sm text-gray-500">Focus: Web Development, Algorithms, and Interaction Design.</p>
                        </li>
                        <li class="border-l-4 border-army-light pl-4">
                            <p class="text-lg font-semibold">Bachelor of Architecture (S.Ars)</p>
                            <p class="text-gray-600">Binus University - Jakarta (2019 - 2020)</p>
                            <p class="text-sm text-gray-500">Focus: Design Fundamentals & Spatial Planning.</p>
                        </li>
                    </ul>
                </section>

                <section class="p-6 bg-white rounded-xl shadow-lg border border-gray-200 fade-in-up" id="experience">
                    <h3 class="text-2xl font-bold text-army-dark mb-4 border-b border-gray-200 pb-2">Experience</h3>
                    <ul class="space-y-4">
                        <li class="border-l-4 border-army-light pl-4">
                            <p class="text-lg font-semibold">Digital Marketing Manager (Web Assets & Optimization)</p>
                            <p class="text-gray-600">PT Farhan Surya Indah (2019 - 2020)</p>
                            <p class="text-sm text-gray-500">Managed corporate web assets and optimized content for SEO, reporting on performance metrics to drive content strategy. Ensured visual consistency and proper branding across all digital platforms.</p>
                        </li>
                        <li class="border-l-4 border-army-light pl-4">
                            <p class="text-lg font-semibold">Graphic & UI Designer</p>
                            <p class="text-gray-600">Royal Rinjani (2021 - 2023)</p>
                            <p class="text-sm text-gray-500">Designed effective User Interfaces (UI) for web and mobile applications, adhering to UX best practices. Created detailed visual design systems and style guides ready for direct implementation by development teams.</p>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="space-y-10">
                
                <section class="p-6 bg-accent-gray rounded-xl shadow-lg border border-gray-200 fade-in-up">
                    <h3 class="text-2xl font-bold text-army-dark mb-4 border-b border-gray-200 pb-2">Technical Skills</h3>
                    
                    <div class="mb-6">
                        <h4 class="font-semibold text-army-light mb-2">Front-End (Web)</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">HTML5</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Tailwind CSS</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">JavaScript (ES6+)</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Git/GitHub</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Responsive Design</span>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-semibold text-army-light mb-2">Design & UI/UX</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Adobe Photoshop (Ps)</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Adobe Illustrator (Ai)</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">Figma/Sketch</span>
                            <span class="bg-army-dark text-white text-sm font-mono px-3 py-1 rounded-full">UI/UX Prototyping</span>
                        </div>
                    </div>
                </section>

                <section class="p-6 bg-white rounded-xl shadow-lg border border-gray-200 fade-in-up">
                    <h3 class="text-2xl font-bold text-army-dark mb-4 border-b border-gray-200 pb-2">Languages & Interest</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-semibold text-army-light mb-2">Languages</h4>
                            <ul class="text-gray-700 space-y-1 text-sm">
                                <li>Indonesia (Native)</li>
                                <li>English (Intermediate)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-army-light mb-2">Interests</h4>
                            <ul class="text-gray-700 space-y-1 text-sm">
                                <li>Minimalist Architecture</li>
                                <li>Digital Photography</li>
                                <li>Retro Games</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <section class="p-6 bg-accent-gray rounded-xl shadow-lg border border-gray-200 fade-in-up">
                    <h3 class="text-2xl font-bold text-army-dark mb-4 border-b border-gray-200 pb-2">Contact Me</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center"><i data-lucide="mail" class="w-5 h-5 mr-3 text-army-light"></i> farhankholid20@gmail.com</li>
                        <li class="flex items-center"><i data-lucide="phone" class="w-5 h-5 mr-3 text-army-light"></i> +62 813-8833-7828</li>
                        <li class="flex items-center"><i data-lucide="map-pin" class="w-5 h-5 mr-3 text-army-light"></i> Jakarta, Indonesia</li>
                    </ul>
                    <div class="mt-4 flex space-x-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-medium text-white bg-army-dark px-4 py-2 rounded-lg hover:bg-army-light transition duration-150">Kirim Pesan &rarr;</a>
                    </div>
                </section>

            </div>
        </div>

    </div>
@endsection