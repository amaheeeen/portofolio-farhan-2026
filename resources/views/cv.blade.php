@extends('layouts.app')

@section('title', 'CV (ATS Friendly) - Farhan Kholid')

@section('content')
    <div class="bg-gray-100 min-h-screen py-8 font-sans">
        
        {{-- Toolbar Navigasi (Tidak ikut ter-print) --}}
        <div class="max-w-[210mm] mx-auto px-4 mb-6 flex justify-between items-center print:hidden">
            <a href="{{ route('home') }}" class="flex items-center text-gray-600 hover:text-black transition">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i> Back to Portfolio
            </a>
            <button onclick="window.print()" class="flex items-center px-4 py-2 bg-black text-white rounded hover:bg-gray-800 transition shadow-sm">
                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Save as PDF
            </button>
        </div>

        {{-- KANVAS A4 ATS --}}
        <div class="max-w-[210mm] mx-auto bg-white shadow-lg p-10 md:p-16 text-gray-900 leading-normal print:shadow-none print:p-0 print:m-0 w-full" id="cv-area">
            
            {{-- 1. HEADER (Contact Info) --}}
            <header class="border-b-2 border-gray-900 pb-6 mb-6">
                <h1 class="text-4xl font-bold uppercase tracking-wide mb-2 text-center md:text-left">FARHAN KHOLID</h1>
                <p class="text-lg font-medium text-gray-700 mb-4 text-center md:text-left">Front-End Engineer & Design Specialist</p>
                
                {{-- Kontak Baris --}}
                <div class="flex flex-wrap justify-center md:justify-start gap-4 text-sm text-gray-600">
                    <span class="flex items-center gap-1">Jakarta, Indonesia</span>
                    <span class="hidden md:inline">|</span>
                    <a href="mailto:farhankholid20@gmail.com" class="hover:text-black hover:underline">farhankholid20@gmail.com</a>
                    <span class="hidden md:inline">|</span>
                    <a href="tel:+6281388337828" class="hover:text-black hover:underline">+62 813-8833-7828</a>
                    <span class="hidden md:inline">|</span>
                    <a href="https://frhnkhld.github.io" target="_blank" class="hover:text-black hover:underline">frhnkhld.github.io</a>
                </div>
            </header>

            {{-- 2. PROFESSIONAL SUMMARY --}}
            <section class="mb-6">
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-3 pb-1">Professional Summary</h2>
                <p class="text-sm text-justify leading-relaxed">
                    Hybrid professional with 4 years of experience in visual design and branding, currently transitioning into <strong>Front-End Engineering</strong>. Skilled in bridging the gap between design fidelity and code quality using <strong>Laravel, React, and Tailwind CSS</strong>. Proven track record in optimizing digital assets and creating user-centric interfaces.
                </p>
            </section>

            {{-- 3. TECHNICAL SKILLS --}}
            <section class="mb-6">
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-3 pb-1">Technical Skills</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <span class="font-bold block mb-1">Development:</span>
                        <p>HTML5, CSS3 (Tailwind, Bootstrap), JavaScript (ES6+), Laravel (PHP), React.js, Git/GitHub, SQL.</p>
                    </div>
                    <div>
                        <span class="font-bold block mb-1">Design & Tools:</span>
                        <p>Figma, Adobe Photoshop, Adobe Illustrator, UI/UX Prototyping, VS Code.</p>
                    </div>
                </div>
            </section>

            {{-- 4. ENGINEERING PROJECTS (Penting untuk transisi karir) --}}
            <section class="mb-6">
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-4 pb-1">Key Engineering Projects</h2>
                
                <div class="mb-4">
                    <div class="flex justify-between items-baseline">
                        <h3 class="font-bold">Kalcer.id - Viral Hangout Monitoring</h3>
                        <span class="text-sm italic text-gray-600">Laravel, MySQL, Tailwind</span>
                    </div>
                    <ul class="list-disc list-outside ml-5 mt-2 text-sm space-y-1">
                        <li>Developed a full-stack web application to monitor viral locations using a custom scoring algorithm.</li>
                        <li>Implemented personality-based filtering features to enhance user recommendation relevance.</li>
                        <li>Built a responsive administrative dashboard for real-time data management.</li>
                    </ul>
                </div>

                <div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="font-bold">Mono Stock Dashboard</h3>
                        <span class="text-sm italic text-gray-600">Vanilla JS, HTML5 Canvas</span>
                    </div>
                    <ul class="list-disc list-outside ml-5 mt-2 text-sm space-y-1">
                        <li>Engineered a lightweight inventory system without external frameworks to ensure maximum performance.</li>
                        <li>Utilized DOM manipulation and Canvas API for interactive data visualization.</li>
                    </ul>
                </div>
            </section>

            {{-- 5. WORK EXPERIENCE --}}
            <section class="mb-6">
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-4 pb-1">Work Experience</h2>
                
                {{-- Job 1 --}}
                <div class="mb-4">
                    <div class="flex justify-between items-baseline mb-1">
                        <h3 class="font-bold text-base">Royal Rinjani</h3>
                        <span class="text-sm font-medium">2021 - 2023</span>
                    </div>
                    <p class="text-sm font-semibold italic mb-2">Graphic & UI Designer</p>
                    <ul class="list-disc list-outside ml-5 text-sm space-y-1">
                        <li>Designed effective User Interfaces (UI) for web and mobile applications, adhering to UX best practices.</li>
                        <li>Created detailed visual design systems and style guides, reducing developer hand-off friction by 30%.</li>
                        <li>Collaborated with cross-functional teams to ensure design consistency across platforms.</li>
                    </ul>
                </div>

                {{-- Job 2 --}}
                <div>
                    <div class="flex justify-between items-baseline mb-1">
                        <h3 class="font-bold text-base">PT Farhan Surya Indah</h3>
                        <span class="text-sm font-medium">2019 - 2020</span>
                    </div>
                    <p class="text-sm font-semibold italic mb-2">Digital Marketing Manager</p>
                    <ul class="list-disc list-outside ml-5 text-sm space-y-1">
                        <li>Managed corporate web assets and optimized content for SEO to drive organic traffic.</li>
                        <li>Analyzed performance metrics to inform data-driven content strategies.</li>
                        <li>Ensured strict brand guidelines were followed across all digital marketing channels.</li>
                    </ul>
                </div>
            </section>

            {{-- 6. EDUCATION --}}
            <section class="mb-6">
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-3 pb-1">Education</h2>
                
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="font-bold">Universitas Pertamina</h3>
                        <p class="text-sm">Bachelor of Computer Science (S.Kom)</p>
                    </div>
                    <div class="text-right">
                        <span class="text-sm block">Jakarta</span>
                        <span class="text-sm italic">2023 - Present</span>
                    </div>
                </div>
                <p class="text-xs text-gray-600 mb-3">Focus: Web Development, Algorithms, Interaction Design.</p>

                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold">Binus University</h3>
                        <p class="text-sm">Bachelor of Architecture (S.Ars) - <em>(Transferred)</em></p>
                    </div>
                    <div class="text-right">
                        <span class="text-sm block">Jakarta</span>
                        <span class="text-sm italic">2019 - 2020</span>
                    </div>
                </div>
            </section>

            {{-- 7. LANGUAGES --}}
            <section>
                <h2 class="text-lg font-bold uppercase border-b border-gray-300 mb-3 pb-1">Languages</h2>
                <p class="text-sm"><strong>Bahasa Indonesia</strong> (Native), <strong>English</strong> (Intermediate - Professional Working Proficiency)</p>
            </section>

        </div>
    </div>

    {{-- Style Khusus Print ATS --}}
    <style>
        @media print {
            @page { margin: 0; size: A4; }
            body { 
                background-color: white; 
                color: black;
            }
            .print\:hidden { display: none !important; }
            #cv-area {
                box-shadow: none !important;
                padding: 40px !important; /* Margin kertas standar */
                width: 100% !important;
                max-width: none !important;
            }
            a { text-decoration: none; color: black; }
        }
    </style>
    
    <script>
        lucide.createIcons();
    </script>
@endsection