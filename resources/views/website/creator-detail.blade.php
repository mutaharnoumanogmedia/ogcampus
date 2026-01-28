@section('title', $creator->name . ' - Creator Details | baaboo Campus')
@section('meta_description', 'Learn more about ' . $creator->name . ' and their work on baaboo Campus. Biography: ' . ($creator->creatorProfile->biography ?? 'No biography available.'))
@section('og_title', $creator->name . ' - Creator Details | baaboo Campus')
@section('og_description', 'Learn more about ' . $creator->name . ' and their work on baaboo Campus. Biography: ' . ($creator->creatorProfile->biography ?? 'No biography available.'))

<x-guest-layout>
	<div class="page-header py-5 bg-dark text-white">
		<div class="container">
			<h1 class="display-5 fw-bold mb-2">Creator Details</h1>
			<p class="lead mb-0">Learn more about {{ $creator->name }} and their work on baaboo Campus.</p>
		</div>
	</div>
    <div class="section-padding personality-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="cast-box position-relative">
                        <img src="{{ $creator->creatorProfile->profile_image ?? '' }}" class="img-fluid object-cover w-100 rounded-3"
                            alt="person" loading="lazy">
                    </div>
                    <h5 class="mt-5 pt-4 mb-4 text-white fw-500">Personal Details</h5>
                    <ul class="list-inline p-0 m-0">
                        <li class="mb-3">
						{{-- <h5 class="mt-0 mb-2"></h5> --}}
                            <ul
                                class="person-birth-detail d-flex align-items-center flex-wrap column-gap-5 row-gap-1 p-0 m-0">
                                <li class="list-group-item">{{$creator->creatorProfile->expertise ?? 'N/A'}}</li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="col-md-9 mt-5 mt-md-0">
                    <h4 class="mb-3">
                        {{ $creator->name }}
                    </h4>
                    <ul class="person-category d-flex flex-wrap align-items-center gap-5 ps-0">
                        <li class="list-group-item"><a href="javascript:void(0);">Actor</a></li>
                    </ul>

                    <p>{{ $creator->creatorProfile->biography ?? 'No biography available.' }}</p>


                    <div class="actor-history">
                        <div class="">
                            <h4 class="">Person History</h4>
                        </div>
                    </div>
                    <div class="content-details trending-info personal-detail">
                        <ul class="nav nav-underline d-flex nav nav-pills align-items-center text-center my-5"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show fw-bold" data-bs-toggle="pill" href="#all"
                                    role="tab" aria-selected="true">
                                    Series
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content personal-detail-tab-content">
                            <div id="all" class="tab-pane animated fadeInUp active show" role="tabpanel">
                                <div class="description-content">
                                    <div class="row gy-5">
                                        @foreach ($creator->createdSeries as $series)
                                            <div class="col-xl-4 col-sm-6">
                                                <div
                                                    class="d-flex align-items-center gap-3 bg-gray-900 movie-history overflow-hidden">
                                                    <div class="image flex-shrink-0">
                                                        <a href="{{ route('website.series.show', $series->slug) }}">
                                                            <img src="{{ $series->poster_path }}" alt="The First Of Us"
                                                                class="img-fluid object-fit-cover person-history-thumbnail">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="mb-1 line-count-2">
                                                            <a href="{{ route('website.series.show', $series->slug) }}" class="text-capitalize">
                                                                {{ $series->title }} </a>
                                                        </h5>
                                                        <span>
                                                            {{ \Carbon\Carbon::parse($series->release_date)->format('Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="streamit-mobile-footer-menu" aria-label="Mobile Footer Navigation">
        <ul class="footer-menu list-inline d-flex align-items-center justify-content-between m-0">
            <li class="footer-menu-item">
                <a href="./view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-film-reel d-block  text-center "></i>
                    Movies </a>
            </li>
            <li class="footer-menu-item">
                <a href="./view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-monitor-play d-block  text-center "></i>
                    Videos </a>
            </li>
            <li class="footer-menu-item">
                <a href="./view-all-movie.html" class="menu- font-size-12">
                    <i class="ph ph-magnifying-glass d-block  text-center "></i>
                    Search </a>
            </li>
            <li class="footer-menu-item">
                <a href="./view-all-movie.html" class="menu-link font-size-12">
                    <i class="ph ph-television d-block  text-center "></i>
                    TV Shows </a>
            </li>
            <li class="footer-menu-item">
                <a href="./profile-marvin.html" class="menu-link font-size-12">
                    <i class="ph ph-user d-block  text-center "></i>
                    Profile </a>
            </li>
        </ul>
    </div> --}}
</x-guest-layout>
