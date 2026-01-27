<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;
use Illuminate\Support\Facades\DB;

class EpisodeViewSeeder extends Seeder
{
    public function run(): void
    {
        $episodes = Episode::all();

        foreach ($episodes as $episode) {
            $views = rand(100, 800); // Random number of views per episode
            for ($i = 0; $i < $views; $i++) {
                DB::table('episode_views')->insert([
                    'episode_id' => $episode->id,
                    'viewer_ip' => fake()->ipv4(),
                    'viewed_at' => now()->subMinutes(rand(0, 10000)),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}