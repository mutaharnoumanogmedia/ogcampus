@props(['episode'])
<div class="card h-100 border-0 shadow-sm episode-card position-relative">
    <a href="{{ route('website.seasons.episodes.show', [
        'season_slug' => $episode->season->slug,
        'episode_slug' => $episode->slug,
    ]) }}"
        class="stretched-link">
        <div class="episode-thumbnail" style="background-image: url('{{ $episode->thumbnail_path }}');">
        </div>
    </a>
    <div class="card-body">
        <div class="d-flex align-items-center " style="justify-content: space-around;">
            <div>
                <span class="fw-medium text-white">Episode
                    {{ $episode->number }}:</span>
                <span class="text-white">{{ $episode->title }}</span>
            </div>
            <div>
                <a href="{{ route('website.seasons.episodes.show', [
                    'season_slug' => $episode->season->slug,
                    'episode_slug' => $episode->slug,
                ]) }}"
                    class="bg-primary text-white border-none btn-play-icon rounded-circle">
                    <i class="ph ph-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
