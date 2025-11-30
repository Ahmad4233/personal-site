<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_position',
        'client_company',
        'testimonial',
        'rating',
        'client_image',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_active' => 'boolean'
    ];

    public function getClientImageUrlAttribute()
    {
        return $this->client_image ? asset('storage/' . $this->client_image) : asset('images/default-avatar.jpg');
    }
}
