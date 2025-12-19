@extends('layouts.app')

@section('title', 'Contact - Farhan Kholid')

@section('content')
    <div class="monogram-bg">FK</div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 pb-20">
        <h1 class="text-5xl font-extrabold text-army-dark mb-4 text-center fade-in-up">Let's Collaborate</h1>
        <p class="text-xl text-gray-600 mb-12 text-center fade-in-up">Have a project idea? Send me a message, and let's make it happen!</p>

        <div class="grid lg:grid-cols-2 gap-10 bg-white p-8 rounded-xl shadow-2xl border border-gray-200">
            
            <div class="fade-in-up">
                <h2 class="text-3xl font-bold text-army-dark mb-6 border-b border-gray-200 pb-2">Send a Direct Message</h2>
                
                {{-- Form dengan method POST dan CSRF --}}
                <form action="{{ url('/contact') }}" method="POST" class="space-y-4">
                    @csrf {{-- Wajib ada untuk keamanan --}}
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-army-light focus:border-army-light transition duration-150" placeholder="Enter your name">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-army-light focus:border-army-light transition duration-150" placeholder="email@example.com">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message / Project Details</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-army-light focus:border-army-light transition duration-150" placeholder="Describe your needs..."></textarea>
                    </div>
                    <button type="submit" class="w-full flex items-center justify-center bg-army-dark text-white font-semibold py-3 px-4 rounded-lg hover:bg-army-light transition duration-300 shadow-md">
                        <i data-lucide="send" class="w-5 h-5 mr-2"></i> Send Message
                    </button>
                </form>
            </div>

            <div class="bg-accent-gray p-6 rounded-xl border border-gray-200 fade-in-up">
                <h2 class="text-3xl font-bold text-army-dark mb-6 border-b border-gray-300 pb-2">Contact Info</h2>
                <ul class="space-y-6 text-gray-700">
                    <li class="flex items-center">
                        <i data-lucide="mail" class="w-6 h-6 mr-4 text-army-light"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="font-semibold">farhankholid20@gmail.com</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="phone" class="w-6 h-6 mr-4 text-army-light"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Phone</p>
                            <p class="font-semibold">+62 813-8833-7828</p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="map-pin" class="w-6 h-6 mr-4 text-army-light"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Location</p>
                            <p class="font-semibold">Jakarta, Indonesia</p>
                        </div>
                    </li>
                </ul>

                <h3 class="text-2xl font-bold text-army-dark mt-8 mb-4 border-b border-gray-300 pb-2">Social Media</h3>
                <div class="flex space-x-6">
                    <a href="https://www.linkedin.com/in/farhan-kholid-8115b9202/" class="text-gray-700 hover:text-army-dark transition duration-150" aria-label="LinkedIn">
                        <i data-lucide="linkedin" class="w-8 h-8"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-army-dark transition duration-150" aria-label="Instagram">
                        <i data-lucide="instagram" class="w-8 h-8"></i>
                    </a>
                    <a href="https://github.com/frhnkhld" class="text-gray-700 hover:text-army-dark transition duration-150" aria-label="GitHub">
                        <i data-lucide="github" class="w-8 h-8"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-army-dark transition duration-150" aria-label="Dribbble">
                        <i data-lucide="dribbble" class="w-8 h-8"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection