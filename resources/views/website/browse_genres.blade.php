@section('title', 'Browse Genres - baaboo Campus')
@section('meta_description',
    'Browse all genres on baaboo Campus. Discover content across Health & Energy, Life Skills,
    Business, Finance, and AI & Digital topics.')
@section('og_title', 'Browse Genres - baaboo Campus')
@section('og_description',
    'Browse all genres on baaboo Campus. Discover content across Health & Energy, Life Skills,
    Business, Finance, and AI & Digital topics.')

    <x-guest-layout>
        <!-- Browse Genres Section -->
        <div class="iq-breadcrumb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center">
                            <ol class="breadcrumb justify-content-center text-white mt-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('website.index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    View All
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--bread-crumb-->

        <div class="section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 my-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="main-title text-capitalize mb-0">
                                genres
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1 geners-card geners-style-grid">
                    @foreach ($genres as $genre)
                        <div class="col slide-items">
                            <div class="iq-card-geners position-relative card-hover-style-two">
                                <div class="img-box position-relative">
                                    <a href="{{ route('website.browse.genre', ['slug' => $genre->slug]) }}">
                                            <img src="{{ $genre->thumbnail_path }}" alt="{{ $genre->name }} image"
                                                class="img-fluid" />
                                      
                                        <h6 class="blog-description">{{ $genre->name }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>


    </x-guest-layout>
