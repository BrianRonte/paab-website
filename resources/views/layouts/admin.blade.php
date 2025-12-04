<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') - PAAB Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Admin Header -->
    <header class="bg-paab-navy shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('admin.news.index') }}" class="flex items-center">
                        <div class="w-10 h-10 bg-paab-gold rounded-lg flex items-center justify-center mr-3">
                            <span class="text-paab-navy font-bold text-lg">P</span>
                        </div>
                        <div>
                            <span class="text-white font-semibold">PAAB</span>
                            <span class="text-paab-gold text-sm ml-2">Admin</span>
                        </div>
                    </a>
                </div>
                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('admin.news.index') }}" class="text-gray-300 hover:text-white transition-colors flex items-center {{ request()->routeIs('admin.news.*') ? 'text-paab-gold' : '' }}">
                        <i class="fas fa-newspaper mr-2"></i>
                        News
                    </a>
                    <a href="{{ route('admin.firms.index') }}" class="text-gray-300 hover:text-white transition-colors flex items-center {{ request()->routeIs('admin.firms.*') ? 'text-paab-gold' : '' }}">
                        <i class="fas fa-building mr-2"></i>
                        Firms
                    </a>
                    <a href="{{ route('admin.practitioners.index') }}" class="text-gray-300 hover:text-white transition-colors flex items-center {{ request()->routeIs('admin.practitioners.*') ? 'text-paab-gold' : '' }}">
                        <i class="fas fa-user-tie mr-2"></i>
                        Practitioners
                    </a>
                    <span class="text-gray-600">|</span>
                    <a href="{{ url('/') }}" target="_blank" class="text-gray-300 hover:text-white transition-colors flex items-center">
                        <i class="fas fa-external-link-alt mr-2"></i>
                        View Site
                    </a>
                    <span class="text-gray-600">|</span>
                    <div class="flex items-center">
                        <span class="text-gray-400 mr-3">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-300 hover:text-red-400 transition-colors flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </nav>      
                
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-300 hover:text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl flex items-center justify-between" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3"></i>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-green-700 hover:text-green-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl flex items-center justify-between" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-circle mr-3"></i>
                    <span>{{ session('error') }}</span>
                </div>
                <button onclick="this.parentElement.remove()" class="text-red-700 hover:text-red-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <p class="text-center text-gray-500 text-sm">
                © {{ date('Y') }} Public Accountants and Auditors Board. Admin Panel.
            </p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>