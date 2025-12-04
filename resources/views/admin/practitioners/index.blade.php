@extends('layouts.admin')

@section('title', 'Manage Practitioners')

@section('content')

<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Manage Practitioners</h1>
        <p class="text-gray-600 mt-1">Register, edit, and manage individual practitioners</p>
    </div>
    <a href="{{ route('admin.practitioners.create') }}" class="mt-4 sm:mt-0 inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
        <i class="fas fa-plus mr-2"></i>
        Add New Practitioner
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-user-tie text-blue-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['total'] }}</p>
                <p class="text-gray-500 text-sm">Total</p>
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
            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-search text-purple-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['auditors'] }}</p>
                <p class="text-gray-500 text-sm">Auditors</p>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl p-4 shadow-sm">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                <i class="fas fa-calculator text-orange-600"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['accountants'] }}</p>
                <p class="text-gray-500 text-sm">Accountants</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Links -->
<div class="flex gap-4 mb-6">
    <a href="{{ route('admin.firms.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-lg font-medium transition-colors">
        <i class="fas fa-building mr-2"></i>Firms
    </a>
    <a href="{{ route('admin.practitioners.index') }}" class="px-4 py-2 bg-paab-navy text-white rounded-lg font-medium">
        <i class="fas fa-user-tie mr-2"></i>Practitioners
    </a>
</div>

<!-- Practitioners Table -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="font-semibold text-gray-900">All Registered Practitioners</h2>
    </div>
    
    @if($practitioners->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Reg. Number</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Firm</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Expiry</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($practitioners as $practitioner)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-gray-500"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $practitioner->name }}</p>
                                        <p class="text-gray-500 text-sm">{{ $practitioner->constituent_body ?? 'No PAO' }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600 font-mono text-sm">
                                {{ $practitioner->registration_number }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="{{ $practitioner->category_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $practitioner->category_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="{{ $practitioner->status_color }} text-xs font-semibold px-2 py-1 rounded-full">
                                    {{ $practitioner->status_label }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-600 text-sm">
                                {{ $practitioner->display_firm }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @if($practitioner->expiry_date)
                                    <span class="{{ $practitioner->is_valid ? 'text-gray-600' : 'text-red-600 font-semibold' }}">
                                        {{ $practitioner->expiry_date->format('M d, Y') }}
                                    </span>
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.practitioners.edit', $practitioner) }}" class="w-8 h-8 bg-blue-100 hover:bg-blue-200 rounded-lg flex items-center justify-center text-blue-600 transition-colors" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.practitioners.destroy', $practitioner) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this practitioner?');">
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
            {{ $practitioners->links() }}
        </div>
    @else
        <div class="px-6 py-12 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-user-tie text-gray-400 text-2xl"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">No Practitioners Registered</h3>
            <p class="text-gray-500 mb-4">Get started by adding your first practitioner.</p>
            <a href="{{ route('admin.practitioners.create') }}" class="inline-flex items-center bg-paab-gold hover:bg-paab-gold-light text-paab-navy font-semibold px-6 py-3 rounded-xl transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Add First Practitioner
            </a>
        </div>
    @endif
</div>

@endsection