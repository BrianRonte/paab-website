@extends('layouts.admin')

@section('title', 'Manage Firms')

@section('content')

<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Manage Firms</h1>
        <p class="text-gray-600 mt-1">Register, edit, and manage registered firms</p>
    </div>
    <a href="{{ route('admin.firms.create') }}" class="mt-4 sm:mt-0 inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
        <i class="fas fa-plus mr-2"></i>
        Add New Firm
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-building text-blue-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['total'] }}</p>
                <p class="text-gray-500 text-sm">Total Firms</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-check-circle text-green-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['active'] }}</p>
                <p class="text-gray-500 text-sm">Active</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-pause-circle text-yellow-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['suspended'] }}</p>
                <p class="text-gray-500 text-sm">Suspended</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-search text-purple-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['audit'] }}</p>
                <p class="text-gray-500 text-sm">Audit Firms</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Links -->
<div class="flex gap-4 mb-6">
    <a href="{{ route('admin.firms.index') }}" class="px-4 py-2 bg-paab-navy text-white rounded-lg font-medium">
        <i class="fas fa-building mr-2"></i>Firms
    </a>
    <a href="{{ route('admin.practitioners.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg font-medium transition-colors">
        <i class="fas fa-user-tie mr-2"></i>Practitioners
    </a>
</div>

<!-- Firms Table -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="font-semibold text-gray-900">All Registered Firms</h2>
    </div>
    
    @if($firms->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Firm</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Reg. Number</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">City</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Expiry</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($firms as $firm)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-lg overflow-hidden flex-shrink-0 mr-3 bg-gray-100 flex items-center justify-center">
                                        @if($firm->logo)
                                            <img src="{{ asset('storage/' . $firm->logo) }}" alt="" class="w-full h-full object-cover">
                                        @else
                                            <i class="fas fa-building text-gray-400"></i>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $firm->name }}</p>
                                        <p class="text-gray-500 text-sm">{{ $firm->managing_partner ?? 'No managing partner' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-mono text-sm">
                                {{ $firm->registration_number }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="{{ $firm->category_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $firm->category_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="{{ $firm->status_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $firm->status_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-600">
                                {{ $firm->city ?? '-' }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @if($firm->expiry_date)
                                    <span class="{{ $firm->is_valid ? 'text-gray-600' : 'text-red-600 font-semibold' }}">
                                        {{ $firm->expiry_date->format('M d, Y') }}
                                    </span>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.firms.edit', $firm) }}" class="w-8 h-8 bg-blue-100 hover:bg-blue-200 rounded-lg flex items-center justify-center text-blue-600 transition-colors" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.firms.destroy', $firm) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this firm?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-8 h-8 bg-red-100 hover:bg-red-200 rounded-lg flex items-center justify-center text-red-600 transition-colors" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $firms->links() }}
        </div>
    @else
        <div class="px-6 py-12 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-building text-gray-400 text-2xl"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">No Firms Registered</h3>
            <p class="text-gray-500 mb-4">Get started by adding your first firm.</p>
            <a href="{{ route('admin.firms.create') }}" class="inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Add First Firm
            </a>
        </div>
    @endif
</div>

@endsection