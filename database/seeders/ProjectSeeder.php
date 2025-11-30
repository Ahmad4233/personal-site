<?php
// database/seeders/ProjectSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Pehle existing data clear karein
        Project::truncate();

        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'description' => 'A fully featured e-commerce platform with admin panel, payment integration, and inventory management. Built with modern technologies to provide seamless shopping experience.',
                'short_description' => 'Modern e-commerce solution with Laravel & Vue.js',
                'image' => 'ecommerce-project.jpg',
                'technologies' => json_encode(['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS', 'Stripe', 'Redis']),
                'project_url' => 'https://demo-ecommerce.example.com',
                'github_url' => 'https://github.com/ahmad/ecommerce-platform',
                'client' => 'Tech Store Inc.',
                'project_date' => Carbon::now()->subMonths(2),
                'category' => 'web',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Task Management App',
                'slug' => 'task-management-app',
                'description' => 'A collaborative task management application with real-time updates, team collaboration features, and project tracking. Perfect for remote teams.',
                'short_description' => 'Team collaboration app with real-time features',
                'image' => 'task-app.jpg',
                'technologies' => json_encode(['Laravel', 'Livewire', 'MySQL', 'Tailwind CSS', 'WebSockets', 'Redis']),
                'project_url' => 'https://taskapp.demo.com',
                'github_url' => 'https://github.com/ahmad/task-management',
                'client' => 'Internal Project',
                'project_date' => Carbon::now()->subMonths(1),
                'category' => 'web',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'Portfolio Website',
                'slug' => 'portfolio-website',
                'description' => 'A modern portfolio website with dynamic content management, responsive design, and SEO optimization. Built to showcase creative work effectively.',
                'short_description' => 'Dynamic portfolio with admin panel',
                'image' => 'portfolio-design.jpg',
                'technologies' => json_encode(['Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS', 'Alpine.js']),
                'project_url' => 'https://ahmadfarooq.demo',
                'github_url' => 'https://github.com/ahmad/portfolio-laravel',
                'client' => 'Personal Project',
                'project_date' => Carbon::now()->subMonths(3),
                'category' => 'web',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'title' => 'Restaurant Booking System',
                'slug' => 'restaurant-booking-system',
                'description' => 'A comprehensive restaurant reservation system with table management, online bookings, and customer notifications.',
                'short_description' => 'Online reservation system for restaurants',
                'image' => 'restaurant-booking.jpg',
                'technologies' => json_encode(['Laravel', 'Vue.js', 'MySQL', 'Bootstrap', 'Payment Gateway']),
                'project_url' => 'https://restaurant-booking.demo',
                'github_url' => 'https://github.com/ahmad/restaurant-system',
                'client' => 'Foodie Restaurants',
                'project_date' => Carbon::now()->subMonths(4),
                'category' => 'web',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'title' => 'Blog Platform',
                'slug' => 'blog-platform',
                'description' => 'A feature-rich blogging platform with user management, categories, tags, and social sharing capabilities.',
                'short_description' => 'Modern blogging platform with CMS',
                'image' => 'blog-platform.jpg',
                'technologies' => json_encode(['Laravel', 'React', 'MySQL', 'Tailwind CSS', 'API']),
                'project_url' => 'https://blog-platform.demo',
                'github_url' => 'https://github.com/ahmad/blog-platform',
                'client' => 'Content Creators Inc.',
                'project_date' => Carbon::now()->subMonths(5),
                'category' => 'web',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'title' => 'Mobile Fitness App',
                'slug' => 'mobile-fitness-app',
                'description' => 'A cross-platform mobile application for fitness tracking, workout plans, and progress monitoring.',
                'short_description' => 'Fitness tracking mobile application',
                'image' => 'fitness-app.jpg',
                'technologies' => json_encode(['React Native', 'Node.js', 'MongoDB', 'Firebase', 'API']),
                'project_url' => 'https://fitness-app.demo',
                'github_url' => 'https://github.com/ahmad/fitness-app',
                'client' => 'FitLife Studios',
                'project_date' => Carbon::now()->subMonths(6),
                'category' => 'mobile',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 6
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        $this->command->info('Projects seeded successfully with dummy data!');
    }
}
