<?php
// database/seeders/AboutSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'title' => 'About Me',
            'description' => 'I am a passionate Full Stack Developer with 3+ years of experience in building modern web applications. I specialize in Laravel, Vue.js, and modern JavaScript frameworks. I love creating digital experiences that are both beautiful and functional.',
            'experience_years' => 3,
            'projects_completed' => 50,
            'happy_clients' => 40,
            'cv_file' => 'ahmad_cv.pdf',
            'image' => 'about-image.jpg',
            'personal_info' => json_encode([
                'name' => 'Ahmad Farooq',
                'email' => 'ahmad@example.com',
                'phone' => '+92 300 1234567',
                'location' => 'Lahore, Pakistan',
                'freelance' => 'Available'
            ]),
            'education' => json_encode([
                [
                    'degree' => 'Bachelor in Computer Science',
                    'institution' => 'University of Punjab',
                    'year' => '2020'
                ],
                [
                    'degree' => 'Web Development Certification',
                    'institution' => 'PIAIC',
                    'year' => '2021'
                ]
            ]),
            'experience' => json_encode([
                [
                    'company' => 'Tech Solutions Inc.',
                    'position' => 'Senior Laravel Developer',
                    'duration' => '2022 - Present',
                    'description' => 'Developing and maintaining web applications using Laravel and Vue.js'
                ],
                [
                    'company' => 'Digital Agency',
                    'position' => 'Full Stack Developer',
                    'duration' => '2021 - 2022',
                    'description' => 'Built responsive websites and web applications for various clients'
                ]
            ]),
            'is_active' => true,
            'sort_order' => 1
        ]);
    }
}
