<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'inquiry_type', 'subject', 'message', 'ip_address',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];
}