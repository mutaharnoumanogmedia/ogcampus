@extends('layouts.app')
@section('content')
<main class="main-content">
    <div class="container-fluid">
        <h1>Episodes</h1>
        <div class="row">
            @foreach($episodes as $episode)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $episode->thumbnail_path ?? asset('assets/images/default-thumbnail.jpg') }}" class="card-img-top" alt="{{ $episode->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $episode->title }}</h5>
                            <p class="card-text">{{ Str::limit($episode->description, 100) }}</p>
                            <a href="{{ route('website.episode', $episode->slug) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
