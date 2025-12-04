<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'registration_number',
        'category',
        'status',
        'gender',
        'constituent_body',
        'firm_id',
        'firm_name',
        'email',
        'phone',
        'registration_date',
        'expiry_date',
        'is_featured',
    ];

    protected $casts = [
        'registration_date' => 'date',
        'expiry_date' => 'date',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the firm this practitioner belongs to
     */
    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }

    /**
     * Scope for active practitioners
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'active' => 'bg-green-100 text-green-700',
            'suspended' => 'bg-yellow-100 text-yellow-700',
            'cancelled' => 'bg-red-100 text-red-700',
            'retired' => 'bg-gray-100 text-gray-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    /**
     * Get status label
     */
    public function getStatusLabelAttribute()
    {
        return ucfirst($this->status);
    }

    /**
     * Get category badge color
     */
    public function getCategoryColorAttribute()
    {
        return match($this->category) {
            'public_auditor' => 'bg-purple-100 text-purple-700',
            'public_accountant' => 'bg-blue-100 text-blue-700',
            'general_accountant' => 'bg-green-100 text-green-700',
            'tax_accountant' => 'bg-orange-100 text-orange-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    /**
     * Get category label
     */
    public function getCategoryLabelAttribute()
    {
        return match($this->category) {
            'public_auditor' => 'Public Auditor',
            'public_accountant' => 'Public Accountant',
            'general_accountant' => 'General Accountant',
            'tax_accountant' => 'Tax Accountant',
            default => 'Practitioner',
        };
    }

    /**
     * Get display firm name
     */
    public function getDisplayFirmAttribute()
    {
        return $this->firm?->name ?? $this->firm_name ?? 'Independent';
    }

    /**
     * Check if practitioner is valid (not expired)
     */
    public function getIsValidAttribute()
    {
        if (!$this->expiry_date) return true;
        return $this->expiry_date->isFuture();
    }
}