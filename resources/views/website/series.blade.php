@section('title', $series->title . ' - baaboo Campus')
@section('meta_description', 'Explore the "' . $series->title . '" series on baaboo Campus. ' . ($series->description ??
    'Find curated content and start learning today.'))
@section('og_title', $series->title . ' - baaboo Campus')
@section('og_description', 'Explore the "' . $series->title . '" series on baaboo Campus. ' . ($series->description ??
    'Find curated content and start learning today.'))


    <x-guest-layout>

        <div class="poition-relative">
            <div class="iq-main-slider site-video position-relative">
                <video id="my-video" poster="{{ $series->banner_path ?? '' }}"
                    class="my-video video-js vjs-big-play-centered w-100" loop autoplay muted preload="auto"
                    data-setup='{
                  "techOrder": ["youtube"],
                  "sources": [{
                      "type": "video/youtube",
                      "src": "https://www.youtube.com/watch?v=spGSAeqxVUc"
                  }],
                  "youtube": {         
                      "modestbranding": 1,
                      "rel": 0,
                      "showinfo": 0,
                      "autoplay": 1
                  },
                  "fullscreen": true
              }'>
                </video>
            </div>


            <div class="movie-detail-part position-relative">
                <div class="trending-info pt-0 pb-0">
                    <div class="details-parts">
                        <!-- Movie Description Start-->
                        <ul class="p-0 mb-2 list-inline d-flex flex-wrap movie-tag">
                            <li class="trending-list"><a class=""
                                    href="{{ route('website.browse.genre', ['slug' => $series->genre->slug]) }}">{{ $series->genre->name }}</a></li>

                        </ul>
                        <div class="d-block d-lg-flex align-items-center">
                            <h3 class="trending-text fw-bold texture-text text-uppercase my-0 fadeInLeft animated d-inline-block"
                                data-animation-in="fadeInLeft" data-delay-in="0.6"
                                style="opacity: 1; animation-delay: 0.6s">
                                {{ $series->title }}
                            </h3>
                        </div>
                        <div class="movie-description mt-3 mb-4" id="readmore-wrapper">
                            <p class="line-count-3 RightAnimate-two mb-0">{{ $series->description ?? '' }}</p>
                            <div class="iq-blog-meta-cat-tag iq-blogtag readmore-tags">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#viewMoreDataModal"
                                    class="position-relative">Read More</a>
                            </div>
                        </div>

                        <ul class="list-inline mb-0 mx-0 p-0 d-flex align-items-center flex-wrap gap-3 movie-metalist">

                            <!-- Movie Releas data  -->
                            <li>
                                <span class="d-flex align-items-center gap-1">
                                    <span class="fw-medium">
                                        {{ $series->release_year }} </span>
                                </span>
                            </li>

                            <!-- Movie Runtime  -->
                            <li>
                                <span class="d-flex align-items-center gap-1">
                                    <span class="d-flex align-items-center justify-content-center"><i
                                            class="ph ph-clock"></i></span>
                                    {{ gmdate('H \h i \m', $series->series_total_duration) }} </span>
                            </li>

                            <!-- Movie Views  -->
                            <li>
                                <div class="d-flex align-items-center gap-1">
                                    <i class="ph ph-eye"></i>
                                    <span class="">{{ $series->views }} views</span>
                                </div>
                            </li>

                           

                            <!-- Movie Censor Rating -->
                            <li>
                                <span
                                    class="badge bg-secondary d-flex align-items-center gap-2 fw-bold font-size-12 movie-type-tag">
                                    <span>
                                        {{ $series->age_rating ?? 'NC-17' }} </span>
                                </span>
                            </li>

                        </ul>

                        <div class="d-flex align-items-center flex-wrap gap-3 gap-md-4 my-5">
                            @if ($series->access_level == 'subscriber')
                                <div class="iq-play-button iq-button">
                                    <a href="{{ route('website.purchase.series', ['series_slug' => $series->slug]) }}"
                                        class="btn btn-primary w-100 rounded d-flex align-items-center justify-content-center gap-2 lh-1">
                                        <span><i class="ph-fill ph-crown fs-6"></i></span>
                                        <span>
                                            {{ __('purchase_to_watch') }}
                                            <i class="ph ph-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            @else
                                <div class="iq-play-button iq-button">
                                    <a href="{{ route('website.series.watch', ['series_slug' => $series->slug]) }}"
                                        class="btn btn-primary w-100 rounded d-flex align-items-center justify-content-center gap-2 lh-1">
                                        <span><i class="ph ph-play-fill fs-6"></i></span>
                                        <span>Watch Now</span>
                                    </a>
                                </div>
                            @endif

                            <div class="watchlist-button-wrapper">

                                <a href="./watchlist-detail.html" class="btn btn-secondary border rounded"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-original-title="Add to watchlist" data-bs-trigger="focus">
                                    <span class="d-flex align-items-center justify-content-center gap-2">
                                        <span class="fw-semibold"><i class="ph ph-plus"></i></span>
                                        <span class="fw-semibold">Watch List</span>
                                    </span>
                                </a>
                            </div>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <button type="button" class="action-btn btn btn-secondary border" data-bs-toggle="modal"
                                    data-bs-target="#likeModal" id="like-toggle">
                                    <span id="like-movies">
                                        <span class="h-100 w-100 d-block" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Like">
                                            <i class="ph ph-heart heart-icon"></i>
                                        </span>
                                    </span>
                                </button>

                                <button type="button" class="action-btn btn btn-secondary border" data-bs-toggle="modal"
                                    data-bs-target="#shareModal">
                                    <span class="h-100 w-100 d-block" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Share">
                                        <i class="ph ph-share-network"></i>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-secondary action-btn border" data-bs-toggle="modal"
                                    data-bs-target="#playlistModal">
                                    <span class="h-100 w-100 d-block" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Playlist">
                                        <i class="ph ph-playlist"></i>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-secondary action-btn border" data-bs-toggle="modal"
                                    data-bs-target="#downloadModal">
                                    <span class="h-100 w-100 d-block" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Download">
                                        <i class="ph ph-download-simple"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <!-- Movie Description End -->

                        <!-- Modals -->
                        <div class="modal fade view-more-data-modal" id="playlistModal" tabindex="-1" aria-modal="true"
                            role="dialog">
                            <div class="modal-dialog modal-dialog-centered share-modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Select Playlist</h5>
                                        <button type="button" class="btn-close me-0" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-0">
                                        <div class="playlist-modal-content">
                                            <div class="form-check"><input id="26"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="26" data-post_id="32" data-post_type="movie"><label
                                                    for="26">222</label>
                                            </div>
                                            <div class="form-check"><input id="14"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="14" data-post_id="32" data-post_type="movie"><label
                                                    for="14">90s
                                                    Throwback</label></div>
                                            <div class="form-check"><input id="11"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="11" data-post_id="32" data-post_type="movie"
                                                    checked=""><label for="11">Action</label>
                                            </div>
                                            <div class="form-check"><input id="10"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="10" data-post_id="32" data-post_type="movie"
                                                    checked=""><label for="10">Blockbuster</label>
                                            </div>
                                            <div class="form-check"><input id="9"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="9" data-post_id="32" data-post_type="movie"><label
                                                    for="9">Dramas</label>
                                            </div>
                                            <div class="form-check"><input id="13"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="13" data-post_id="32" data-post_type="movie"><label
                                                    for="13">Horror</label></div>
                                            <div class="form-check"><input id="15"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="15" data-post_id="32" data-post_type="movie"><label
                                                    for="15">Road Trip
                                                    Movies</label>
                                            </div>
                                            <div class="form-check"><input id="12"
                                                    class="st_manage_playlist form-check-input" type="checkbox"
                                                    data-playlist_id="12" data-post_id="32" data-post_type="movie"><label
                                                    for="12">Romantic
                                                    ...</label></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 p-4">
                                        <button type="button" class="playlist-action-btn btn btn-secondary border"
                                            data-bs-toggle="modal" data-bs-target="#creatplaylistModal">
                                            Create Playlist </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade view-more-data-modal" id="creatplaylistModal" tabindex="-1"
                            aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered share-modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Create Playlist</h5>
                                        <button type="button" class="btn-close me-0" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pt-0">
                                        <form id="st_creat_playlist" action="#" method="post">
                                            <input type="hidden" id="st_playlist_post_type" value="movie">
                                            <div class="form-group mb-4">
                                                <label class="form-label">Playlist Title</label>
                                                <span class="text-danger">*</span>
                                                <input class="form-control" type="text" id="st_playlist_title"
                                                    value="">
                                            </div>
                                            <div class="iq-button d-flex justify-content-end">
                                                <button type="button" class="btn btn-secondary position-relative"
                                                    data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                                    <span class="button-text">Create Playlist</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade view-more-data-modal" id="shareModal" tabindex="-1" aria-modal="true"
                            role="dialog">
                            <div class="modal-dialog modal-dialog-centered share-modal">
                                <div class="modal-content">
                                    <div class="modal-header pb-0">
                                        <h5 class="modal-title" id="exampleModalLabelshare">Share</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="share-media-box">
                                            <div class="media-box">
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <span class="image-icon">
                                                        <i class="icon-facebook-icon"></i>
                                                    </span>
                                                    <span class="titles">Facebook</span>
                                                </a>
                                            </div>
                                            <div class="media-box">
                                                <a href="https://twitter.com/" target="_blank">
                                                    <span class="image-icon">
                                                        <i class="icon-twitter-icon"></i>
                                                    </span>
                                                    <span class="titles text-center">Twitter</span>
                                                </a>
                                            </div>
                                            <div class="media-box">
                                                <a href="https://www.linkedin.com" target="_blank">
                                                    <span class="image-icon">
                                                        <i class="icon-instagram-icon"></i>
                                                    </span>
                                                    <span class="titles">Instagram</span>
                                                </a>
                                            </div>
                                            <div class="media-box">
                                                <a href="https://api.whatsapp.com" target="_blank">
                                                    <span class="image-icon">
                                                        <i class="icon-whatsapp-icon"></i>
                                                    </span>
                                                    <span class="titles">Whatsapp</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="copy-link">
                                            <h6 id="basic-addon1">Copy Link </h6>
                                            <div class="input-group mb-0">
                                                <input type="text" id="copyInput" class="form-control copy-post-url"
                                                    placeholder="Username"
                                                    value="https://templates.iqonic.design/streamit-dist/frontend/html/index.html"
                                                    aria-label="Username" readonly="">
                                                <button class="input-group-text copy-url-btn" id="copyButton"><i
                                                        class="ph ph-copy-simple" id="copyIcon"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade view-more-data-modal downloadModal" id="downloadModal" tabindex="-1"
                            aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered share-modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabeldownload">Download Quality</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body pt-0">
                                        <!-- Normal download functionality -->
                                        <ul class="list-inline m-0 p-0 downloadModal-list">
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1">360p</h6>
                                                        <p class="m-0 small">English,Hindi</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a download=""
                                                            href="https://www.youtube.com/watch?v=X8c8EXPfqkI"
                                                            class="link-primary">
                                                            <i class="ph ph-download-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1">480p</h6>
                                                        <p class="m-0 small">English,Hindi</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a download=""
                                                            href="https://www.youtube.com/watch?v=X8c8EXPfqkI"
                                                            class="link-primary">
                                                            <i class="ph ph-download-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1">720p</h6>
                                                        <p class="m-0 small">English,Hindi</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a download=""
                                                            href="https://www.youtube.com/watch?v=X8c8EXPfqkI"
                                                            class="link-primary">
                                                            <i class="ph ph-download-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mt-0 mb-1">1080p</h6>
                                                        <p class="m-0 small">English,Hindi</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a download=""
                                                            href="https://www.youtube.com/watch?v=X8c8EXPfqkI"
                                                            class="link-primary">
                                                            <i class="ph ph-download-simple"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modals End -->
                    </div>
                </div>
            </div>
        </div>


        @if ($series->seasons && count($series->seasons))
            <div class="container-fluid">
                <section class="series-details my-5">
                    <h4 class="fw-bold mb-4">Seasons & Episodes</h4>
                    <div class="list-group">
                        <div class="accordion" id="seasonsAccordion">
                            @foreach ($series->seasons as $season)
                                <div class="accordion-item mb-3">
                                    <h2 class="accordion-header" id="headingSeason{{ $season->id }}">
                                        <button class="accordion-button fw-semibold {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeason{{ $season->id }}" aria-expanded="false"
                                            aria-controls="collapseSeason{{ $season->id }}">
                                            Season {{ $season->number }}: {{ $season->title ?? '' }}
                                            <span class="badge bg-primary ms-3">{{ $season->episodes->count() }}
                                                Episodes</span>
                                        </button>
                                    </h2>
                                    <div id="collapseSeason{{ $season->id }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="headingSeason{{ $season->id }}"
                                        data-bs-parent="#seasonsAccordion">
                                        <div class="accordion-body">
                                            @if ($season->episodes && count($season->episodes))
                                                <div class="row g-3">
                                                    @foreach ($season->episodes as $episode)
                                                        <div class="col-12 col-md-3 col-lg-2">
                                                            <x-episode-item :episode="$episode" />
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="mb-0">No episodes available for this season.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        @else
            <section class="series-details my-5">
                <p>No seasons or episodes available for this series.</p>
            </section>
        @endif
    </x-guest-layout>
