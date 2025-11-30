<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'highlight_text',
        'description',
        'image',
        'cv_file',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
        'social_links',
        'is_active'
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean'
    ];

    // ✅ YEH METHOD ADD KAREIN YA UPDATE KAREIN
    public function getImageUrlAttribute()
    {
        // Direct public folder se image load karega
        return $this->image ? asset($this->image) : asset('images/default-avatar.jpg');
    }

    public function getCvUrlAttribute()
    {
        return $this->cv_file ? asset('storage/' . $this->cv_file) : null;
    }
}
