<?php
// app/Models/About.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'experience_years',
        'projects_completed',
        'happy_clients',
        'cv_file',
        'image',
        'personal_info',
        'education',
        'experience',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'personal_info' => 'array',
        'education' => 'array',
        'experience' => 'array'
    ];
}
