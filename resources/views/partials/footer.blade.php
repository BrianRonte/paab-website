<!-- Footer -->
<footer class="bg-paab-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- About -->
            <div>
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-paab-gold rounded-xl flex items-center justify-center mr-3">
                        <span class="text-paab-navy font-display font-bold text-xl">P</span>
                    </div>
                    <div>
                        <h3 class="font-display font-bold text-lg">PAAB</h3>
                        <p class="text-gray-400 text-xs">Zimbabwe</p>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    The Public Accountants and Auditors Board regulates the accountancy profession in Zimbabwe, ensuring the highest standards of practice and professional conduct.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors group">
                        <i class="fab fa-facebook-f text-gray-400 group-hover:text-paab-navy"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors group">
                        <i class="fab fa-twitter text-gray-400 group-hover:text-paab-navy"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 hover:bg-paab-gold rounded-lg flex items-center justify-center transition-colors group">
                        <i class="fab fa-linkedin-in text-gray-400 group-hover:text-paab-navy"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-display font-bold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/about/overview') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            About PAAB
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services/registration') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Registration
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services/licensing') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Licensing
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/standards') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Standards
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.verify-practitioner') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Verify Practitioner
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            News & Updates
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="font-display font-bold text-lg mb-6">Resources</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('resources') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Downloads
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about/constituent-bodies') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Constituent Bodies
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services/practice-review') }}" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            Practice Review
                        </a>
                    </li>
                    <li>
                        <a href="https://www.ifrs.org" target="_blank" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            IFRS Foundation
                        </a>
                    </li>
                    <li>
                        <a href="https://www.ifac.org" target="_blank" class="text-gray-400 hover:text-paab-gold transition-colors flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2 text-paab-gold"></i>
                            IFAC
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-display font-bold text-lg mb-6">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                            <i class="fas fa-map-marker-alt text-paab-gold"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">72 Harare Drive, Mt Pleasant</p>
                            <p class="text-gray-400 text-sm">Harare, Zimbabwe</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                            <i class="fas fa-phone text-paab-gold"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">+263 24 2795767/8</p>
                            <p class="text-gray-400 text-sm">+263 24 2251893</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                            <i class="fas fa-envelope text-paab-gold"></i>
                        </div>
                        <div>
                            <a href="mailto:info@paab.org.zw" class="text-gray-400 hover:text-paab-gold text-sm transition-colors">info@paab.org.zw</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} Public Accountants and Auditors Board. All rights reserved.
                </p>
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-paab-gold text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-paab-gold text-sm transition-colors">Terms of Use</a>
                    @auth
                        <a href="{{ route('admin.news.index') }}" class="text-gray-500 hover:text-paab-gold text-sm transition-colors">
                            <i class="fas fa-cog mr-1"></i> Admin Panel
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-500 hover:text-red-400 text-sm transition-colors">
                                <i class="fas fa-sign-out-alt mr-1"></i> Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-500 hover:text-paab-gold text-sm transition-colors">
                            <i class="fas fa-lock mr-1"></i> Staff Login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</footer>