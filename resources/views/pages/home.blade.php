@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Animated Hero Section (Same as Before) -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 relative overflow-hidden">
    <!-- Animated Background Particles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="particles"></div>
    </div>

    <!-- Gradient Orbs -->
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-white animate-fade-in-up">
                @if($hero)
                <!-- Animated Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6 animate-bounce-in">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    <span class="text-sm font-medium">Available for freelance work</span>
                </div>

                <!-- Animated Title -->
                <div class="mb-6">
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                        <span class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-2">
                            Hi, I'm
                        </span>
                        <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 animate-gradient">
                            Ahmad Farooq
                        </span>
                    </h1>
                </div>

                <!-- Animated Description -->
                <p class="text-xl text-gray-300 mb-8 leading-relaxed animate-fade-in-up animation-delay-800">
                    {{ $hero->description }}
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4 mb-8 animate-fade-in-up animation-delay-1200">
                    <a href="{{ $hero->button1_link }}" class="group relative bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-lg font-semibold overflow-hidden transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                        <span class="relative z-10">{{ $hero->button1_text }}</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                    </a>

                    @if($hero->button2_link)
                    <a href="{{ $hero->cv_url ?: $hero->button2_link }}" class="group relative border-2 border-white/30 text-white px-8 py-4 rounded-lg font-semibold overflow-hidden transition-all duration-300 transform hover:-translate-y-1 backdrop-blur-sm hover:border-white/50">
                        <span class="relative z-10 group-hover:text-gray-900 transition-colors duration-300">
                            <i class="fas fa-download mr-2"></i>
                            {{ $hero->button2_text }}
                        </span>
                        <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                    </a>
                    @endif
                </div>

                <!-- Social Links -->
                @if($hero->social_links)
                <div class="flex gap-4 animate-fade-in-up animation-delay-1600">
                    @foreach($hero->social_links as $platform => $link)
                    <a href="{{ $link }}" target="_blank" class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg flex items-center justify-center text-white overflow-hidden transition-all duration-300 transform hover:-translate-y-2">
                        <i class="fab fa-{{ $platform }} text-lg relative z-10 group-hover:scale-110 transition-transform duration-300 group-hover:text-gray-900"></i>
                        <div class="absolute inset-0 bg-white transform scale-0 group-hover:scale-100 transition-transform duration-300 rounded-lg"></div>
                    </a>
                    @endforeach
                </div>
                @endif
                @else
                <!-- Default Animated Content -->
                <div class="text-white">
                    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6 animate-bounce-in">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-sm font-medium">Available for freelance work</span>
                    </div>

                    <div class="mb-6">
                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
                            <span class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-2">
                                Hi, I'm
                            </span>
                            <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 animate-gradient">
                                Ahmad Farooq
                            </span>
                        </h1>
                    </div>

                    <p class="text-xl text-gray-300 mb-8 leading-relaxed animate-fade-in-up animation-delay-800">
                        Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies.
                        I create digital experiences that are fast, responsive, and user-friendly.
                    </p>

                    <div class="flex flex-wrap gap-4 mb-8 animate-fade-in-up animation-delay-1200">
                        <a href="{{ route('portfolio') }}" class="group relative bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-lg font-semibold overflow-hidden transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                            <span class="relative z-10">View My Projects</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                        </a>

                        <a href="#" class="group relative border-2 border-white/30 text-white px-8 py-4 rounded-lg font-semibold overflow-hidden transition-all duration-300 transform hover:-translate-y-1 backdrop-blur-sm hover:border-white/50">
                            <span class="relative z-10 group-hover:text-gray-900 transition-colors duration-300">
                                <i class="fas fa-download mr-2"></i>
                                Download CV
                            </span>
                            <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                        </a>
                    </div>

                    <div class="flex gap-4 animate-fade-in-up animation-delay-1600">
                        <a href="#" class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg flex items-center justify-center text-white overflow-hidden transition-all duration-300 transform hover:-translate-y-2">
                            <i class="fab fa-github text-lg relative z-10 group-hover:scale-110 transition-transform duration-300 group-hover:text-gray-900"></i>
                            <div class="absolute inset-0 bg-white transform scale-0 group-hover:scale-100 transition-transform duration-300 rounded-lg"></div>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg flex items-center justify-center text-white overflow-hidden transition-all duration-300 transform hover:-translate-y-2">
                            <i class="fab fa-linkedin text-lg relative z-10 group-hover:scale-110 transition-transform duration-300 group-hover:text-gray-900"></i>
                            <div class="absolute inset-0 bg-white transform scale-0 group-hover:scale-100 transition-transform duration-300 rounded-lg"></div>
                        </a>
                        <a href="#" class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg flex items-center justify-center text-white overflow-hidden transition-all duration-300 transform hover:-translate-y-2">
                            <i class="fab fa-twitter text-lg relative z-10 group-hover:scale-110 transition-transform duration-300 group-hover:text-gray-900"></i>
                            <div class="absolute inset-0 bg-white transform scale-0 group-hover:scale-100 transition-transform duration-300 rounded-lg"></div>
                        </a>
                    </div>
                </div>
                @endif
            </div>

            <!-- Animated Image -->
            <!-- Animated Image -->
<div class="relative animate-fade-in-right">
    <div class="relative">
        <div class="w-80 h-80 lg:w-96 lg:h-96 mx-auto">
            <!-- Floating Background Orbs -->
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <div class="absolute -inset-8 bg-gradient-to-r from-pink-500 to-blue-500 rounded-full blur-3xl opacity-20 animate-pulse animation-delay-1000"></div>

            <!-- Main Image with Border Animation -->
            <div class="relative z-10 w-full h-full rounded-full border-4 border-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 p-1 animate-rotate overflow-hidden">
                <img
                    src="{{ asset('Ahmad.jpeg') }}"
                    alt="Ahmad Farooq"
                    class="w-full h-full object-cover rounded-full transform hover:scale-105 transition duration-500"
                    style="object-position: center 30%;"
                >
            </div>
        </div>

        <!-- Floating Tech Icons -->
        <div class="absolute -top-6 -left-6 w-16 h-16 bg-yellow-400/20 backdrop-blur-sm rounded-2xl border border-yellow-400/30 flex items-center justify-center animate-float">
            <i class="fab fa-laravel text-yellow-400 text-2xl"></i>
        </div>
        <div class="absolute -bottom-6 -right-6 w-14 h-14 bg-blue-400/20 backdrop-blur-sm rounded-2xl border border-blue-400/30 flex items-center justify-center animate-float animation-delay-1000">
            <i class="fab fa-vuejs text-blue-400 text-xl"></i>
        </div>
        <div class="absolute top-1/2 -right-8 w-12 h-12 bg-green-400/20 backdrop-blur-sm rounded-2xl border border-green-400/30 flex items-center justify-center animate-float animation-delay-1500">
            <i class="fab fa-js text-green-400 text-xl"></i>
        </div>
    </div>
</div>
        </div>
    </div>

    <!-- Animated Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="flex flex-col items-center">
            <span class="text-white text-sm mb-2 animate-pulse">Scroll Down</span>
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-scroll"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Skills Section -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-white" id="skills">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Tech Stack</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Technologies I use to build amazing digital experiences
            </p>
        </div>

        <!-- Modern Skills Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
            @foreach($skills->flatten() as $skill)
            <div class="group relative bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 modern-skill-card">
                <!-- Background Glow Effect -->
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50 to-purple-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <!-- Skill Content -->
                <div class="relative z-10">
                    <!-- Icon Container -->
                    <div class="relative mb-4">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-br from-white to-gray-50 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-500 transform group-hover:scale-110 modern-skill-icon"
                             style="border: 2px solid {{ $skill->color }}30">
                            <i class="{{ $skill->icon_class }} text-2xl transition-all duration-500 group-hover:scale-125"
                               style="color: {{ $skill->color }}"></i>
                        </div>

                        <!-- Proficiency Badge -->
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white text-xs font-bold shadow-lg transform group-hover:scale-110 transition-all duration-300">
                            {{ $skill->proficiency }}%
                        </div>
                    </div>

                    <!-- Skill Name -->
                    <h3 class="font-bold text-gray-800 text-center mb-3 transition-colors duration-300 group-hover:text-gray-900">
                        {{ $skill->name }}
                    </h3>

                    <!-- Animated Progress Bar -->
                    <div class="relative">
                        <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                            <div class="modern-skill-progress h-full rounded-full transition-all duration-1000 ease-out"
                                 style="width: 0%; background: linear-gradient(90deg, {{ $skill->color }}80, {{ $skill->color }});"
                                 data-proficiency="{{ $skill->proficiency }}">
                            </div>
                        </div>
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-transparent via-white to-transparent opacity-30 group-hover:opacity-50 transition-opacity duration-500 modern-progress-shine"></div>
                    </div>
                </div>

                <!-- Hover Effect Border -->
                <div class="absolute inset-0 rounded-2xl border-2 border-transparent bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-500 -z-10 modern-border-glow">
                    <div class="absolute inset-[2px] rounded-2xl bg-white"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Skills Categories -->
        {{-- @if($skills->count() > 1)
        <div class="mt-12 text-center">
            <div class="inline-flex bg-white rounded-xl shadow-lg border border-gray-100 p-2">
                <button class="px-6 py-3 rounded-lg text-sm font-semibold transition-all duration-300 modern-category-tab active bg-gradient-to-r from-blue-500 to-purple-500 text-white shadow-md"
                        data-category="all">
                    All Skills
                </button>
                @foreach($skills->keys() as $category)
                <button class="px-6 py-3 rounded-lg text-sm font-semibold transition-all duration-300 modern-category-tab text-gray-600 hover:text-gray-800 hover:bg-gray-50"
                        data-category="{{ $category }}">
                    {{ ucfirst($category) }}
                </button>
                @endforeach
            </div>
        </div>
        @endif --}}
    </div>
</section>
<!-- Modern Testimonials Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden" id="testimonials">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-pink-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <i class="fas fa-heart text-red-400 mr-2"></i>
                <span class="text-sm font-medium text-white">Client Love</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
                Words That <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Inspire</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Discover why clients trust me to bring their visions to life
            </p>
        </div>

        <!-- Modern Testimonials Carousel -->
        <div class="relative">
            <!-- Testimonials Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 testimonial-carousel">
                @foreach($testimonials as $testimonial)
                <div class="group bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:border-white/40 transition-all duration-700 transform hover:-translate-y-3 modern-testimonial-card">
                    <!-- Quote Icon -->
                    <div class="text-blue-400/30 group-hover:text-blue-400/50 transition-all duration-500 mb-6">
                        <i class="fas fa-quote-right text-5xl"></i>
                    </div>

                    <!-- Testimonial Text -->
                    <p class="text-gray-200 text-lg mb-6 leading-relaxed group-hover:text-white transition-colors duration-500 modern-testimonial-text">
                        "{{ $testimonial->testimonial }}"
                    </p>

                    <!-- Rating Stars -->
                    <div class="flex gap-1 mb-6">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-lg {{ $i <= $testimonial->rating ? 'text-yellow-400 animate-pulse' : 'text-gray-500' }} {{ $i <= $testimonial->rating ? 'group-hover:scale-110 group-hover:rotate-12' : '' }} transition-all duration-300"
                           style="animation-delay: {{ $i * 0.1 }}s"></i>
                        @endfor
                    </div>

                    <!-- Client Info -->
                    <div class="flex items-center gap-4">
                        <!-- Animated Client Avatar -->
                        <div class="relative">
                            <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg group-hover:scale-110 transition-transform duration-500 shadow-lg">
                                {{ substr($testimonial->client_name, 0, 1) }}
                            </div>
                            <div class="absolute -inset-2 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full opacity-0 group-hover:opacity-20 blur-md transition-opacity duration-500 -z-10"></div>
                        </div>

                        <!-- Client Details -->
                        <div class="flex-1">
                            <h4 class="font-bold text-white text-lg group-hover:translate-x-2 transition-transform duration-500">
                                {{ $testimonial->client_name }}
                            </h4>
                            <p class="text-gray-400 text-sm group-hover:text-gray-300 transition-colors duration-500">
                                {{ $testimonial->client_position }}
                                @if($testimonial->client_company)
                                • <span class="text-blue-300">{{ $testimonial->client_company }}</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <!-- Hover Effect Border -->
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-20">
                        <div class="absolute inset-[2px] rounded-3xl bg-slate-900"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center gap-3 mt-12">
                @foreach($testimonials as $index => $testimonial)
                <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white/60 transition-all duration-300 testimonial-dot {{ $loop->first ? 'bg-white/80 w-8' : '' }}"
                        data-index="{{ $index }}"></button>
                @endforeach
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="mt-20 bg-gradient-to-r from-blue-500/20 to-purple-500/20 backdrop-blur-md rounded-2xl p-8 border border-white/10 hover:border-white/20 transition-all duration-500">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="50">0</div>
                    <div class="text-blue-200 group-hover:text-white transition-colors duration-300">Projects Delivered</div>
                </div>
                <div class="group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="40">0</div>
                    <div class="text-blue-200 group-hover:text-white transition-colors duration-300">Happy Clients</div>
                </div>
                <div class="group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="100">0</div>
                    <div class="text-blue-200 group-hover:text-white transition-colors duration-300">Success Rate</div>
                </div>
                <div class="group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="3">0</div>
                    <div class="text-blue-200 group-hover:text-white transition-colors duration-300">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<!-- Modern Call to Action Section -->
<section class="py-24 bg-gradient-to-br from-slate-900 via-purple-900 to-blue-900 relative overflow-hidden" id="cta">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <!-- Floating Particles -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-1/4 left-1/4 w-4 h-4 bg-white rounded-full animate-ping"></div>
            <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-blue-400 rounded-full animate-ping animation-delay-1000"></div>
            <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-purple-400 rounded-full animate-ping animation-delay-2000"></div>
            <div class="absolute bottom-1/3 right-1/4 w-3 h-3 bg-pink-400 rounded-full animate-ping animation-delay-1500"></div>
        </div>

        <!-- Gradient Orbs -->
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl animate-float animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-pink-500/10 rounded-full blur-3xl animate-pulse"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <!-- Animated Badge -->
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-8 animate-bounce-in">
                <div class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></div>
                <span class="text-sm font-semibold text-white tracking-wider">LET'S CREATE TOGETHER</span>
            </div>

            <!-- Main Heading -->
            <h2 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Ready to
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 animate-gradient">
                    Transform
                </span>
                Your Vision?
            </h2>

            <!-- Subtitle -->
            <p class="text-xl lg:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Let's collaborate to build something extraordinary. From concept to deployment,
                I'll be with you every step of the way to ensure your digital success.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6 mb-16">
                <!-- Primary Button -->
                <a href="{{ route('contact') }}"
                   class="group relative bg-gradient-to-r from-blue-500 to-purple-600 text-white px-12 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:-translate-y-2 shadow-2xl hover:shadow-3xl modern-cta-btn">
                    <span class="relative z-10 flex items-center gap-3">
                        <i class="fas fa-rocket text-lg group-hover:rotate-45 transition-transform duration-500"></i>
                        Start Your Project
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-500 -z-10"></div>
                </a>

                <!-- Secondary Button -->
                <a href="{{ route('portfolio') }}"
                   class="group relative border-2 border-white/30 text-white px-10 py-5 rounded-2xl font-bold text-lg backdrop-blur-md transition-all duration-500 transform hover:-translate-y-2 hover:border-white/60 modern-cta-btn-secondary">
                    <span class="relative z-10 flex items-center gap-3">
                        <i class="fas fa-eye text-lg group-hover:scale-110 transition-transform duration-500"></i>
                        View My Work
                    </span>
                    <div class="absolute inset-0 bg-white rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-500"></div>
                </a>
            </div>

            <!-- Stats Row -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="50">0</div>
                    <div class="text-blue-200 text-sm font-medium group-hover:text-white transition-colors duration-300">
                        Projects Delivered
                    </div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="99">0</div>
                    <div class="text-purple-200 text-sm font-medium group-hover:text-white transition-colors duration-300">
                        Client Satisfaction
                    </div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="3">0</div>
                    <div class="text-pink-200 text-sm font-medium group-hover:text-white transition-colors duration-300">
                        Years Experience
                    </div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 modern-counter" data-target="24">0</div>
                    <div class="text-green-200 text-sm font-medium group-hover:text-white transition-colors duration-300">
                        Support Hours
                    </div>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-col sm:flex-row justify-center items-center gap-8 text-gray-400">
                <div class="flex items-center gap-3">
                    <i class="fas fa-shield-alt text-green-400 text-xl"></i>
                    <span class="text-sm">Secure & Reliable</span>
                </div>
                <div class="hidden sm:block w-px h-6 bg-gray-600"></div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-clock text-blue-400 text-xl"></i>
                    <span class="text-sm">Fast Delivery</span>
                </div>
                <div class="hidden sm:block w-px h-6 bg-gray-600"></div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-headset text-purple-400 text-xl"></i>
                    <span class="text-sm">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute bottom-10 left-10 w-8 h-8 bg-yellow-400 rounded-full animate-bounce opacity-20"></div>
    <div class="absolute top-10 right-10 w-6 h-6 bg-blue-400 rounded-full animate-bounce animation-delay-1000 opacity-20"></div>
    <div class="absolute top-1/2 left-20 w-4 h-4 bg-green-400 rounded-full animate-ping opacity-30"></div>
</section>
@endsection

@push('styles')
<style>
/* Modern Skills Section Styles */
.modern-skill-card {
    position: relative;
    overflow: hidden;
}

.modern-skill-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.05), transparent);
    transition: left 0.5s ease;
}

.modern-skill-card:hover::before {
    left: 100%;
}

.modern-skill-icon {
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.modern-skill-progress {
    position: relative;
    overflow: hidden;
}

.modern-progress-shine {
    animation: progressShine 2s infinite;
}

@keyframes progressShine {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.modern-border-glow {
    background: linear-gradient(45deg, #3B82F6, #8B5CF6, #EC4899, #3B82F6);
    background-size: 400% 400%;
    animation: borderGlow 3s ease infinite;
}

@keyframes borderGlow {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.modern-category-tab {
    position: relative;
    overflow: hidden;
}

.modern-category-tab::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.modern-category-tab:hover::before {
    left: 100%;
}

/* Existing Animations (Keep from previous) */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fade-in-right {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes bounce-in {
    0% {
        opacity: 0;
        transform: scale(0.3);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
    70% {
        transform: scale(0.9);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes scroll {
    0% { transform: translateY(0); opacity: 1; }
    100% { transform: translateY(10px); opacity: 0; }
}

@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}

/* Animation Classes */
.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
}

.animate-fade-in-right {
    animation: fade-in-right 1s ease-out;
}

.animate-bounce-in {
    animation: bounce-in 0.8s ease-out;
}

.animate-typing {
    animation: typing 2s steps(20, end);
    white-space: nowrap;
    overflow: hidden;
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 3s ease infinite;
}

.animate-rotate {
    animation: rotate 20s linear infinite;
}

.animate-scroll {
    animation: scroll 2s infinite;
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 { animation-delay: 2s; }
.animation-delay-4000 { animation-delay: 4s; }
.animation-delay-800 { animation-delay: 0.8s; }
.animation-delay-1200 { animation-delay: 1.2s; }
.animation-delay-1600 { animation-delay: 1.6s; }
.animation-delay-1000 { animation-delay: 1s; }
.animation-delay-1500 { animation-delay: 1.5s; }
.animation-delay-3000 { animation-delay: 3s; }

/* Particle Background */
.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:
        radial-gradient(2px 2px at 20px 30px, #eee, transparent),
        radial-gradient(2px 2px at 40px 70px, rgba(255,255,255,0.5), transparent),
        radial-gradient(1px 1px at 90px 40px, #fff, transparent),
        radial-gradient(1px 1px at 130px 80px, rgba(255,255,255,0.8), transparent);
    background-repeat: repeat;
    background-size: 200px 200px;
    animation: float 20s infinite linear;
}
/* Modern Testimonials Styles */
.modern-testimonial-card {
    position: relative;
    overflow: hidden;
}

.modern-testimonial-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: left 0.8s ease;
}

.modern-testimonial-card:hover::before {
    left: 100%;
}

.modern-testimonial-text {
    position: relative;
}

.modern-testimonial-text::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #3b82f6, #8b5cf6);
    transition: width 0.5s ease;
}

.modern-testimonial-card:hover .modern-testimonial-text::after {
    width: 100%;
}

.testimonial-dot {
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.testimonial-dot:hover {
    transform: scale(1.5);
}

.testimonial-dot.active {
    width: 32px;
    background: white;
}

/* Floating animation for cards */
@keyframes floatCard {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(1deg); }
}

.modern-testimonial-card {
    animation: floatCard 6s ease-in-out infinite;
}

.modern-testimonial-card:nth-child(2n) {
    animation-delay: 2s;
}

.modern-testimonial-card:nth-child(3n) {
    animation-delay: 4s;
}
/* Modern CTA Styles */
.modern-cta-btn {
    position: relative;
    overflow: hidden;
}

.modern-cta-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s ease;
}

.modern-cta-btn:hover::before {
    left: 100%;
}

.modern-cta-btn-secondary {
    position: relative;
    overflow: hidden;
}

.modern-cta-btn-secondary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: left 0.6s ease;
}

.modern-cta-btn-secondary:hover::before {
    left: 100%;
}

/* Enhanced animations */
@keyframes floatElement {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.animate-float {
    animation: floatElement 4s ease-in-out infinite;
}

@keyframes bounceIn {
    0% {
        opacity: 0;
        transform: scale(0.3) translateY(20px);
    }
    50% {
        opacity: 1;
        transform: scale(1.05) translateY(-5px);
    }
    70% {
        transform: scale(0.9) translateY(0);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.animate-bounce-in {
    animation: bounceIn 0.8s ease-out;
}

/* Glow effect for buttons */
.modern-cta-btn:hover {
    box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4),
                0 0 80px rgba(139, 92, 246, 0.2);
}

.modern-cta-btn-secondary:hover {
    box-shadow: 0 15px 30px rgba(255, 255, 255, 0.1),
                0 0 40px rgba(255, 255, 255, 0.05);
}

/* Stats counter animation enhancement */
.modern-counter {
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}
</style>
@endpush

@push('scripts')
<script>
// Modern Skills Progress Animation
const modernSkillObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const progressBar = entry.target;
            const proficiency = progressBar.getAttribute('data-proficiency');
            setTimeout(() => {
                progressBar.style.width = proficiency + '%';
            }, 300);
            modernSkillObserver.unobserve(progressBar);
        }
    });
}, { threshold: 0.3 });

// Initialize modern skills
document.addEventListener('DOMContentLoaded', () => {
    // Progress bars animation
    document.querySelectorAll('.modern-skill-progress').forEach(bar => {
        modernSkillObserver.observe(bar);
    });

    // Category tabs functionality
    document.querySelectorAll('.modern-category-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            document.querySelectorAll('.modern-category-tab').forEach(t => {
                t.classList.remove('active', 'bg-gradient-to-r', 'from-blue-500', 'to-purple-500', 'text-white', 'shadow-md');
                t.classList.add('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-50');
            });

            // Add active class to clicked tab
            this.classList.add('active', 'bg-gradient-to-r', 'from-blue-500', 'to-purple-500', 'text-white', 'shadow-md');
            this.classList.remove('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-50');

            const category = this.getAttribute('data-category');
            filterModernSkills(category);
        });
    });

    function filterModernSkills(category) {
        const skillCards = document.querySelectorAll('.modern-skill-card');

        skillCards.forEach(card => {
            if (category === 'all') {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0) scale(1)';
                }, 50);
            } else {
                const skillName = card.querySelector('h3').textContent.toLowerCase();
                const skillCategory = Array.from(card.classList).find(cls => cls.includes('category-'));

                if (skillName.includes(category.toLowerCase()) || (skillCategory && skillCategory.includes(category))) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px) scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            }
        });
    }
});
// Modern Testimonials Carousel
document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.modern-testimonial-card');
    const dots = document.querySelectorAll('.testimonial-dot');

    // Dot click functionality
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            // Update active dot
            dots.forEach(d => d.classList.remove('active', 'bg-white/80', 'w-8'));
            this.classList.add('active', 'bg-white/80', 'w-8');

            // Animate testimonials
            testimonials.forEach((testimonial, i) => {
                if (i === index) {
                    testimonial.style.opacity = '1';
                    testimonial.style.transform = 'translateY(0) scale(1)';
                } else {
                    testimonial.style.opacity = '0';
                    testimonial.style.transform = 'translateY(20px) scale(0.9)';
                }
            });
        });
    });

    // Auto-rotate testimonials
    let currentTestimonial = 0;
    function rotateTestimonials() {
        dots.forEach(d => d.classList.remove('active', 'bg-white/80', 'w-8'));
        dots[currentTestimonial].classList.add('active', 'bg-white/80', 'w-8');

        testimonials.forEach((testimonial, i) => {
            if (i === currentTestimonial) {
                testimonial.style.opacity = '1';
                testimonial.style.transform = 'translateY(0) scale(1)';
            } else {
                testimonial.style.opacity = '0';
                testimonial.style.transform = 'translateY(20px) scale(0.9)';
            }
        });

        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    }

    // Start auto-rotation (optional)
    // setInterval(rotateTestimonials, 5000);
});

// Modern Counter Animation
class ModernCounter {
    constructor(element, target, duration = 2000) {
        this.element = element;
        this.target = target;
        this.duration = duration;
        this.current = 0;
        this.increment = target / (duration / 16);
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animate();
                    this.observer.unobserve(element);
                }
            });
        }, { threshold: 0.5 });
        this.observer.observe(element);
    }

    animate() {
        const updateCount = () => {
            if (this.current < this.target) {
                this.current += this.increment;
                if (this.current > this.target) this.current = this.target;
                this.element.textContent = Math.floor(this.current) + (this.target === 100 ? '%' : '+');
                requestAnimationFrame(updateCount);
            }
        };
        updateCount();
    }
}

// Initialize counters
document.querySelectorAll('.modern-counter').forEach(element => {
    const target = parseInt(element.getAttribute('data-target'));
    new ModernCounter(element, target);
});
</script>
@endpush
