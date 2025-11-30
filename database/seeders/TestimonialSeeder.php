<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'CEO',
                'client_company' => 'TechSolutions Inc.',
                'testimonial' => 'Ahmad delivered an outstanding web application that exceeded our expectations. His attention to detail and technical expertise are remarkable.',
                'rating' => 5,
                'client_image' => null,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'Michael Chen',
                'client_position' => 'Product Manager',
                'client_company' => 'StartUpGrid',
                'testimonial' => 'Working with Ahmad was a game-changer for our project. He transformed our complex requirements into a seamless user experience.',
                'rating' => 5,
                'client_image' => null,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Emily Davis',
                'client_position' => 'Marketing Director',
                'client_company' => 'BrandCraft',
                'testimonial' => 'Ahmad\'s ability to understand our vision and bring it to life through code is exceptional. Highly recommended for any web development project!',
                'rating' => 5,
                'client_image' => null,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'client_name' => 'Robert Wilson',
                'client_position' => 'CTO',
                'client_company' => 'InnovateLabs',
                'testimonial' => 'Professional, punctual, and highly skilled. Ahmad delivered a robust Laravel application that has been running flawlessly.',
                'rating' => 5,
                'client_image' => null,
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
