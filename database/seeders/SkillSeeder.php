<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        $skills = [
            [
                'name' => 'Laravel',
                'icon' => 'fab fa-laravel',
                'color' => '#FF2D20',
                'proficiency' => 90,
                'category' => 'framework',
                'sort_order' => 1,
                'is_featured' => true,
            ],

            [
                'name' => 'React',
                'icon' => 'fab fa-react',
                'color' => '#61DAFB',
                'proficiency' => 60,
                'category' => 'framework',
                'sort_order' => 3,
                'is_featured' => true,
            ],
            [
                'name' => 'PHP',
                'icon' => 'fab fa-php',
                'color' => '#777BB4',
                'proficiency' => 70,
                'category' => 'language',
                'sort_order' => 4,
                'is_featured' => true,
            ],
            [
                'name' => 'JavaScript',
                'icon' => 'fab fa-js',
                'color' => '#F7DF1E',
                'proficiency' => 75,
                'category' => 'language',
                'sort_order' => 5,
                'is_featured' => true,
            ],
            [
                'name' => 'MySQL',
                'icon' => 'fas fa-database',
                'color' => '#4479A1',
                'proficiency' => 82,
                'category' => 'database',
                'sort_order' => 6,
                'is_featured' => true,
            ],
            [
                'name' => 'Tailwind CSS',
                'icon' => 'fas fa-palette',
                'color' => '#06B6D4',
                'proficiency' => 87,
                'category' => 'framework',
                'sort_order' => 7,
                'is_featured' => true,
            ],
            [
                'name' => 'Git',
                'icon' => 'fab fa-git-alt',
                'color' => '#F05032',
                'proficiency' => 85,
                'category' => 'tool',
                'sort_order' => 8,
                'is_featured' => true,
            ],
            [
                'name' => 'Bootstrap',
                'icon' => 'fab fa-bootstrap',
                'color' => '#7952B3',
                'proficiency' => 83,
                'category' => 'framework',
                'sort_order' => 9,
                'is_featured' => true,
            ],
            [
                'name' => 'HTML5',
                'icon' => 'fab fa-html5',
                'color' => '#E34F26',
                'proficiency' => 95,
                'category' => 'language',
                'sort_order' => 10,
                'is_featured' => true,
            ],
            [
                'name' => 'CSS3',
                'icon' => 'fab fa-css3-alt',
                'color' => '#1572B6',
                'proficiency' => 90,
                'category' => 'language',
                'sort_order' => 11,
                'is_featured' => true,
            ],

        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
