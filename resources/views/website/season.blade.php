@section('title', $season->title . ' - Season Details - baaboo Campus')
@section('meta_description', $season->description ?? 'View episodes and details for ' . $season->title . ' on baaboo
    Campus.')
@section('og_title', $season->title . ' - Season Details - baaboo Campus')
@section('og_description', $season->description ?? 'View episodes and details for ' . $season->title . ' on baaboo
    Campus.')

    <x-guest-layout>
        <!-- Season Header Section -->
        <section class="section-padding season-detail-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('website.index') }}" class="text-white">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('website.seasons.index') }}"
                                        class="text-white">Seasons</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">{{ $season->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 mb-4 mb-md-0">
                        <div class="season-poster-wrapper">
                            @if ($season->poster_path)
                                <img src="{{ asset('storage/' . $season->poster_path) }}" alt="{{ $season->title }}"
                                    class="img-fluid rounded w-100 shadow-lg" style="max-height: 500px; object-fit: cover;">
                            @else
                                <div class="season-poster-placeholder bg-gradient-primary d-flex align-items-center justify-content-center rounded shadow-lg"
                                    style="min-height: 500px;">
                                    <div class="text-center text-white">
                                        <i class="ph ph-play-circle fs-1 mb-3"></i>
                                        <h4>Season {{ $season->season_number }}</h4>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-7">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-primary fs-6">Season {{ $season->season_number }}</span>
                            @if ($season->series)
                                <span class="badge bg-secondary">{{ $season->series->title }}</span>
                            @endif
                        </div>

                        <h1 class="main-title mb-3">{{ $season->title }}</h1>

                        @if ($season->description)
                            <p class="text-body lead mb-4">{{ $season->description }}</p>
                        @endif

                        <div class="d-flex flex-wrap gap-3 mb-4">
                            @if ($season->episodes->count() > 0)
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ph ph-play-circle text-primary fs-5"></i>
                                    <span class="text-white">{{ $season->episodes->count() }} Episodes</span>
                                </div>
                            @endif
                            @if ($season->published_at)
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ph ph-calendar text-primary fs-5"></i>
                                    <span class="text-white">Released {{ $season->published_at->format('F Y') }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary btn-lg">
                                <i class="ph ph-play me-2"></i>Start Watching
                            </button>
                            <button class="btn btn-outline-primary btn-lg">
                                <i class="ph ph-bookmark me-2"></i>Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Episodes Section -->
        <section class="section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="section-title mb-4">Episodes</h3>
                    </div>
                </div>

                @if ($season->episodes->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="episodes-list">
                                @foreach ($season->episodes as $episode)
                                    <div class="iq-card iq-card-block iq-card-stretch mb-3 episode-item">
                                        <div class="iq-card-body p-0">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-2 col-4">
                                                    <a href="#" class="d-block position-relative">
                                                        @if ($episode->thumbnail_path)
                                                            <img src="{{ asset('storage/' . $episode->thumbnail_path) }}"
                                                                alt="{{ $episode->title }}"
                                                                class="img-fluid w-100 rounded-start"
                                                                style="height: 120px; object-fit: cover;">
                                                        @else
                                                            <div class="episode-thumbnail-placeholder bg-gradient-primary d-flex align-items-center justify-content-center rounded-start"
                                                                style="height: 120px;">
                                                                <i class="ph ph-play-circle fs-3 text-white"></i>
                                                            </div>
                                                        @endif
                                                        <div
                                                            class="episode-play-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                            <i class="ph ph-play-circle fs-1 text-white"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-10 col-8">
                                                    <div class="p-3">
                                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                                            <div>
                                                                <h5 class="mb-1">
                                                                    <a href="#" class="text-white">
                                                                        Episode {{ $episode->episode_number }}:
                                                                        {{ $episode->title }}
                                                                    </a>
                                                                </h5>
                                                                @if ($episode->description)
                                                                    <p class="text-body small mb-0">
                                                                        {{ Str::limit($episode->description, 150) }}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                                            @if ($episode->runtime)
                                                                <span class="text-body small">
                                                                    <i
                                                                        class="ph ph-clock me-1"></i>{{ gmdate('H:i', $episode->runtime) }}
                                                                </span>
                                                            @endif
                                                            @if ($episode->views > 0)
                                                                <span class="text-body small">
                                                                    <i
                                                                        class="ph ph-eye me-1"></i>{{ number_format($episode->views) }}
                                                                    views
                                                                </span>
                                                            @endif
                                                            @if ($episode->is_free)
                                                                <span class="badge bg-success">Free</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="ph ph-play-circle fs-1 text-muted mb-3"></i>
                                <h4 class="text-white mb-2">No Episodes Available</h4>
                                <p class="text-muted">Episodes will be available soon.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <style>
            .season-detail-header {
                background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .season-poster-placeholder {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .episode-item {
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .episode-item:hover {
                transform: translateX(5px);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            }

            .episode-thumbnail-placeholder {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .episode-play-overlay {
                background: rgba(0, 0, 0, 0.5);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .episode-item:hover .episode-play-overlay {
                opacity: 1;
            }
        </style>
    </x-guest-layout>
