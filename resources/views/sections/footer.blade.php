<footer class="bg-gray-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><circle fill=\"%23ffffff\" cx=\"30\" cy=\"30\" r=\"1\"/></g></svg>')"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Main Footer Content -->
        <div class="py-12 border-b border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand Column -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-code text-white text-lg"></i>
                        </div>
                        <span class="text-xl font-bold">Ahmad Farooq</span>
                    </div>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Full Stack Developer crafting digital experiences that inspire and engage users worldwide.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-lg flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="md:col-span-1">
                    <h3 class="font-semibold text-lg mb-6 text-white">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-blue-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Home
                        </a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-blue-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            About
                        </a></li>
                        <li><a href="#skills" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-blue-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Skills
                        </a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-blue-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Portfolio
                        </a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="md:col-span-1">
                    <h3 class="font-semibold text-lg mb-6 text-white">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-purple-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Web Development
                        </a></li>
                        {{-- <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-purple-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Mobile Apps
                        </a></li> --}}
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-purple-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            UI/UX Design
                        </a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-gray-400 hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <i class="fas fa-chevron-right text-purple-400 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                            Consulting
                        </a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="md:col-span-1">
                    <h3 class="font-semibold text-lg mb-6 text-white">Get In Touch</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-gray-400">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>ma0925312@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-400">
                            <i class="fas fa-phone text-green-400"></i>
                            <span>+92 3156314233</span>
                        </div>
                        <div class="flex items-center gap-3 text-gray-400">
                            <i class="fas fa-map-marker-alt text-red-400"></i>
                            <span>Lahore, Pakistan</span>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="mt-6">
                        <h4 class="font-medium text-white mb-3">Stay Updated</h4>
                        <div class="flex gap-2">
                            <input type="email" placeholder="Your email" class="flex-1 bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 transition-colors duration-300">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Copyright -->
                <div class="text-gray-400 text-sm">
                    © 2025 Ahmad Farooq. All rights reserved.
                </div>

                <!-- Legal Links -->
                <div class="flex flex-wrap gap-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Cookie Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Sitemap</a>
                </div>

                <!-- Language & Currency -->
                <div class="flex items-center gap-4 text-sm text-gray-400">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-globe"></i>
                        <select class="bg-transparent border-none outline-none text-gray-400">
                            <option>English</option>
                            <option>Urdu</option>
                        </select>
                    </div>
                    <div class="w-px h-4 bg-gray-600"></div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-dollar-sign"></i>
                        <select class="bg-transparent border-none outline-none text-gray-400">
                            <option>USD</option>
                            <option>PKR</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <button onclick="scrollToTop()" class="fixed bottom-6 right-6 w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 back-to-top opacity-0">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>
</footer>
