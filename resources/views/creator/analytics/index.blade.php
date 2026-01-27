<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark mb-4">
            Creator Analytics Dashboard
        </h2>
    </x-slot>
    <div class="py-4 container">
        <div class="row g-4">
            <div class="col-12 col-md-6">
                <a href="{{ route('creator.analytics.seasons') }}" class="card h-100 text-decoration-none text-dark shadow-sm hover-shadow">
                    <div class="card-body">
                        <h3 class="fs-5 fw-bold mb-2">Seasons Analytics</h3>
                        <p class="text-muted">View performance and stats for your seasons.</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{ route('creator.analytics.videos') }}" class="card h-100 text-decoration-none text-dark shadow-sm hover-shadow">
                    <div class="card-body">
                        <h3 class="fs-5 fw-bold mb-2">Videos Analytics</h3>
                        <p class="text-muted">Analyze views, engagement, and more for your videos.</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{ route('creator.analytics.reviews') }}" class="card h-100 text-decoration-none text-dark shadow-sm hover-shadow">
                    <div class="card-body">
                        <h3 class="fs-5 fw-bold mb-2">Reviews Analytics</h3>
                        <p class="text-muted">See feedback and ratings from your audience.</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{ route('creator.analytics.watchtime') }}" class="card h-100 text-decoration-none text-dark shadow-sm hover-shadow">
                    <div class="card-body">
                        <h3 class="fs-5 fw-bold mb-2">Watch Time Analytics</h3>
                        <p class="text-muted">Track total and average watch time for your content.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
