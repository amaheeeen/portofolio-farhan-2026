<header class="sticky top-0 z-40 w-full bg-white/90 backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="{{ url('/') }}" class="text-2xl font-extrabold text-army tracking-tight">FK</a>
            
            <nav class="hidden md:flex space-x-6 lg:space-x-8 text-sm font-medium">
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-army-dark border-army-dark' : 'text-gray-600 border-transparent' }} hover:text-army-light transition duration-150 border-b-2 pb-1">Home</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-army-dark border-army-dark' : 'text-gray-600 border-transparent' }} hover:text-army-light transition duration-150 border-b-2 pb-1">About</a>
                <a href="{{ url('/portfolio-frontend') }}" class="{{ Request::is('portfolio-frontend') ? 'text-army-dark border-army-dark' : 'text-gray-600 border-transparent' }} hover:text-army-light transition duration-150 border-b-2 pb-1">Front-End Portfolio</a>
                <a href="{{ url('/portfolio-graphic') }}" class="{{ Request::is('portfolio-graphic') ? 'text-army-dark border-army-dark' : 'text-gray-600 border-transparent' }} hover:text-army-light transition duration-150 border-b-2 pb-1">Graphic Design Portfolio</a>
                <a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'text-army-dark border-army-dark' : 'text-gray-600 border-transparent' }} hover:text-army-light transition duration-150 border-b-2 pb-1">Contact</a>
            </nav>

            <button id="mobile-menu-button" class="md:hidden p-2 text-army-dark hover:text-army-light transition duration-150 rounded-md border border-army-light">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </div>

    <nav id="mobile-menu" class="hidden md:hidden bg-white/95 border-t border-gray-200 py-2">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col items-start">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-army-dark hover:text-white transition">Home</a>
            <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-army-dark hover:text-white transition">About</a>
            <a href="{{ url('/portfolio-frontend') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-army-dark hover:text-white transition">Front-End Portfolio</a>
            <a href="{{ url('/portfolio-graphic') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-army-dark hover:text-white transition">Graphic Design Portfolio</a>
            <a href="{{ url('/contact') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-army-dark hover:text-white transition">Contact</a>
        </div>
    </nav>
</header>