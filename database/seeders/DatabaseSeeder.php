<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            HeroSectionSeeder::class,
            SkillSeeder::class,
                    TestimonialSeeder::class,
                          AboutSeeder::class,
                            ProjectSeeder::class,
                             ContactInfoSeeder::class,




        ]);
    }
}
