<?php

namespace App\Http\Controllers;

use App\Models\Firm;
use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FirmController extends Controller
{
    // =============================================
    // PUBLIC METHODS - Verification
    // =============================================

    /**
     * Search and verify firms/practitioners
     */
    public function verify(Request $request)
    {
        $results = null;
        $searchType = $request->get('type', 'individual');
        $query = $request->get('query');
        $category = $request->get('category', 'all');

        if ($query) {
            if ($searchType === 'firm') {
                $results = Firm::where(function($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                      ->orWhere('registration_number', 'like', "%{$query}%")
                      ->orWhere('managing_partner', 'like', "%{$query}%");
                })
                ->when($category !== 'all', function($q) use ($category) {
                    $q->where('category', $category);
                })
                ->orderBy('name')
                ->get();
            } else {
                $results = Practitioner::where(function($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                      ->orWhere('registration_number', 'like', "%{$query}%");
                })
                ->when($category !== 'all', function($q) use ($category) {
                    $q->where('category', $category);
                })
                ->orderBy('name')
                ->get();
            }
        }

        return view('pages.services.verify-practitioner', compact('results', 'searchType', 'query', 'category'));
    }

    /**
     * API endpoint for AJAX search
     */
    public function search(Request $request)
    {
        $searchType = $request->get('type', 'individual');
        $query = $request->get('query');
        $category = $request->get('category', 'all');

        if (!$query || strlen($query) < 2) {
            return response()->json(['results' => []]);
        }

        if ($searchType === 'firm') {
            $results = Firm::where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('registration_number', 'like', "%{$query}%");
            })
            ->when($category !== 'all', function($q) use ($category) {
                $q->where('category', $category);
            })
            ->take(20)
            ->get()
            ->map(function($firm) {
                return [
                    'id' => $firm->id,
                    'type' => 'firm',
                    'name' => $firm->name,
                    'registration_number' => $firm->registration_number,
                    'category' => $firm->category_label,
                    'category_color' => $firm->category_color,
                    'status' => $firm->status,
                    'status_label' => $firm->status_label,
                    'status_color' => $firm->status_color,
                    'city' => $firm->city,
                    'partners_count' => $firm->partners_count,
                    'expiry_date' => $firm->expiry_date?->format('Y-m-d'),
                    'is_valid' => $firm->is_valid,
                ];
            });
        } else {
            $results = Practitioner::where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('registration_number', 'like', "%{$query}%");
            })
            ->when($category !== 'all', function($q) use ($category) {
                $q->where('category', $category);
            })
            ->take(20)
            ->get()
            ->map(function($practitioner) {
                return [
                    'id' => $practitioner->id,
                    'type' => 'individual',
                    'name' => $practitioner->name,
                    'registration_number' => $practitioner->registration_number,
                    'category' => $practitioner->category_label,
                    'category_color' => $practitioner->category_color,
                    'status' => $practitioner->status,
                    'status_label' => $practitioner->status_label,
                    'status_color' => $practitioner->status_color,
                    'firm' => $practitioner->display_firm,
                    'constituent_body' => $practitioner->constituent_body,
                    'expiry_date' => $practitioner->expiry_date?->format('Y-m-d'),
                    'is_valid' => $practitioner->is_valid,
                ];
            });
        }

        return response()->json(['results' => $results]);
    }

    // =============================================
    // ADMIN METHODS - Firms
    // =============================================

    /**
     * Display admin firms listing
     */
    public function adminIndex()
    {
        $firms = Firm::orderBy('name')->paginate(15);
        $stats = [
            'total' => Firm::count(),
            'active' => Firm::where('status', 'active')->count(),
            'suspended' => Firm::where('status', 'suspended')->count(),
            'audit' => Firm::where('category', 'audit')->count(),
        ];
        return view('admin.firms.index', compact('firms', 'stats'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.firms.create');
    }

    /**
     * Store new firm
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'registration_number' => 'required|unique:firms,registration_number',
            'category' => 'required|in:audit,accounting,tax',
            'status' => 'required|in:active,suspended,cancelled',
            'address' => 'nullable|max:500',
            'city' => 'nullable|max:100',
            'phone' => 'nullable|max:50',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'partners_count' => 'nullable|integer|min:1',
            'managing_partner' => 'nullable|max:255',
            'registration_date' => 'nullable|date',
            'expiry_date' => 'nullable|date',
            'services' => 'nullable|array',
            'logo' => 'nullable|image|max:1024',
            'is_featured' => 'nullable|boolean',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('firms', 'public');
        }

        $validated['is_featured'] = $request->has('is_featured');
        $validated['partners_count'] = $validated['partners_count'] ?? 1;

        Firm::create($validated);

        return redirect()->route('admin.firms.index')->with('success', 'Firm created successfully!');
    }

    /**
     * Show edit form
     */
    public function edit(Firm $firm)
    {
        return view('admin.firms.edit', compact('firm'));
    }

    /**
     * Update firm
     */
    public function update(Request $request, Firm $firm)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'registration_number' => 'required|unique:firms,registration_number,' . $firm->id,
            'category' => 'required|in:audit,accounting,tax',
            'status' => 'required|in:active,suspended,cancelled',
            'address' => 'nullable|max:500',
            'city' => 'nullable|max:100',
            'phone' => 'nullable|max:50',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'partners_count' => 'nullable|integer|min:1',
            'managing_partner' => 'nullable|max:255',
            'registration_date' => 'nullable|date',
            'expiry_date' => 'nullable|date',
            'services' => 'nullable|array',
            'logo' => 'nullable|image|max:1024',
            'is_featured' => 'nullable|boolean',
        ]);

        if ($request->hasFile('logo')) {
            if ($firm->logo) {
                Storage::disk('public')->delete($firm->logo);
            }
            $validated['logo'] = $request->file('logo')->store('firms', 'public');
        }

        $validated['is_featured'] = $request->has('is_featured');

        $firm->update($validated);

        return redirect()->route('admin.firms.index')->with('success', 'Firm updated successfully!');
    }

    /**
     * Delete firm
     */
    public function destroy(Firm $firm)
    {
        if ($firm->logo) {
            Storage::disk('public')->delete($firm->logo);
        }

        $firm->delete();

        return redirect()->route('admin.firms.index')->with('success', 'Firm deleted successfully!');
    }

    // =============================================
    // ADMIN METHODS - Practitioners
    // =============================================

    /**
     * Display admin practitioners listing
     */
    public function practitionersIndex()
    {
        $practitioners = Practitioner::with('firm')->orderBy('name')->paginate(15);
        $stats = [
            'total' => Practitioner::count(),
            'active' => Practitioner::where('status', 'active')->count(),
            'auditors' => Practitioner::where('category', 'public_auditor')->count(),
            'accountants' => Practitioner::where('category', 'public_accountant')->count(),
        ];
        return view('admin.practitioners.index', compact('practitioners', 'stats'));
    }

    /**
     * Show create practitioner form
     */
    public function practitionersCreate()
    {
        $firms = Firm::active()->orderBy('name')->get();
        return view('admin.practitioners.create', compact('firms'));
    }

    /**
     * Store new practitioner
     */
    public function practitionersStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'registration_number' => 'required|unique:practitioners,registration_number',
            'category' => 'required|in:public_auditor,public_accountant,general_accountant,tax_accountant',
            'status' => 'required|in:active,suspended,cancelled,retired',
            'gender' => 'nullable|in:male,female',
            'constituent_body' => 'nullable|max:100',
            'firm_id' => 'nullable|exists:firms,id',
            'firm_name' => 'nullable|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|max:50',
            'registration_date' => 'nullable|date',
            'expiry_date' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        Practitioner::create($validated);

        return redirect()->route('admin.practitioners.index')->with('success', 'Practitioner created successfully!');
    }

    /**
     * Show edit practitioner form
     */
    public function practitionersEdit(Practitioner $practitioner)
    {
        $firms = Firm::active()->orderBy('name')->get();
        return view('admin.practitioners.edit', compact('practitioner', 'firms'));
    }

    /**
     * Update practitioner
     */
    public function practitionersUpdate(Request $request, Practitioner $practitioner)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'registration_number' => 'required|unique:practitioners,registration_number,' . $practitioner->id,
            'category' => 'required|in:public_auditor,public_accountant,general_accountant,tax_accountant',
            'status' => 'required|in:active,suspended,cancelled,retired',
            'gender' => 'nullable|in:male,female',
            'constituent_body' => 'nullable|max:100',
            'firm_id' => 'nullable|exists:firms,id',
            'firm_name' => 'nullable|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|max:50',
            'registration_date' => 'nullable|date',
            'expiry_date' => 'nullable|date',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        $practitioner->update($validated);

        return redirect()->route('admin.practitioners.index')->with('success', 'Practitioner updated successfully!');
    }

    /**
     * Delete practitioner
     */
    public function practitionersDestroy(Practitioner $practitioner)
    {
        $practitioner->delete();

        return redirect()->route('admin.practitioners.index')->with('success', 'Practitioner deleted successfully!');
    }
}