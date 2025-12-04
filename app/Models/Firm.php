<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'registration_number',
        'category',
        'status',
        'address',
        'city',
        'phone',
        'email',
        'website',
        'partners_count',
        'managing_partner',
        'registration_date',
        'expiry_date',
        'services',
        'logo',
        'is_featured',
    ];

    protected $casts = [
        'services' => 'array',
        'registration_date' => 'date',
        'expiry_date' => 'date',
        'is_featured' => 'boolean',
    ];

    /**
     * Get practitioners belonging to this firm
     */
    public function practitioners()
    {
        return $this->hasMany(Practitioner::class);
    }

    /**
     * Scope for active firms
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
            'audit' => 'bg-purple-100 text-purple-700',
            'accounting' => 'bg-blue-100 text-blue-700',
            'tax' => 'bg-orange-100 text-orange-700',
            default => 'bg-gray-100 text-gray-700',
        };
    }

    /**
     * Get category label
     */
    public function getCategoryLabelAttribute()
    {
        return match($this->category) {
            'audit' => 'Audit Firm',
            'accounting' => 'Accounting Firm',
            'tax' => 'Tax Firm',
            default => 'Firm',
        };
    }

    /**
     * Check if firm is valid (not expired)
     */
    public function getIsValidAttribute()
    {
        if (!$this->expiry_date) return true;
        return $this->expiry_date->isFuture();
    }
}