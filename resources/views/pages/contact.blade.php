@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<!-- Contact Hero Section -->
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
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Touch</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Let's discuss your project and bring your ideas to life
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="lg:pr-8">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Let's Talk About <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Your Project</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    I'm always excited to hear about new projects and opportunities.
                    Whether you need a website, web application, or consultation,
                    let's discuss how we can work together.
                </p>

                @if($contactInfo)
                <!-- Contact Details -->
                <div class="space-y-6 mb-8">
                    <!-- Phone -->
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-phone text-blue-600 text-lg"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500">Phone</div>
                            <div class="text-lg font-semibold text-gray-800">{{ $contactInfo->phone }}</div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-all duration-300 group">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-envelope text-green-600 text-lg"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500">Email</div>
                            <div class="text-lg font-semibold text-gray-800">{{ $contactInfo->email }}</div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-all duration-300 group">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-map-marker-alt text-purple-600 text-lg"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500">Address</div>
                            <div class="text-lg font-semibold text-gray-800">{{ $contactInfo->address }}</div>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-all duration-300 group">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clock text-yellow-600 text-lg"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500">Working Hours</div>
                            <div class="text-lg font-semibold text-gray-800">{{ $contactInfo->working_hours }}</div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                @if($contactInfo->social_links)
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Follow Me</h3>
                    <div class="flex gap-4">
                        @foreach(json_decode($contactInfo->social_links, true) as $platform => $link)
                        <a href="{{ $link }}" target="_blank"
                           class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center text-gray-600 hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1 group/social">
                            <i class="fab fa-{{ $platform }} text-lg group-hover/social:scale-110 transition-transform duration-300"></i>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
                @endif

                <!-- Stats -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded-2xl">
                        <div class="text-2xl font-bold text-blue-600">24/7</div>
                        <div class="text-sm text-blue-600 font-semibold">Support</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-2xl">
                        <div class="text-2xl font-bold text-green-600">2h</div>
                        <div class="text-sm text-green-600 font-semibold">Response Time</div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:pl-8">
                <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 shadow-xl border border-gray-200">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-6">Send Me a Message</h3>

                    @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-2xl flex items-center gap-3">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Name -->
                        <div class="group">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 group-hover:border-gray-400"
                                    placeholder="Enter your full name"
                                >
                                <div class="absolute right-3 top-3 text-gray-400">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="group">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <div class="relative">
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 group-hover:border-gray-400"
                                    placeholder="Enter your email address"
                                >
                                <div class="absolute right-3 top-3 text-gray-400">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="group">
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 group-hover:border-gray-400"
                                    placeholder="What is this regarding?"
                                >
                                <div class="absolute right-3 top-3 text-gray-400">
                                    <i class="fas fa-tag"></i>
                                </div>
                            </div>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="group">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <div class="relative">
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    required
                                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 group-hover:border-gray-400 resize-none"
                                    placeholder="Tell me about your project..."
                                ></textarea>
                                <div class="absolute right-3 top-3 text-gray-400">
                                    <i class="fas fa-comment"></i>
                                </div>
                            </div>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-4 px-6 rounded-xl font-bold text-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center gap-3 group/btn"
                        >
                            <i class="fas fa-paper-plane group-hover/btn:rotate-12 transition-transform duration-300"></i>
                            Send Message
                        </button>
                    </form>

                    <!-- Form Note -->
                    <div class="mt-6 p-4 bg-blue-50 rounded-2xl border border-blue-200">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                            <div>
                                <p class="text-sm text-blue-700">
                                    <strong>Quick Response:</strong> I typically respond within 2 hours during working hours.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Questions</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Quick answers to common questions about working with me
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- FAQ Items -->
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-rocket text-blue-500"></i>
                        How quickly can you start my project?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        I can typically start within 1-2 days after project discussion and requirements finalization.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-dollar-sign text-green-500"></i>
                        What are your payment terms?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        50% upfront, 50% upon project completion. Milestone-based payments for larger projects.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-code text-purple-500"></i>
                        What technologies do you work with?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Laravel, Vue.js, React, Tailwind CSS, MySQL, and modern web technologies.
                    </p>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-clock text-yellow-500"></i>
                        What's your typical project timeline?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Small projects: 1-2 weeks, Medium projects: 3-4 weeks, Large projects: 6-8 weeks.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-shield-alt text-red-500"></i>
                        Do you provide post-launch support?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Yes, I offer 30 days of free support and maintenance after project delivery.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-3">
                        <i class="fas fa-comments text-pink-500"></i>
                        How do we communicate during the project?
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Regular updates via email, WhatsApp, and video calls for major milestones.
                    </p>
                </div>
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
                Ready to Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Journey</span>?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Let's create something amazing together. Get in touch and let's discuss your project.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </a>
                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center gap-3 border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-lg backdrop-blur-sm hover:border-white/60 transition-all duration-300">
                    <i class="fas fa-eye"></i>
                    View My Work
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
#contact-form {
    scroll-margin-top: 100px;
}

/* Smooth focus transitions */
input:focus, textarea:focus {
    transform: translateY(-2px);
}
</style>
@endpush
