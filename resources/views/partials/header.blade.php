<!-- Top Bar -->
<div class="bg-paab-navy text-white text-sm hidden md:block">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-2">
            <div class="flex items-center space-x-6">
                <a href="mailto:info@paab.org.zw" class="hover:text-paab-gold transition-colors duration-300">
                    <i class="fas fa-envelope mr-2"></i>info@paab.org.zw
                </a>
                <a href="tel:+2632795767" class="hover:text-paab-gold transition-colors duration-300">
                    <i class="fas fa-phone mr-2"></i>+263 24 2795767
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-paab-gold transition-colors duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="hover:text-paab-gold transition-colors duration-300">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="hover:text-paab-gold transition-colors duration-300">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            
            <!-- Logo -->
            <!-- <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-paab-navy rounded-full flex items-center justify-center">
                    <span class="text-paab-gold font-display font-bold text-xl">P</span>
                </div>
                <div class="hidden sm:block">
                    <h1 class="font-display font-bold text-paab-navy text-xl leading-tight">PAAB</h1>
                    <p class="text-xs text-gray-500 leading-tight">Public Accountants & Auditors Board</p>
                </div>
            </a> -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                @if(file_exists(public_path('images/logo/paab-logo.png')))
                    <img src="{{ asset('images/logo/paab-logo.png') }}" alt="PAAB Logo" class="h-12 w-auto">
                @else
                    <div class="w-11 h-11 bg-paab-gold rounded-xl flex items-center justify-center group-hover:scale-105 transition-transform">
                        <span class="text-paab-navy font-display font-bold text-xl">P</span>
                    </div>
                @endif
                <div class="hidden sm:block">
                    <h1 class="font-display font-bold text-paab-navy text-xl leading-tight">PAAB</h1>
                    <p class="text-xs text-gray-500 leading-tight">Public Accountants & Auditors Board</p>
                </div>
            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 relative group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-paab-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <!-- About Dropdown -->
                <div class="relative group">
                    <button class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 flex items-center">
                        About Us
                        <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="py-2">
                            <a href="{{ url('/about/overview') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-info-circle mr-2 text-paab-gold"></i>Overview
                            </a>
                            <a href="{{ url('/about/mandate') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-bullseye mr-2 text-paab-gold"></i>Our Mandate
                            </a>
                            <a href="{{ url('/about/board') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-users mr-2 text-paab-gold"></i>Board Members
                            </a>
                            <a href="{{ url('/about/constituent-bodies') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-building mr-2 text-paab-gold"></i>Constituent Bodies
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 flex items-center">
                        Services
                        <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <div class="py-2">
                            <a href="{{ url('/services/registration') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-user-plus mr-2 text-paab-gold"></i>Registration
                            </a>
                            <a href="{{ url('/services/licensing') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-certificate mr-2 text-paab-gold"></i>Licensing
                            </a>
                            <a href="{{ url('/services/practice-review') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-clipboard-check mr-2 text-paab-gold"></i>Practice Review
                            </a>
                            <a href="{{ url('/services/verify-practitioner') }}" class="block px-4 py-2 text-gray-700 hover:bg-paab-light hover:text-paab-gold transition-colors duration-200">
                                <i class="fas fa-search mr-2 text-paab-gold"></i>Verify Practitioner
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/standards') }}" class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 relative group">
                    Standards
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-paab-gold transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ url('/resources') }}" class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 relative group">
                    Resources
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-paab-gold transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ url('/news') }}" class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 relative group">
                    News
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-paab-gold transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ url('/contact') }}" class="text-paab-navy font-medium hover:text-paab-gold transition-colors duration-300 relative group">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-paab-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="{{ url('/services/verify-practitioner') }}" class="bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-2.5 rounded-lg transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5">
                    <i class="fas fa-search mr-2"></i>Verify Practitioner
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-paab-navy p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden pb-4">
            <nav class="flex flex-col space-y-2">
                <a href="{{ url('/') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-home mr-3 text-paab-gold"></i>Home
                </a>
                <a href="{{ url('/about/overview') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-info-circle mr-3 text-paab-gold"></i>About Us
                </a>
                <a href="{{ url('/services/registration') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-concierge-bell mr-3 text-paab-gold"></i>Services
                </a>
                <a href="{{ url('/standards') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-balance-scale mr-3 text-paab-gold"></i>Standards
                </a>
                <a href="{{ url('/resources') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-folder-open mr-3 text-paab-gold"></i>Resources
                </a>
                <a href="{{ url('/news') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-newspaper mr-3 text-paab-gold"></i>News
                </a>
                <a href="{{ url('/contact') }}" class="text-paab-navy font-medium py-2 px-4 rounded-lg hover:bg-paab-light transition-colors duration-200">
                    <i class="fas fa-envelope mr-3 text-paab-gold"></i>Contact
                </a>
                <a href="{{ url('/services/verify-practitioner') }}" class="bg-paab-gold text-paab-navy font-semibold py-3 px-4 rounded-lg text-center mt-2">
                    <i class="fas fa-search mr-2"></i>Verify Practitioner
                </a>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Menu Script -->
<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const icon = this.querySelector('i');
        
        menu.classList.toggle('hidden');
        
        if (menu.classList.contains('hidden')) {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        } else {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        }
    });
</script>