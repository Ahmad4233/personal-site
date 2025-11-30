@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <!-- Modern About Hero Section -->
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
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Me</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12">
                    Curious to know more about my journey? Let me introduce myself.
                </p>

                <!-- Reveal About Button -->
                <button id="revealAboutBtn" class="group relative bg-gradient-to-r from-blue-500 to-purple-600 text-white px-12 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:-translate-y-2 shadow-2xl hover:shadow-3xl">
                    <span class="relative z-10 flex items-center gap-3">
                        <i class="fas fa-user text-lg group-hover:scale-110 transition-transform duration-500"></i>
                        Discover My Story
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-500 -z-10"></div>
                </button>
            </div>
        </div>
    </section>

    <!-- Hidden About Section (Will slide up on click) -->
    @if ($about)
        <div id="aboutSection" class="fixed bottom-0 left-0 w-full bg-white transform translate-y-full transition-transform duration-700 z-50 shadow-2xl rounded-t-3xl overflow-hidden" style="max-height: 90vh;">
            <!-- Close Button -->
            <div class="absolute top-6 right-6 z-10">
                <button id="closeAboutBtn" class="w-12 h-12 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center text-gray-600 hover:text-gray-800 transition-all duration-300 transform hover:scale-110 shadow-lg">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- About Content -->
            <div class="h-full overflow-y-auto">
                <div class="container mx-auto px-6 py-12">
                    <div class="grid lg:grid-cols-2 gap-12 items-start">
                        <!-- About Image - Perfect Size -->
                        <div class="relative flex justify-center">
                            <!-- Compact Image Container -->
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl w-64 h-80">
                                <img
                                    src="{{ asset('Ahmad.jpeg') }}"
                                    alt="Ahmad Farooq"
                                    class="w-full h-full object-cover object-center"
                                    style="object-position: center 30%;"
                                >
                            </div>

                            <!-- Floating Tech Badge -->
                            <div class="absolute -top-3 -left-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-full shadow-lg z-20 flex items-center gap-2">
                                <i class="fab fa-laravel"></i>
                                <span class="text-sm font-semibold">Laravel Pro</span>
                            </div>

                            <!-- Experience Badge -->
                            <div class="absolute -bottom-4 -right-4 bg-gradient-to-r from-green-600 to-blue-600 text-white p-4 rounded-2xl shadow-2xl z-20">
                                <div class="text-center">
                                    <div class="text-2xl font-bold">{{ $about->experience_years }}+</div>
                                    <div class="text-xs">Years Exp</div>
                                </div>
                            </div>
                        </div>

                        <!-- About Content -->
                        <div class="lg:pl-8">
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                                Laravel <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Specialist</span>
                            </h2>
                            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                                Full Stack Developer specializing in Laravel with {{ $about->experience_years }}+ years of experience.
                                Passionate about building scalable web applications and modern digital solutions.
                            </p>

                            <!-- Tech Stack -->
                            <div class="mb-8">
                                <h3 class="text-xl font-bold text-gray-800 mb-4">Tech Stack</h3>
                                <div class="flex flex-wrap gap-3">
                                    <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold border border-blue-200">Laravel</span>
                                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold border border-green-200">Vue.js</span>
                                    <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-semibold border border-yellow-200">JavaScript</span>
                                    <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-semibold border border-red-200">PHP</span>
                                    <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold border border-purple-200">Tailwind CSS</span>
                                    <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-semibold border border-gray-200">MySQL</span>
                                </div>
                            </div>

                            <!-- Personal Info -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 border border-gray-200">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-user text-blue-600"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">Name</div>
                                        <div class="font-semibold text-gray-800">Ahmad Farooq</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 border border-gray-200">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-green-600"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">Education</div>
                                        <div class="font-semibold text-gray-800">BS Software Engineering</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 border border-gray-200">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-university text-purple-600"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">University</div>
                                        <div class="font-semibold text-gray-800">Islamia University</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-all duration-300 border border-gray-200">
                                    <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-calendar text-pink-600"></i>
                                    </div>
                                    <div>
                                        <div class="text-sm text-gray-500">Session</div>
                                        <div class="font-semibold text-gray-800">2021-2025</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-4 mb-8">
                                <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl transform hover:scale-105 transition duration-300 border border-blue-200">
                                    <div class="text-2xl font-bold text-gray-800">{{ $about->projects_completed }}+</div>
                                    <div class="text-gray-600 text-sm font-semibold">Projects</div>
                                </div>
                                <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl transform hover:scale-105 transition duration-300 border border-purple-200">
                                    <div class="text-2xl font-bold text-gray-800">{{ $about->happy_clients }}+</div>
                                    <div class="text-gray-600 text-sm font-semibold">Clients</div>
                                </div>
                                <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl transform hover:scale-105 transition duration-300 border border-green-200">
                                    <div class="text-2xl font-bold text-gray-800">{{ $about->experience_years }}+</div>
                                    <div class="text-gray-600 text-sm font-semibold">Years</div>
                                </div>
                            </div>

                            <!-- Download CV Button -->
                            @if ($about->cv_file)
                                <a href="{{ asset('storage/' . $about->cv_file) }}" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg border border-blue-600">
                                    <i class="fas fa-download"></i>
                                    Download CV
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Education & Experience Section -->
                    <div class="grid lg:grid-cols-2 gap-12 mt-16 pt-12 border-t border-gray-200">
                        <!-- Education -->
                        <div>
                            <h3 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-3">
                                <i class="fas fa-graduation-cap text-blue-600"></i>
                                Education
                            </h3>
                            <div class="space-y-6">
                                <!-- BS Software Engineering -->
                                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-200">
                                    <div class="flex justify-between items-start mb-3">
                                        <h4 class="text-xl font-bold text-gray-800">BS Software Engineering</h4>
                                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold border border-blue-200">2021-2025</span>
                                    </div>
                                    <p class="text-gray-600 font-semibold mb-2 flex items-center gap-2">
                                        <i class="fas fa-university text-purple-600"></i>
                                        Islamia University
                                    </p>
                                    <p class="text-gray-600">Specialized in web development and software engineering principles.</p>
                                </div>

                                <!-- Web Development Certification -->
                                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-200">
                                    <div class="flex justify-between items-start mb-3">
                                        <h4 class="text-xl font-bold text-gray-800">Web Development Certification</h4>
                                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-semibold border border-green-200">2022</span>
                                    </div>
                                    <p class="text-gray-600 font-semibold mb-2 flex items-center gap-2">
                                        <i class="fas fa-laptop-code text-green-600"></i>
                                        PIAIC
                                    </p>
                                    <p class="text-gray-600">Advanced web development with modern technologies.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Experience -->
                        @if ($about->experience)
                            <div>
                                <h3 class="text-3xl font-bold text-gray-800 mb-8 flex items-center gap-3">
                                    <i class="fas fa-briefcase text-purple-600"></i>
                                    Experience
                                </h3>
                                <div class="space-y-6">
                                    @foreach (json_decode($about->experience, true) as $experience)
                                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-200">
                                            <div class="flex justify-between items-start mb-3">
                                                <h4 class="text-xl font-bold text-gray-800">{{ $experience['position'] }}</h4>
                                                <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold border border-purple-200">{{ $experience['duration'] }}</span>
                                            </div>
                                            <p class="text-gray-600 font-semibold mb-2 flex items-center gap-2">
                                                <i class="fas fa-building text-gray-600"></i>
                                                {{ $experience['company'] }}
                                            </p>
                                            <p class="text-gray-600">{{ $experience['description'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Overlay for background dim -->
    <div id="aboutOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
@endsection

@push('styles')
    <style>
        /* Custom scrollbar for about section */
        #aboutSection::-webkit-scrollbar {
            width: 8px;
        }

        #aboutSection::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        #aboutSection::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #3B82F6, #8B5CF6);
            border-radius: 10px;
        }

        #aboutSection::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #2563EB, #7C3AED);
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const revealBtn = document.getElementById('revealAboutBtn');
            const aboutSection = document.getElementById('aboutSection');
            const closeBtn = document.getElementById('closeAboutBtn');
            const overlay = document.getElementById('aboutOverlay');

            // Reveal about section
            revealBtn.addEventListener('click', function() {
                aboutSection.classList.remove('translate-y-full');
                aboutSection.classList.add('translate-y-0');
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            // Close about section
            function closeAboutSection() {
                aboutSection.classList.remove('translate-y-0');
                aboutSection.classList.add('translate-y-full');
                overlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            closeBtn.addEventListener('click', closeAboutSection);
            overlay.addEventListener('click', closeAboutSection);

            // Close on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeAboutSection();
                }
            });
        });
    </script>
@endpush
