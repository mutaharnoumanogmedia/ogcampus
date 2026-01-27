<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Models\EpisodeMedia;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeriesFullSeeder extends Seeder
{
    public function run(): void
    {
        $postersArrayPaths = [
            asset('thumbnails/i (1).jpg'),
            asset('thumbnails/i (2).jpg'),
            asset('thumbnails/i (3).jpg'),
            asset('thumbnails/i (4).jpg'),
            asset('thumbnails/i (5).jpg'),
            asset('thumbnails/i (6).jpg'),
            asset('thumbnails/i (7).jpg'),
            asset('thumbnails/i (8).jpg'),
            asset('thumbnails/i (9).jpg'),
            asset('thumbnails/i (10).jpg'),
            asset('thumbnails/i (11).jpg'),
            asset('thumbnails/i (12).jpg'),
            asset('thumbnails/i (13).jpg'),
            asset('thumbnails/i (14).jpg'),
        ];
        // Get all creator users
        $creators = User::role('creator')->get();
        $genres = Genre::inRandomOrder()->get();

        foreach ($creators as $creator) {
            for ($i = 1; $i <= 2; $i++) {
                $genre = $genres->random();
                $seriesTitle = $creator->name . " Series $i";
                $series = Series::create([
                    'creator_id' => $creator->id,
                    'genre_id' => $genre->id,
                    'title' => $seriesTitle,
                    'slug' => Str::slug($seriesTitle . '-' . uniqid()),
                    'description' => 'Demo series for ' . $creator->name,
                    'status' => 'published',
                    'is_featured' => rand(0, 1) === 1,
                    'is_free' => false,
                    'access_level' => 'subscriber',
                    'poster_path' => $postersArrayPaths[array_rand($postersArrayPaths)]
                ]);

                // 1 season per series
                $seasonTitle = $seriesTitle . ' Season 1';
                $season = Season::create([
                    'series_id' => $series->id,
                    'season_number' => 1,
                    'title' => $seasonTitle,
                    'slug' => Str::slug($seasonTitle . '-' . uniqid()),
                    'status' => 'published',
                    'published_at' => now(),
                    'poster_path' => $postersArrayPaths[array_rand($postersArrayPaths)]
                ]);

                // episodes per season
                $episodeCount = rand(5, 7);
                for ($ep = 1; $ep <= $episodeCount; $ep++) {
                    $epTitle = $seasonTitle . " Episode $ep";
                    $episode = Episode::create([
                        'season_id' => $season->id,
                        'episode_number' => $ep,
                        'title' => $epTitle,
                        'slug' => Str::slug($epTitle . '-' . uniqid()),
                        'status' => 'published',
                        'is_free' => $ep < 3, // First two episodes free
                        'runtime' => rand(600, 1800), // 10-30 min,
                        'published_at' => now(),
                        'thumbnail_path' => $postersArrayPaths[array_rand($postersArrayPaths)]
                    ]);

                    EpisodeMedia::create([
                        'episode_id' => $episode->id,
                        'type' => 'video',
                        'title' => $epTitle . ' Video',
                        'storage_disk' => 's3',
                        'file_path' => 'demo/path/' . uniqid() . '.mp4',
                        'duration' => rand(900, 1200), // 15-20 min
                        'is_downloadable' => false,
                    ]);
                }
            }
        }
    }
}
