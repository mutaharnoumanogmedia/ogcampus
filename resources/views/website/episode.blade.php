<x-guest-layout>

    <div class="poition-relative">
        <div class="iq-main-slider site-video position-relative" style="background: url('{{ $episode->thumbnail_path }}') center center/cover no-repeat; height: 100%;">
           
        </div>

        <div class="movie-detail-part position-relative">
            <div class="trending-info pt-0 pb-0">
                <div class="details-parts">
                    <ul class="p-0 mb-2 list-inline d-flex flex-wrap movie-tag">
                        <li class="trending-list"><a
                                href="#">{{ $episode->season->series->genre->name ?? '' }}</a>
                        </li>
                        <li class="trending-list"><a href="#">Season
                                {{ $episode->season->season_number ?? '' }}</a>
                        </li>
                    </ul>
                    <div class="d-block d-lg-flex align-items-center">
                        <h3
                            class="trending-text fw-bold texture-text text-uppercase my-0 fadeInLeft animated d-inline-block">
                            {{ $episode->title }}
                        </h3>
                    </div>
                    <div class="movie-description mt-3 mb-4" id="readmore-wrapper">
                        <p class="line-count-3 RightAnimate-two mb-0">{{ $episode->description }}</p>
                    </div>
                    <ul class="list-inline mx-0 p-0 d-flex align-items-center flex-wrap gap-3 movie-metalist">
                        <li>
                            <div class="d-flex align-items-center gap-1">
                                <i class="ph ph-eye"></i>
                                <span>{{ $episode->views }} views</span>
                            </div>
                        </li>
                        <li>
                            <span class="d-flex align-items-center gap-1">
                                <span class="d-flex align-items-center justify-content-center"><i
                                        class="ph ph-clock"></i></span>
                                {{ $episode->runtime ? gmdate('H:i', $episode->runtime) : 'N/A' }}
                            </span>
                        </li>
                        <li>
                            <span class="d-flex align-items-center gap-1">
                                <span class="fw-medium">
                                    {{ $episode->published_at ? $episode->published_at->format('M Y') : '' }}
                                </span>
                            </span>
                        </li>
                    </ul>
                    <div class="video-language d-flex align-items-center gap-1 mt-2">
                        <i class="ph ph-translate"></i>
                        <ul class="list-inline m-0 p-0 d-inline-flex align-items-center gap-3 flex-wrap">
                            <li>
                                <small
                                    class="text-capitalize">{{ $episode->season->series->original_language ?? 'N/A' }}</small>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center flex-wrap gap-3 gap-md-4 my-5">
                        <div class="iq-play-button iq-button">
                            <a href="#my-video" id="playButton" data-bs-toggle="modal" data-bs-target="#videoModal"
                                class="btn btn-primary w-100 rounded d-flex align-items-center justify-content-center gap-2 lh-1">
                                <span><i class="ph-fill ph-play"></i></span>
                                <span>Start Watching</span>
                            </a>
                        </div>
                        <div class="watchlist-button-wrapper">
                            <a href="#" class="btn btn-secondary border rounded">
                                <span class="d-flex align-items-center justify-content-center gap-2">
                                    <span class="fw-semibold"><i class="ph ph-plus"></i></span>
                                    <span class="fw-semibold">Watch List</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                @foreach ($otherEpisodes as $episode)
                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm episode-card position-relative">
                            <a href="{{ route('website.seasons.episodes.show', [
                                'season_slug' => $episode->season->slug,
                                'episode_slug' => $episode->slug,
                            ]) }}"
                                class="stretched-link">
                                <div class="episode-thumbnail"
                                    style="background: url('{{ $episode->thumbnail_path }}') center center/cover no-repeat; height: 200px; border-radius: .5rem .5rem 0 0;">
                                </div>
                            </a>
                            <div class="card-body d-flex flex-column justify-content-end p-3"
                                style="background: rgba(0,0,0,0.7); border-radius: 0 0 .5rem .5rem;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="fw-medium text-white">Episode
                                            {{ $episode->number }}:</span>
                                        <span class="text-white">{{ $episode->title }}</span>
                                    </div>
                                    <a href="{{ route('website.seasons.episodes.show', [
                                        'season_slug' => $episode->season->slug,
                                        'episode_slug' => $episode->slug,
                                    ]) }}"
                                        class="bg-primary text-white border-none"
                                        style="width: 50px; height: 40px;border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <i class="ph ph-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">

                    @foreach ($episode->media as $media)
                        @if ($media->type === 'video')
                            <video id="my-video" poster="{{ $episode->thumbnail_path ?? '' }}"
                                class="my-video video-js vjs-big-play-centered w-100" controls preload="auto">
                                <source src="{{ asset($media->file_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @elseif($media->type === 'external_url')
                            <a href="{{ $media->external_url }}" target="_blank">External Media</a>
                        @elseif($media->type === 'embed')
                            {!! $media->embed_html !!}
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const playBtn = document.querySelector('#playButton');
                const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
                playBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    videoModal.show();
                    setTimeout(() => {
                        document.getElementById('modal-video').play();
                    }, 300);
                });
                document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
                    const modalVideo = document.getElementById('modal-video');
                    modalVideo.pause();
                    modalVideo.currentTime = 0;
                });
            });
        </script>
    @endpush
</x-guest-layout>
