@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<!-- Modern Portfolio Hero Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-pink-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl lg:text-7xl font-bold text-white mb-6">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Projects</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Explore my portfolio of creative web solutions and innovative digital experiences
            </p>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-full text-sm font-semibold mb-4 shadow-lg">
                <i class="fas fa-star mr-2"></i>
                Featured Work
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Check out some of my most recent and notable projects
            </p>
        </div>

        <!-- Featured Projects Grid -->
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            @foreach($featuredProjects as $project)
            <div class="group relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-4 overflow-hidden border border-gray-100 modern-project-card">
                <!-- Project Image -->
                <div class="relative overflow-hidden h-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Dummy Images for Featured Projects -->
                    @if($loop->index % 4 == 0)
                    <img
                        src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 4 == 1)
                    <img
                        src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 4 == 2)
                    <img
                        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @else
                    <img
                        src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @endif

                    <!-- Featured Badge -->
                    <div class="absolute top-4 left-4 z-20">
                        <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                            <i class="fas fa-star mr-1"></i>Featured
                        </span>
                    </div>
                    <!-- View Project Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 z-20">
                        <span class="bg-white text-gray-800 px-6 py-3 rounded-xl font-semibold shadow-2xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <i class="fas fa-eye mr-2"></i>View Project
                        </span>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-8 relative z-10 bg-white">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $project->short_description }}
                    </p>

                    <!-- Technologies - FIXED LINE -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        @php
                            // Convert technologies to array if it's string
                            $technologies = is_array($project->technologies) ? $project->technologies : json_decode($project->technologies, true);
                        @endphp
                        @if(is_array($technologies))
                            @foreach($technologies as $tech)
                            <span class="bg-gradient-to-r from-blue-50 to-purple-50 text-blue-600 px-3 py-1 rounded-full text-sm font-medium border border-blue-200">
                                {{ $tech }}
                            </span>
                            @endforeach
                        @else
                            <span class="bg-gradient-to-r from-blue-50 to-purple-50 text-blue-600 px-3 py-1 rounded-full text-sm font-medium border border-blue-200">
                                {{ $project->technologies }}
                            </span>
                        @endif
                    </div>

                    <!-- Project Links -->
                    <div class="flex gap-3">
                        @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank"
                           class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-105 group/link">
                            <i class="fas fa-external-link-alt group-hover/link:rotate-12 transition-transform duration-300"></i>
                            Live Demo
                        </a>
                        @endif

                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                           class="flex-1 flex items-center justify-center gap-2 border-2 border-gray-300 text-gray-700 px-4 py-3 rounded-xl font-semibold hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 group/link">
                            <i class="fab fa-github group-hover/link:scale-110 transition-transform duration-300"></i>
                            Code
                        </a>
                        @endif

                        <!-- Detail Page Link -->
                        <a href="{{ route('portfolio.show', $project->slug) }}"
                           class="flex items-center justify-center w-12 h-12 border-2 border-gray-300 text-gray-700 rounded-xl hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 group/link">
                            <i class="fas fa-arrow-right group-hover/link:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Main Clickable Link for Entire Card -->
                <a href="{{ route('portfolio.show', $project->slug) }}" class="absolute inset-0 z-0"></a>

                <!-- Animated Border -->
                <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10">
                    <div class="absolute inset-[3px] rounded-3xl bg-white"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- All Projects Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                All <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Browse through my complete collection of web development projects
            </p>
        </div>

        <!-- Category Filters -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-white rounded-2xl shadow-lg border border-gray-100 p-2 backdrop-blur-sm">
                <button class="filter-btn px-6 py-3 rounded-xl text-sm font-semibold transition-all duration-300 active bg-gradient-to-r from-blue-500 to-purple-500 text-white shadow-md" data-filter="all">
                    All Projects
                </button>
                @foreach($projects->keys() as $category)
                <button class="filter-btn px-6 py-3 rounded-xl text-sm font-semibold transition-all duration-300 text-gray-600 hover:text-gray-800 hover:bg-gray-50" data-filter="{{ $category }}">
                    {{ ucfirst($category) }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projectsGrid">
            @foreach($projects->flatten() as $project)
            <div class="group project-card bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100 modern-project-item" data-category="{{ $project->category }}">
                <!-- Project Image -->
                <div class="relative overflow-hidden h-48">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Dummy Images for All Projects -->
                    @if($loop->index % 6 == 0)
                    <img
                        src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 6 == 1)
                    <img
                        src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 6 == 2)
                    <img
                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 6 == 3)
                    <img
                        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 6 == 4)
                    <img
                        src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @else
                    <img
                        src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=250&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @endif

                    <!-- View Project Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 z-20">
                        <span class="bg-white/95 text-gray-800 px-4 py-2 rounded-lg font-semibold shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 text-sm">
                            <i class="fas fa-eye mr-1"></i>View Details
                        </span>
                    </div>
                    <!-- Category Badge -->
                    <div class="absolute top-3 left-3 z-20">
                        <span class="bg-white/95 text-gray-700 px-2 py-1 rounded-full text-xs font-semibold backdrop-blur-sm">
                            {{ ucfirst($project->category) }}
                        </span>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-6 relative z-10 bg-white">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $project->title }}
                        </h3>
                        @if($project->is_featured)
                        <span class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                            <i class="fas fa-star mr-1"></i>
                        </span>
                        @endif
                    </div>

                    <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-2">
                        {{ $project->short_description }}
                    </p>

                    <!-- Technologies - FIXED FOR ALL PROJECTS -->
                    <div class="flex flex-wrap gap-1 mb-4">
                        @php
                            $technologies = is_array($project->technologies) ? $project->technologies : json_decode($project->technologies, true);
                        @endphp
                        @if(is_array($technologies))
                            @foreach(array_slice($technologies, 0, 3) as $tech)
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium border border-gray-200">
                                {{ $tech }}
                            </span>
                            @endforeach
                            @if(count($technologies) > 3)
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium border border-gray-200">
                                +{{ count($technologies) - 3 }}
                            </span>
                            @endif
                        @else
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium border border-gray-200">
                                {{ $project->technologies }}
                            </span>
                        @endif
                    </div>

                    <!-- Project Meta & Links -->
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <i class="fas fa-calendar"></i>
                            {{ $project->project_date->format('M Y') }}
                        </span>
                        <div class="flex gap-2">
                            @if($project->project_url)
                            <a href="{{ $project->project_url }}" target="_blank"
                               class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fas fa-external-link-alt text-sm"></i>
                            </a>
                            @endif
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank"
                               class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-700 hover:bg-gray-50 rounded-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-github text-sm"></i>
                            </a>
                            @endif
                            <a href="{{ route('portfolio.show', $project->slug) }}"
                               class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-purple-600 hover:bg-purple-50 rounded-lg transition-all duration-300 transform hover:scale-110">
                                <i class="fas fa-arrow-right text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Clickable Link for Entire Card -->
                <a href="{{ route('portfolio.show', $project->slug) }}" class="absolute inset-0 z-0"></a>

                <!-- Hover Border Effect -->
                <div class="absolute inset-0 border-2 border-transparent bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10">
                    <div class="absolute inset-[2px] rounded-2xl bg-white"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        @if($projects->flatten()->count() === 0)
        <div class="text-center py-16">
            <div class="w-24 h-24 bg-gradient-to-r from-blue-100 to-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-folder-open text-blue-500 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">No Projects Yet</h3>
            <p class="text-gray-600 mb-6">Projects are coming soon. Stay tuned!</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                <i class="fas fa-paper-plane"></i>
                Start Your Project
            </a>
        </div>
        @endif
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="group">
                <div class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2 modern-counter" data-target="{{ $projects->flatten()->count() }}">0</div>
                <div class="text-gray-600 font-semibold group-hover:text-blue-600 transition-colors duration-300">Projects Completed</div>
            </div>
            <div class="group">
                <div class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2 modern-counter" data-target="{{ $featuredProjects->count() }}">0</div>
                <div class="text-gray-600 font-semibold group-hover:text-purple-600 transition-colors duration-300">Featured Projects</div>
            </div>
            <div class="group">
                <div class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2 modern-counter" data-target="{{ $projects->keys()->count() }}">0</div>
                <div class="text-gray-600 font-semibold group-hover:text-pink-600 transition-colors duration-300">Categories</div>
            </div>
            <div class="group">
                <div class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2 modern-counter" data-target="100">0</div>
                <div class="text-gray-600 font-semibold group-hover:text-green-600 transition-colors duration-300">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-purple-900 to-blue-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Project</span>?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Let's work together to bring your ideas to life with modern web solutions
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-paper-plane"></i>
                    Start a Project
                </a>
                <a href="{{ route('about') }}"
                   class="inline-flex items-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-lg backdrop-blur-sm hover:border-white/60 transition-all duration-300">
                    <i class="fas fa-user"></i>
                    Learn About Me
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* Modern Project Card Animations */
.modern-project-card {
    position: relative;
    overflow: hidden;
}

.modern-project-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.05), transparent);
    transition: left 0.6s ease;
}

.modern-project-card:hover::before {
    left: 100%;
}

.modern-project-item {
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* Line clamp for text */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Filter Button Animation */
.filter-btn {
    position: relative;
    overflow: hidden;
}

.filter-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.filter-btn:hover::before {
    left: 100%;
}

/* Project Card Animations */
.project-card {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.project-card.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}

/* Loading Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.modern-project-item {
    animation: fadeInUp 0.6s ease-out;
}

.modern-project-item:nth-child(2) { animation-delay: 0.1s; }
.modern-project-item:nth-child(3) { animation-delay: 0.2s; }
.modern-project-item:nth-child(4) { animation-delay: 0.3s; }
.modern-project-item:nth-child(5) { animation-delay: 0.4s; }
.modern-project-item:nth-child(6) { animation-delay: 0.5s; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-500', 'to-purple-500', 'text-white', 'shadow-md');
                btn.classList.add('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-50');
            });

            // Add active class to clicked button
            this.classList.add('active', 'bg-gradient-to-r', 'from-blue-500', 'to-purple-500', 'text-white', 'shadow-md');
            this.classList.remove('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-50');

            const filter = this.getAttribute('data-filter');
            filterProjects(filter);
        });
    });

    function filterProjects(category) {
        projectCards.forEach(card => {
            if (category === 'all') {
                card.classList.remove('hidden');
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 50);
            } else {
                if (card.getAttribute('data-category') === category) {
                    card.classList.remove('hidden');
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.classList.add('hidden');
                    }, 300);
                }
            }
        });
    }

    // Counter Animation
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
                    this.element.textContent = Math.floor(this.current);
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
});
</script>
@endpush
