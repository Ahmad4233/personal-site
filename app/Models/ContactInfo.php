<?php
// app/Models/ContactInfo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'email',
        'address',
        'social_links',
        'map_location',
        'working_hours',
        'is_active'
    ];

    protected $casts = [
        'social_links' => 'array'
    ];
}
