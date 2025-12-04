@extends('layouts.app')

@section('title', 'Board Members')
@section('meta_description', 'Meet the Board Members of the Public Accountants and Auditors Board (PAAB) Zimbabwe')

@section('content')

@include('partials.page-header', [
    'title' => 'The Board',
    'description' => 'Meet the distinguished professionals who govern the Public Accountants and Auditors Board.',
    'badge' => 'Leadership',
    'backgroundImage' => asset('images/headers/about-header.jpg'),
    'showLogo' => true,
    'breadcrumbs' => [
        ['label' => 'About', 'url' => url('/about/overview')],
        ['label' => 'The Board']
    ]
])

<!-- Board Introduction -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-gray-600 text-lg leading-relaxed">
                The Board consists of members appointed by the Minister of Finance in terms of Section 4 of the Public Accountants and Auditors Act [Chapter 27:12]. 
                The Board provides strategic direction and oversight to ensure PAAB fulfills its mandate of regulating the accountancy profession in Zimbabwe.
            </p>
        </div>
    </div>
</section>

<!-- Chairman Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid md:grid-cols-3 gap-0">
                    <!-- Photo -->
                    <div class="md:col-span-1">
                        <div class="h-full min-h-[350px] bg-gradient-to-br from-paab-navy to-paab-blue relative">
                            @if(file_exists(public_path('images/board/valentine-mushayakarara.jpg')))
                                <img src="{{ asset('images/board/valentine-mushayakarara.jpg') }}" alt="Mr Valentine Mushayakarara" class="w-full h-full object-cover">
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <i class="fas fa-user text-white/50 text-5xl"></i>
                                        </div>
                                        <p class="text-white/50 text-sm">Photo Coming Soon</p>
                                    </div>
                                </div>
                            @endif
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-paab-navy/90 to-transparent p-6">
                                <span class="bg-paab-gold text-paab-navy text-xs font-bold px-3 py-1 rounded-full">
                                    CHAIRMAN
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Info -->
                    <div class="md:col-span-2 p-8 md:p-10">
                        <h2 class="font-display text-2xl md:text-3xl font-bold text-paab-navy mb-2">
                            Mr Valentine Mushayakarara
                        </h2>
                        <p class="text-paab-gold font-semibold mb-4">Board Chairman</p>
                        <div class="prose text-gray-600">
                            <p>
                                Mr Valentine Mushayakarara serves as the Chairman of the Public Accountants and Auditors Board. 
                                He brings extensive experience in corporate governance, finance, and the accountancy profession 
                                to his role in leading the Board.
                            </p>
                            <p class="mt-4">
                                Under his leadership, the Board continues to strengthen the regulation of the accountancy 
                                profession in Zimbabwe, ensuring adherence to international standards and ethical practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Board Members Grid -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">Board Members</h2>
            <p class="text-gray-600">Distinguished professionals serving on the PAAB Board</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $boardMembers = [
                    [
                        'name' => 'Ms Valerie Muyambo',
                        'title' => 'Board Member',
                        'image' => 'valerie-muyambo.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Dr Tagarira Mutenga',
                        'title' => 'Board Member',
                        'image' => 'tagarira-mutenga.jpg',
                        'hasPhoto' => true
                    ],
                    [
                        'name' => 'Ms Evernice T Nyandoro',
                        'title' => 'Board Member',
                        'image' => 'evernice-nyandoro.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mr Alfred Chaavure',
                        'title' => 'Board Member',
                        'image' => 'alfred-chaavure.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Dr Obson Matunja',
                        'title' => 'Board Member',
                        'image' => 'obson-matunja.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mr Lawrence Nyajeka',
                        'title' => 'Board Member',
                        'image' => 'lawrence-nyajeka.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mrs Fortunate Masendeke',
                        'title' => 'Board Member',
                        'image' => 'fortunate-masendeke.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Ms Rheah Kujinga',
                        'title' => 'Board Member',
                        'image' => 'rheah-kujinga.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Ms Beatrice Ncube',
                        'title' => 'Board Member',
                        'image' => 'beatrice-ncube.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Dr Tamuka Maziriri',
                        'title' => 'Board Member',
                        'image' => 'tamuka-maziriri.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mr Edwin Zvandasara',
                        'title' => 'Board Member',
                        'image' => 'edwin-zvandasara.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mr Thomson Masvaure',
                        'title' => 'Board Member',
                        'image' => 'thomson-masvaure.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Ms Rumbidzai Manjengwa',
                        'title' => 'Board Member',
                        'image' => 'rumbidzai-manjengwa.jpg',
                        'hasPhoto' => false
                    ],
                    [
                        'name' => 'Mr David Mokina',
                        'title' => 'Board Member',
                        'image' => 'david-mokina.jpg',
                        'hasPhoto' => false
                    ],
                ];
            @endphp

            @foreach($boardMembers as $member)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group border border-gray-100">
                    <!-- Photo -->
                    <div class="relative h-56 bg-gradient-to-br from-gray-200 to-gray-300">
                        @if(file_exists(public_path('images/board/' . $member['image'])))
                            <img src="{{ asset('images/board/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-paab-navy/80 to-paab-blue/80">
                                <div class="text-center">
                                    <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto">
                                        <i class="fas fa-user text-white/50 text-3xl"></i>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Info -->
                    <div class="p-5 text-center">
                        <h3 class="font-display text-lg font-bold text-paab-navy group-hover:text-paab-gold transition-colors">
                            {{ $member['name'] }}
                        </h3>
                        <p class="text-gray-500 text-sm">{{ $member['title'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Board Composition Info -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-3xl font-bold text-paab-navy mb-6">Board Composition</h2>
                <div class="prose text-gray-600">
                    <p>
                        In terms of Section 4 of the Public Accountants and Auditors Act [Chapter 27:12], the Board consists of:
                    </p>
                </div>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">A Chairman appointed by the Minister</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Representatives from each principal constituent body</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Representatives from associate constituent bodies</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">A representative from the Ministry of Finance</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">A legal practitioner nominated by the Law Society</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-paab-gold mt-1 mr-3"></i>
                        <span class="text-gray-700">Public interest representatives</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-6 bg-paab-light rounded-xl">
                        <div class="text-4xl font-bold text-paab-gold mb-2">3</div>
                        <div class="text-gray-600 text-sm">Year Term</div>
                    </div>
                    <div class="text-center p-6 bg-paab-light rounded-xl">
                        <div class="text-4xl font-bold text-paab-gold mb-2">15</div>
                        <div class="text-gray-600 text-sm">Board Members</div>
                    </div>
                    <div class="text-center p-6 bg-paab-light rounded-xl">
                        <div class="text-4xl font-bold text-paab-gold mb-2">4</div>
                        <div class="text-gray-600 text-sm">Meetings/Year</div>
                    </div>
                    <div class="text-center p-6 bg-paab-light rounded-xl">
                        <div class="text-4xl font-bold text-paab-gold mb-2">5</div>
                        <div class="text-gray-600 text-sm">Committees</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Board Committees -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-paab-navy mb-4">Board Committees</h2>
            <p class="text-gray-600">The Board operates through various specialized committees</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-chart-line text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Finance & Audit Committee</h3>
                <p class="text-gray-600 text-sm">Oversees financial management and internal audit functions</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-book text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Standards Committee</h3>
                <p class="text-gray-600 text-sm">Reviews and recommends accounting and auditing standards</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-graduation-cap text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Education Committee</h3>
                <p class="text-gray-600 text-sm">Oversees education, training, and CPD requirements</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-clipboard-check text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Practice Review Committee</h3>
                <p class="text-gray-600 text-sm">Monitors quality of audit and accounting services</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-gavel text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Disciplinary Committee</h3>
                <p class="text-gray-600 text-sm">Handles complaints and disciplinary matters</p>
            </div>

            <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300 border border-gray-100">
                <div class="w-12 h-12 bg-paab-gold/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-users text-paab-gold text-xl"></i>
                </div>
                <h3 class="font-display text-lg font-bold text-paab-navy mb-2">Human Resources Committee</h3>
                <p class="text-gray-600 text-sm">Oversees HR policies and staff matters</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-paab-navy to-paab-blue rounded-3xl p-8 md:p-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white mb-4">
                        Have Questions?
                    </h2>
                    <p class="text-gray-300">
                        Contact PAAB for inquiries about the Board, governance, or any other matters.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                    <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Contact Us
                    </a>
                    <a href="{{ url('/about/overview') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>
                        About PAAB
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection