@section('title', 'All Creators - baaboo Campus')
@section('meta_description',
    'Browse all creators on baaboo Campus. Discover professionals behind your favorite
    courses.')
@section('og_title', 'All Creators - baaboo Campus')
@section('og_description', 'Browse all creators on baaboo Campus. Discover professionals behind your favorite courses.')

<x-guest-layout>
    {{-- Creators listing content will go here --}}
    <div class="section-padding">
        <div class="container-fluid">
            <div class="card-style-grid">
                <div
                    class="row gy-4 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 personality-card">
                    @foreach ($creators as $creator)
                        <div class="col">
                            <a href="{{ route('website.creator.detail', $creator->id) }}">
                                <img src="{{ $creator->creatorProfile->profile_image }}" alt="personality"
                                    class="img-fluid object-cover mb-3 rounded-3 personality-img" />
                            </a>
                            <div class="text-center">
                                <h6 class="mb-0">
                                    <a href="{{ route('website.creator.detail', $creator->id) }}"
                                        class="font-size-14 text-decoration-none cast-title text-capitalize">{{ $creator->name }}</a>
                                </h6>
                                <a href="{{ route('website.creator.detail', $creator->id) }}"
                                    class="font-size-12 fw-semibold text-decoration-none text-capitalize text-body">{{ $creator->creatorProfile->profession }}&nbsp;&nbsp;</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
