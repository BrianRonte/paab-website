<!-- Page Header with Background Image -->
<section class="relative py-20 overflow-hidden">
    <!-- Background Image with Fallback -->
    <div class="absolute inset-0">
        @if(isset($backgroundImage) && file_exists(public_path(str_replace(asset(''), '', $backgroundImage))))
            <img 
                src="{{ $backgroundImage }}" 
                alt="" 
                class="w-full h-full object-cover"
            >
        @endif
        <!-- Overlay - Always show this for consistent look -->
        <div class="absolute inset-0 bg-gradient-to-br from-paab-navy/90 via-paab-blue/85 to-paab-navy/90"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-paab-gold rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-paab-gold rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <!-- Badge -->
            @if(isset($badge))
            <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                <span class="w-2 h-2 bg-paab-gold rounded-full mr-2"></span>
                <span class="text-white text-sm font-medium">{{ $badge }}</span>
            </div>
            @endif
            
            <!-- Logo (Optional) -->
            @if(isset($showLogo) && $showLogo)
            <div class="flex justify-center mb-6">
                @if(file_exists(public_path('images/logo/paab-logo-white.png')))
                    <img src="{{ asset('images/logo/paab-logo-white.png') }}" alt="PAAB Logo" class="h-20 w-auto">
                @else
                    <div class="w-20 h-20 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                        <span class="text-paab-gold font-display font-bold text-3xl">P</span>
                    </div>
                @endif
            </div>
            @endif
            
            <!-- Title -->
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">
                {{ $title }}
            </h1>
            
            <!-- Description -->
            @if(isset($description))
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                {{ $description }}
            </p>
            @endif
        </div>
        
        <!-- Breadcrumb -->
        @if(isset($breadcrumbs) && count($breadcrumbs) > 0)
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-paab-gold transition-colors">Home</a>
                @foreach($breadcrumbs as $crumb)
                    <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
                    @if(isset($crumb['url']))
                        <a href="{{ $crumb['url'] }}" class="text-gray-400 hover:text-paab-gold transition-colors">{{ $crumb['label'] }}</a>
                    @else
                        <span class="text-paab-gold">{{ $crumb['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        </div>
        @endif
    </div>
</section>
