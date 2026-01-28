<x-guest-layout>
    <section>
        <div class="overflow-hidden">
            <div id="home-banner-slider" class="iq-main-slider p-0 swiper banner-home-swiper"
                data-swiper="home-banner-slider" data-pagination="true" data-loop="true">
                <div class="slider m-0 p-0 swiper-wrapper home-slider">
                    @foreach ($featuredSeries as $series)
                        <div class="swiper-slide slide s-bg-1 p-0">
                            <div class="banner-home-swiper-image"
                                style=" background-image: url({{ $series->banner_path }}); ">
                                <div class="container-fluid position-relative">
                                    <div
                                        class="row align-items-center iq-ltr-direction h-100 slider-content-full-height">
                                        <div class="col-lg-6 col-md-12 col-xl-5">
                                            <h2 class="texture-text big-font letter-spacing-1  RightAnimate">
                                                {{ $series->title }}
                                            </h2>
                                            <div
                                                class="d-flex flex-wrap align-items-center gap-3 r-mb-23 RightAnimate-two">
                                                {{-- <div class="slider-ratting d-flex align-items-center">
                                                    <ul
                                                        class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                        <li>
                                                            <i class="ph-fill ph-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star" aria-hidden="true"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half" aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                {{-- <span class="d-flex align-items-center gap-1">
                                                    <span class="">5</span><img
                                                        src="{{ asset('frontend') }}/assets/images/pages/imdb-logo.svg"
                                                        alt="imdb logo" class="img-fluid imdb-img" />
                                                </span> --}}
                                                <span
                                                    class="badge rounded-2 text-white bg-secondary font-size-12">NC-17</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <i class="ph ph-clock"></i>
                                                    <span
                                                        class="time">{{ gmdate('H \h i \m', $series->series_total_duration) }}</span>
                                                </div>
                                            </div>
                                            <p class="line-count-3 my-3 RightAnimate-two">
                                                {{ $series->tagline }}
                                            </p>
                                            <div class="trending-list RightAnimate-three">
                                                <div class="text-primary genres font-size-14 mb-1">
                                                    Professor:
                                                    <a href="view-all-movie.html"
                                                        class="fw-normal text-decoration-none text-body">
                                                        {{ $series->creator->name ?? ' ' }}
                                                    </a>

                                                </div>
                                                <div class="text-primary genres font-size-14 mb-1">
                                                    Genres:
                                                    <a href="view-all-movie.html"
                                                        class="fw-normal text-decoration-none text-body">
                                                        {{ $series->genre->name ?? ' ' }}
                                                    </a>
                                                </div>
                                                <div class="text-primary tag font-size-14">
                                                    Tag:
                                                    <a href="view-all-movie.html"
                                                        class="fw-normal text-decoration-none text-body">
                                                        {{ $series->tag ?? ' ' }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="RightAnimate-four">
                                                <a href="{{ route('website.series.show', ['slug' => $series->slug]) }}"
                                                    class="btn btn-primary text-capitalize position-relative rounded-3">
                                                    <span class="d-flex align-items-center gap-2">
                                                        <span class="button-text">{{ __('play_now') }}</span>
                                                        <i class="ph-fill ph-play fs-6"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-7 col-lg-6 col-md-12 trailor-video iq-slider d-none d-lg-block">
                                            <a data-fslightbox="html5-video"
                                                href="https://www.youtube.com/embed/5ktQgcgDN74?si=199Xf2AuzADqcP8M"
                                                class="video-open playbtn text-decoration-none" tabindex="0">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                                    enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                    <polygon class="triangle" fill="none" stroke-width="7"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10"
                                                        points="73.5,62.5 148.5,105.8 73.5,149.1 ">
                                                    </polygon>
                                                    <circle class="circle" fill="none" stroke-width="7"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                    </circle>
                                                </svg>
                                                <span class="w-trailor text-uppercase">
                                                    {{ __('watch_trailer') }}
                                                </span>
                                            </a>
                                            <video id="my-video"
                                                class="my-video video-js vjs-big-play-centered w-100 d-none" loop
                                                autoplay muted preload="auto"
                                                data-setup='{
                                                            "techOrder": ["youtube"],
                                                            "sources": [{
                                                            "type": "video/youtube",
                                                            "src": "https://www.youtube.com/embed/5ktQgcgDN74?si=199Xf2AuzADqcP8M"
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <button
                    class="PreArrow-two swiper-arrows d-flex align-items-center justify-content-center d-xl-block d-none"
                    style="" id="home-banner-slider-prev">
                    <i class="ph ph-caret-left"></i>
                </button>
                <button
                    class="NextArrow-two swiper-arrows d-flex align-items-center justify-content-center d-xl-block d-none"
                    style="" id="home-banner-slider-next">
                    <i class="ph ph-caret-right"></i>
                </button>
                <div class="swiper-pagination d-block d-lg-none"></div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px"
                        id="circle" fill="none" stroke="currentColor">
                        <circle r="20" cy="22" cx="22" id="test"></circle>
                    </symbol>
                </svg>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="continue-watching-block home-continue-watch section-padding-top">
                <div class="d-flex align-items-center justify-content-between px-1 mb-2 pb-1 mb-md-4 pb-md-0">
                    <h4 class="main-title text-capitalize mb-0 fw-medium">
                        {{ __('current_episodes') }}
                    </h4>
                </div>
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="3" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="false">
                    <ul class="p-0 swiper-wrapper m-0 list-inline">
                        @foreach ($hotEpisodes as $episode)
                            <li class="swiper-slide">
                                <div class="iq-watching-block">
                                    <div class="block-images position-relative">
                                        <div class="iq-image-box overly-images">
                                            <a href="{{ route('website.series.show', ['slug' => $series->slug]) }}" class="d-block">
                                                <img src="{{ $episode->thumbnail_path }}" alt="movie-card"
                                                    class="w-100 d-block border-0 rounded-3 continue-image" />
                                            </a>
                                        </div>
                                        <div class="iq-preogress">
                                            {{-- <span class="px-2 text-white fw-semibold font-size-14 iq-progress-left-data">70
                                            m Left</span> --}}
                                            <div class="d-flex align-items-center justify-content-between px-2 mb-1">
                                                <ul
                                                    class="list-inline m-0 p-0 d-flex row-gap-1 column-gap-3 flex-wrap movie-list-item">
                                                    <li
                                                        class="iq-preogress-movie-title position-relative font-size-14">
                                                        <span
                                                            class="text-capitalize fw-semibold">{{ $episode->title }}</span>
                                                    </li>
                                                    <li class="flex-shrink-0 fw-semibold font-size-14">
                                                        <span>
                                                            {{ $episode->published_at->format('M Y') }}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <a href="{{ route('website.seasons.episodes.show', ['episode_slug' => $episode->slug, 'season_slug' => $episode->season->slug]) }}"
                                                    class="text-white">
                                                    <i class="ph-fill ph-play iq-preogress-play-btn fs-6"></i>
                                                </a>
                                            </div>
                                            <div class="progress" role="progressbar" aria-label="Example 2px high"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                style="height: 2px">
                                                <div class="progress-bar"
                                                    style="width: {{ $episode->myEpisode(auth()->id())->progress_percent ?? 0 }}%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="close-icon-section">
                                            <div class="position-absolute d-flex align-items-center justify-content-center iq-watching-close-icon"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                aria-label="Remove from list"
                                                data-bs-original-title="Remove from list">
                                                <i class="ph ph-x font-size-14 fw-bold align-middle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                    <div class="d-none d-lg-block">
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                    </div>
                </div>
            </div>

            <div class="upcomimg-block section-wraper">
                <div class="d-flex align-items-center justify-content-between px-1 mb-2 pb-1 mb-md-4 pb-md-0">
                    <h4 class="main-title text-capitalize mb-0 fw-medium">
                        {{ __('exclusive_series') }}
                    </h4>
                </div>
                <div class="card-style-slider">
                    <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="4" data-tab="3"
                        data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true"
                        data-navigation="true" data-pagination="true">
                        <ul class="p-0 swiper-wrapper m-0 list-inline">
                            @foreach ($exclusiveSeries as $series)
                                <li class="swiper-slide">
                                    <div class="iq-card card-hover">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box w-100">
                                                <a href="{{ route('website.series.show', ['slug' => $series->slug]) }}"
                                                    class="position-relative top-0 bottom-0 start-0 end-0">
                                                    <img src="{{ $series->poster_path }}" alt="movie-card"
                                                        class="img-fluid object-cover w-100 d-block border-0 rounded-3" />
                                                </a>
                                            </div>
                                            <div class="card-description with-transition">
                                                <ul
                                                    class="genres-list p-0 mb-2 d-flex align-items-center flex-wrap list-inline">
                                                    <li class="fw-semi-bold">
                                                        <a href="./view-all-movie.html" tabindex="0"
                                                            class="font-size-14">
                                                            {{ $series->genre->name ?? ' ' }}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="cart-content">
                                                    <div class="content-left">
                                                        <h5 class="iq-title text-capitalize">
                                                            <a
                                                                href="{{ route('website.series.show', ['slug' => $series->slug]) }}">{{ $series->title }}</a>
                                                        </h5>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="d-flex align-items-center gap-2">
                                                                <i class="ph ph-translate"></i>
                                                                <small
                                                                    class="font-size-12">{{ $series->original_language ?? 'German' }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-3">
                                                    <a href="./watchlist-detail.html"
                                                        class="d-flex align-items-center justify-content-center flex-shrink-0 border-0 add-to-wishlist-btn btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Add to Watchlist">
                                                        <i class="ph ph-plus font-size-18"></i>
                                                    </a>
                                                    <div class="iq-play-button iq-button">
                                                        <a href="{{ route('website.series.show', ['slug' => $series->slug]) }}"
                                                            class="btn btn-primary w-100">
                                                            {{ __('play_now') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-absolute z-1 primium-product d-flex align-items-center justify-content-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Premium"
                                                data-bs-original-title="Premium">
                                                <i class="ph-fill ph-crown"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                        <div class="d-none d-lg-block">
                            <div class="swiper-button swiper-button-next"></div>
                            <div class="swiper-button swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="streamit-card-height-block">
                <div class="d-flex align-items-center justify-content-between px-1 mb-4">
                    <h4 class="main-title text-capitalize mb-0 fw-medium">
                        {{ __('discover_professors') }}
                    </h4>
                    <a href="{{ route('website.creators') }}"
                        class="text-primary iq-view-all text-decoration-none flex-none">{{__("view_all")}}</a>
                </div>
                <div class="card-style-slider">
                    <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="3" data-tab="3"
                        data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false"
                        data-navigation="true" data-pagination="true">
                        <ul class="p-0 swiper-wrapper m-0 list-inline">
                            @foreach ($creators as $creator)
                                <li class="swiper-slide">
                                    <div class="iq-card card-hover landscape-card-hover">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box w-100">
                                                <a href="{{ route('website.creator.detail', $creator->id) }}"
                                                    class="position-relative top-0 bottom-0 start-0 end-0">
                                                    <img src="{{ $creator->creatorProfile->profile_image ?? asset('frontend/assets/images/avatars/avatar-15.png') }}"
                                                        alt="movie-card"
                                                        class="img-fluid object-cover w-100 d-block border-0 rounded-3" />
                                                </a>
                                            </div>
                                            <div class="card-description with-transition">
                                                <ul
                                                    class="genres-list p-0 mb-2 d-flex align-items-center flex-wrap list-inline">
                                                    <li class="fw-semi-bold">
                                                        <a href="{{ route('website.creator.detail', $creator->id) }}" tabindex="0"
                                                            class="font-size-14">
                                                            {{ $creator->creatorProfile->experties ?? ' ' }}
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="cart-content">
                                                    <div class="content-left">
                                                        <h5 class="iq-title text-capitalize mb-0">
                                                            <a href="{{ route('website.creator.detail', $creator->id) }}">{{ $creator->name }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-center gap-2 mt-3">
                                                    <a href="{{ route('website.creator.detail', $creator->id) }}"
                                                        class="d-flex align-items-center justify-content-center flex-shrink-0 border-0 add-to-wishlist-btn btn btn-secondary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip"
                                                        data-bs-title="Add to Watchlist">
                                                        <i class="ph ph-plus font-size-18"></i>
                                                    </a>
                                                    <div class="iq-play-button iq-button">
                                                        <a href="{{ route('website.creator.detail', $creator->id) }}"
                                                            class="btn btn-primary w-100">Play
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-absolute z-1 premium-product d-flex align-items-center justify-content-center"
                                                data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Premium"
                                                data-bs-original-title="Premium">
                                                <i class="ph-fill ph-crown"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <div class="swiper-button swiper-button-next"></div>
                        <div class="swiper-button swiper-button-prev"></div>
                        <br><Br><br>
                    </div>
                </div>
            </div>


        </div>
        <br><br><br>
    </div>


    <section id="parallex" class="parallax-window bg-attachment-fixed"
        style="
            background: url({{ asset('frontend') }}/assets/images/pages/Movieof-the-year.webp)
                fixed;
        ">
        <div class="container-fluid h-100">
            <div
                class="row align-items-center justify-content-center h-100 parallaxt-details flex-column-reverse flex-lg-row gap-4 gap-lg-0">
                <div class="col-xl-6 col-lg-6 col-md-12 r-mb-23">
                    <div class="parallax-window-detail">
                        <h2 class="mb-0 parallaxt-details-heading">
                            Baileys Irish Cream
                        </h2>
                        <div
                            class="d-flex flex-column flex-md-row gap-2 flex-wrap align-items-center r-mb-23 mt-2 mb-3 gap-md-3 justify-content-center justify-content-lg-start">
                            <div class="slider-ratting d-flex align-items-center">
                                <ul
                                    class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                    <li>
                                        <i class="ph-fill ph-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="ph-fill ph-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="ph-fill ph-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="ph-fill ph-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="ph ph-star" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <span>5 </span>
                                <img src="{{ asset('frontend') }}/assets/images/pages/imdb-logo.svg" alt="imdb logo"
                                    class="img-fluid" />
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="ph ph-clock"></i>
                                <span class="">2h : 30m</span>
                            </div>
                        </div>
                        <h4 class="iq-title mb-2 pb-1 pb-lg-0 mb-lg-3 fw-medium">
                            Trending Now
                        </h4>
                        <p class="mb-4 pb-2 parallaxt-details-descripttion">
                            Baileys Irish Cream is an Irish cream
                            liqueur an alcoholic beverage flavoured with
                            cream, cocoa, and Irish whiskey made by
                            Diageo at Republic of Ireland and in
                            Mallusk, Northern Ireland.
                        </p>
                        <div class="parallax-buttons">
                            <a href="movie-detail.html"
                                class="btn btn-primary text-capitalize position-relative rounded-3">
                                <span class="d-flex align-items-center gap-2">
                                    <span class="button-text">play now</span>
                                    <i class="ph-fill ph-play fs-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 mt-0 mt-lg-5 mt-xl-0">
                    <div class="parallax-img">
                        <a href="{{ route('website.series.show', ['slug' => $series->slug]) }}">
                            <img src="{{ asset('frontend') }}/assets/images/pages/Movieof-the-year.webp"
                                class="img-fluid w-100" loading="lazy" alt="bailey" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
