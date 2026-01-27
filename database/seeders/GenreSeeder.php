<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Health & Energy Center',
                'description' => 'Content focused on physical health, vitality, fitness, and overall energy.',
            ],
            [
                'name' => 'Life Skills Academy',
                'description' => 'Practical life skills for personal growth, productivity, relationships and mindset.',
            ],
            [
                'name' => 'Business Hall',
                'description' => 'Entrepreneurship, leadership, operations, and building scalable businesses.',
            ],
            [
                'name' => 'Finance & Wealth Institute',
                'description' => 'Money, investing, wealth-building, and financial literacy content.',
            ],
            [
                'name' => 'AI & Digital Sphere',
                'description' => 'Artificial intelligence, digital skills, technology and the future of work.',
            ],
        ];

        foreach ($genres as $data) {
            Genre::updateOrCreate(
                ['slug' => Str::slug($data['name'])],
                [
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'is_active' => true,
                ]
            );
        }
    }
}


