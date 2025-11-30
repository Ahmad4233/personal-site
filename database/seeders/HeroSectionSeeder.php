<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    public function run()
    {
        HeroSection::create([
            'title' => 'Hi, I\'m Ahmad Farooq',
            'highlight_text' => 'Ahmad Farooq',
            'description' => 'Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies. I create digital experiences that are fast, responsive, and user-friendly.',
            'image' => 'Ahmad.jpeg', // ✅ Exact image name
            'cv_file' => null,
            'button1_text' => 'View My Projects',
            'button1_link' => '#portfolio',
            'button2_text' => 'Download CV',
            'button2_link' => '#',
            'social_links' => [
                'github' => 'https://github.com/ahmadfarooq',
                'linkedin' => 'https://linkedin.com/in/ahmadfarooq',
                'twitter' => 'https://twitter.com/ahmadfarooq',
            ],
            'is_active' => true,
        ]);
    }
}
