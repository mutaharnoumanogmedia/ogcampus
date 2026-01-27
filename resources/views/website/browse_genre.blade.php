@section('title', $genre->name . ' - Browse Series - baaboo Campus')
@section('meta_description', $genre->description ?? 'Browse ' . $genre->name . ' series on baaboo Campus.')
@section('og_title', $genre->name . ' - Browse Series - baaboo Campus')
@section('og_description', $genre->description ?? 'Browse ' . $genre->name . ' series on baaboo Campus.')

<x-guest-layout>
    <!--bread-crumb-->
    <div class="iq-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb" class="text-center">
                        <ol class="breadcrumb justify-content-center text-white mt-0">
                            <li class="breadcrumb-item"><a href="{{ route('website.browse.genres') }}">
                                    Genres</a></li>
                            <li class="breadcrumb-item active">View All in {{ $genre->name }} </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!--bread-crumb-->


    <div class="section-padding view-all-movies">
        <div class="container-fluid">
            <div class="card-style-grid">
                <div class="row gy-4 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 data-listing">

                    @foreach ($series as $item)
                        <div class="col">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{ route('website.series.show', ['slug' => $item->slug]) }}"
                                            class="position-relative top-0 bottom-0 start-0 end-0">
                                            
                                                <img src="{{ $item->poster_path }}" alt="{{ $item->title }} image"
                                                    class="img-fluid object-cover w-100 d-block border-0 rounded-3" />
                                            
                                        </a>
                                    </div>
                                    <div class="card-description with-transition">
                                        <ul
                                            class="genres-list p-0 mb-2 d-flex align-items-center flex-wrap list-inline">
                                            @foreach ($item->genres ?? [] as $g)
                                                <li class="fw-semi-bold">
                                                    <a href="{{ route('website.browse.genre', ['slug' => $g->slug]) }}"
                                                        tabindex="0" class="font-size-14 ">
                                                        {{ $g->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a
                                                        href="{{ route('website.series.show', ['slug' => $item->slug]) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    @if (isset($item->duration))
                                                        <div class="d-flex align-items-center gap-1">
                                                            <i class="ph ph-clock font-size-12"></i>
                                                            <small class="font-size-12">{{ $item->duration }}</small>
                                                        </div>
                                                    @endif
                                                    @if (isset($item->language))
                                                        <div class="d-flex align-items-center gap-2">
                                                            <i class="ph ph-translate"></i>
                                                            <small class="font-size-12">{{ $item->language }}</small>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center flex-shrink-0 border-0 add-to-wishlist-btn btn btn-secondary"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip" data-bs-title="Add to Watchlist">
                                                <i class="ph ph-plus font-size-18"></i>
                                            </a>
                                            <div class="iq-play-button iq-button">
                                                <a href="{{ route('website.series.show', ['slug' => $item->slug]) }}"
                                                    class="btn btn-primary w-100">Play Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Static Load More -->
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary position-relative load-more-btn">
                        <span class="button-text">Load More</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
