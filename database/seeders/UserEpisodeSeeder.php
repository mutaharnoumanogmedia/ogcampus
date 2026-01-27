<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Video;
use App\Models\UserEpisode;

class UserEpisodeSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'user');
        })->get();

        $episodeIds = Episode::inRandomOrder()->pluck('id')->toArray();

        foreach ($users as $user) {
            $episodes = collect($episodeIds)->shuffle()->take(rand(6, 7));
            foreach ($episodes as $episodeId) {
                $watchedSeconds = rand(60, 3600); // 1 min to 1 hour
                $progressPercent = rand(10, 100);
                $isCompleted = $progressPercent === 100;
                UserEpisode::create([
                    'user_id' => $user->id,
                    'episode_id' => $episodeId,
                    'watched_seconds' => $watchedSeconds,
                    'progress_percent' => $progressPercent,
                    'is_completed' => $isCompleted,
                    'completed_at' => $isCompleted ? now() : null,
                ]);
            }
        }
    }
}
