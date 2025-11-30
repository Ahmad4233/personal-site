<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'color',
        'proficiency',
        'category',
        'sort_order',
        'is_featured'
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'is_featured' => 'boolean'
    ];

    // Get Font Awesome icon class
    public function getIconClassAttribute()
    {
        if ($this->icon) {
            return $this->icon;
        }

        // Default icons based on skill name
        $defaultIcons = [
            'laravel' => 'fab fa-laravel',
            'vue' => 'fab fa-vuejs',
            'react' => 'fab fa-react',
            'php' => 'fab fa-php',
            'javascript' => 'fab fa-js',
            'python' => 'fab fa-python',
            'html' => 'fab fa-html5',
            'css' => 'fab fa-css3-alt',
            'bootstrap' => 'fab fa-bootstrap',
            'git' => 'fab fa-git-alt',
            'github' => 'fab fa-github',
            'mysql' => 'fas fa-database',
            'mongodb' => 'fas fa-database',
            'nodejs' => 'fab fa-node-js',
            'aws' => 'fab fa-aws',
            'docker' => 'fab fa-docker',
        ];

        $lowerName = strtolower($this->name);
        foreach ($defaultIcons as $key => $icon) {
            if (str_contains($lowerName, $key)) {
                return $icon;
            }
        }

        return 'fas fa-code'; // Default icon
    }
}
