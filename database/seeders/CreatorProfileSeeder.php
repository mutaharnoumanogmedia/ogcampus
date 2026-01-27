<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatorProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $images = [
            asset('demo/ed (1).jpg'),
            asset('demo/ed (2).jpg'),
            asset('demo/ed (3).jpg'),
            asset('demo/ed (4).jpg'),
            asset('demo/ed (5).jpg'),
            asset('demo/ed (6).jpg'),
            asset('demo/ed (7).jpg'),
            asset('demo/ed (8).jpg'),
            asset('demo/ed (9).jpg'),
            asset('demo/ed (10).jpg'),
            asset('demo/ed (11).jpg'),
            asset('demo/ed (12).jpg'),
            asset('demo/ed (13).jpg'),
            asset('demo/ed (14).jpg'),
            asset('demo/ed (15).jpg'),

        ];

        $creators = \App\Models\User::role('creator')->get();
        foreach ($creators as $index => $creator) {
            \App\Models\CreatorProfile::updateOrCreate(
                ['user_id' => $creator->id],
                [
                    'bio' => fake()->paragraph(),
                    'expertise' => fake()->words(3, true),
                    'website' => fake()->url(),
                    'profile_image' => $images[$index % count($images)],
                    'linkedin' => 'https://www.linkedin.com/in/' . fake()->userName(),
                    'twitter' => 'https://twitter.com/' . fake()->userName(),
                    'is_active' => true,
                ]
            );
        }
    }
}
