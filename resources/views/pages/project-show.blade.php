@extends('layouts.app')

@section('title', $project->title . ' - Project Details')

@section('content')
<!-- Project Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-pink-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <!-- Back Button -->
            <div class="flex justify-start mb-8">
                <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-gray-300 hover:text-white transition-colors duration-300">
                    <i class="fas fa-arrow-left"></i>
                    Back to Portfolio
                </a>
            </div>

            <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6">
                {{ $project->title }}
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                {{ $project->short_description }}
            </p>

            <!-- Project Meta -->
            <div class="flex flex-wrap justify-center gap-6 text-gray-300">
                @if($project->client)
                <div class="flex items-center gap-2">
                    <i class="fas fa-user"></i>
                    <span>Client: {{ $project->client }}</span>
                </div>
                @endif
                <div class="flex items-center gap-2">
                    <i class="fas fa-calendar"></i>
                    <span>{{ $project->project_date->format('F Y') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tag"></i>
                    <span class="capitalize">{{ $project->category }}</span>
                </div>
                @if($project->is_featured)
                <div class="flex items-center gap-2">
                    <i class="fas fa-star text-yellow-400"></i>
                    <span>Featured Project</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Project Details Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Project Image -->
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <!-- Dummy Image based on category -->
                    @if($project->category == 'web')
                    <img
                        src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-96 object-cover transform hover:scale-105 transition duration-700"
                    >
                    @elseif($project->category == 'mobile')
                    <img
                        src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-96 object-cover transform hover:scale-105 transition duration-700"
                    >
                    @else
                    <img
                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop"
                        alt="{{ $project->title }}"
                        class="w-full h-96 object-cover transform hover:scale-105 transition duration-700"
                    >
                    @endif
                </div>

                <!-- Project Links -->
                <div class="flex gap-4 mt-6">
                    @if($project->project_url)
                    <a href="{{ $project->project_url }}" target="_blank"
                       class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-4 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group/link">
                        <i class="fas fa-external-link-alt group-hover/link:rotate-12 transition-transform duration-300"></i>
                        Live Demo
                    </a>
                    @endif

                    @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank"
                       class="flex-1 flex items-center justify-center gap-2 border-2 border-gray-300 text-gray-700 px-6 py-4 rounded-xl font-semibold hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 transform hover:-translate-y-1 group/link">
                        <i class="fab fa-github group-hover/link:scale-110 transition-transform duration-300"></i>
                        View Code
                    </a>
                    @endif
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="text-center p-4 bg-blue-50 rounded-2xl border border-blue-200">
                        <div class="text-2xl font-bold text-blue-600">
                            @php
                                $technologies = is_array($project->technologies) ? $project->technologies : json_decode($project->technologies, true);
                            @endphp
                            {{ is_array($technologies) ? count($technologies) : 1 }}+
                        </div>
                        <div class="text-sm text-blue-600 font-semibold">Technologies</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-2xl border border-green-200">
                        <div class="text-2xl font-bold text-green-600">100%</div>
                        <div class="text-sm text-green-600 font-semibold">Success</div>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-2xl border border-purple-200">
                        <div class="text-2xl font-bold text-purple-600">{{ $project->project_date->diffInMonths(now()) }}+</div>
                        <div class="text-sm text-purple-600 font-semibold">Months</div>
                    </div>
                </div>
            </div>

            <!-- Project Details -->
            <div class="lg:pl-8">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">
                    Project <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Overview</span>
                </h2>

                <div class="prose prose-lg max-w-none text-gray-600 mb-8">
                    <p class="leading-relaxed text-lg">
                        {{ $project->description }}
                    </p>
                </div>

                <!-- Technologies Used -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Technologies Used</h3>
                    <div class="flex flex-wrap gap-3">
                        @php
                            $technologies = is_array($project->technologies) ? $project->technologies : json_decode($project->technologies, true);
                        @endphp
                        @if(is_array($technologies))
                            @foreach($technologies as $tech)
                            <span class="bg-gradient-to-r from-blue-100 to-purple-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold border border-blue-200 transform hover:scale-105 transition duration-300">
                                <i class="fas fa-check mr-2 text-green-500"></i>
                                {{ $tech }}
                            </span>
                            @endforeach
                        @else
                            <span class="bg-gradient-to-r from-blue-100 to-purple-100 text-blue-600 px-4 py-2 rounded-full text-sm font-semibold border border-blue-200">
                                <i class="fas fa-check mr-2 text-green-500"></i>
                                {{ $project->technologies }}
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Project Features -->
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl p-6 border border-gray-200">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        Key Features
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-600 p-2 rounded-lg hover:bg-white transition duration-300">
                            <i class="fas fa-check text-green-500 bg-green-100 p-1 rounded-full"></i>
                            <span>Responsive Design that works on all devices</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 p-2 rounded-lg hover:bg-white transition duration-300">
                            <i class="fas fa-check text-green-500 bg-green-100 p-1 rounded-full"></i>
                            <span>Modern UI/UX with intuitive user interface</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 p-2 rounded-lg hover:bg-white transition duration-300">
                            <i class="fas fa-check text-green-500 bg-green-100 p-1 rounded-full"></i>
                            <span>Clean Code Architecture and best practices</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 p-2 rounded-lg hover:bg-white transition duration-300">
                            <i class="fas fa-check text-green-500 bg-green-100 p-1 rounded-full"></i>
                            <span>Performance Optimized for fast loading</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600 p-2 rounded-lg hover:bg-white transition duration-300">
                            <i class="fas fa-check text-green-500 bg-green-100 p-1 rounded-full"></i>
                            <span>SEO Friendly structure and markup</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Project Details -->
        <div class="grid lg:grid-cols-3 gap-8 mt-16 pt-12 border-t border-gray-200">
            <!-- Project Challenge -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-puzzle-piece text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">The Challenge</h3>
                <p class="text-gray-600">
                    Creating a scalable solution that meets client requirements while maintaining high performance and user experience standards.
                </p>
            </div>

            <!-- Solution -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-lightbulb text-green-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">The Solution</h3>
                <p class="text-gray-600">
                    Implemented modern web technologies and best practices to deliver a robust, maintainable, and user-friendly application.
                </p>
            </div>

            <!-- Results -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">The Results</h3>
                <p class="text-gray-600">
                    Successfully delivered a high-quality product that exceeded client expectations and achieved all project objectives.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects Section -->
@if($relatedProjects->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                Related <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Check out some of my other similar projects
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($relatedProjects as $relatedProject)
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                <!-- Project Image -->
                <div class="relative overflow-hidden h-48">
                    <!-- Dummy Images for Related Projects -->
                    @if($loop->index % 3 == 0)
                    <img
                        src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=400&h=250&fit=crop"
                        alt="{{ $relatedProject->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @elseif($loop->index % 3 == 1)
                    <img
                        src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&h=250&fit=crop"
                        alt="{{ $relatedProject->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @else
                    <img
                        src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=400&h=250&fit=crop"
                        alt="{{ $relatedProject->title }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700"
                    >
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>

                <!-- Project Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        <a href="{{ route('portfolio.show', $relatedProject->slug) }}">
                            {{ $relatedProject->title }}
                        </a>
                    </h3>

                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        {{ $relatedProject->short_description }}
                    </p>

                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-1 mb-4">
                        @php
                            $relatedTech = is_array($relatedProject->technologies) ? $relatedProject->technologies : json_decode($relatedProject->technologies, true);
                        @endphp
                        @if(is_array($relatedTech))
                            @foreach(array_slice($relatedTech, 0, 2) as $tech)
                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs font-medium border border-gray-200">
                                {{ $tech }}
                            </span>
                            @endforeach
                        @endif
                    </div>

                    <a href="{{ route('portfolio.show', $relatedProject->slug) }}"
                       class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold transition-colors duration-300 group/link">
                        View Project
                        <i class="fas fa-arrow-right group-hover/link:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Main Clickable Link -->
                <a href="{{ route('portfolio.show', $relatedProject->slug) }}" class="absolute inset-0 z-0"></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-purple-900 to-blue-900 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-purple-500/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Like What You <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">See</span>?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Let's discuss how we can bring your project to life with similar excellence
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-paper-plane"></i>
                    Start a Project
                </a>
                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-lg backdrop-blur-sm hover:border-white/60 transition-all duration-300">
                    <i class="fas fa-eye"></i>
                    View All Projects
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.prose {
    max-width: none;
}

.prose p {
    margin-bottom: 1rem;
    line-height: 1.7;
}

.group:hover .group-hover\:scale-105 {
    transform: scale(1.05);
}
</style>
@endpush
