<?php
// database/seeders/ContactInfoSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactInfo;

class ContactInfoSeeder extends Seeder
{
    public function run()
    {
        ContactInfo::create([
            'phone' => '+92 300 1234567',
            'email' => 'ahmad@example.com',
            'address' => 'Lahore, Pakistan',
            'social_links' => json_encode([
                'github' => 'https://github.com/ahmadfarooq',
                'linkedin' => 'https://linkedin.com/in/ahmadfarooq',
                'twitter' => 'https://twitter.com/ahmadfarooq',
                'facebook' => 'https://facebook.com/ahmadfarooq'
            ]),
            'map_location' => 'https://maps.google.com/?q=Lahore,Pakistan',
            'working_hours' => 'Mon - Fri: 9:00 AM - 6:00 PM',
            'is_active' => true
        ]);
    }
}
