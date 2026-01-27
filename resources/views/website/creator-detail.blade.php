@section('title', 'Creator Details - baaboo Campus')
@section('meta_description', 'View creator details on baaboo Campus. Learn more about this creator and their courses.')
@section('og_title', 'Creator Details - baaboo Campus')
@section('og_description', 'View creator details on baaboo Campus. Learn more about this creator and their courses.')

<x-guest-layout>
	<div class="container-fluid py-5">
		<div class="row">
			<div class="col-12">
				<h1>Creator Details</h1>
				<p>Creator: {{ $creator->name ?? $slug ?? 'N/A' }}</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-12">
				<h2>Series by this Creator</h2>
				@if($series->count())
					<ul class="list-group">
						@foreach($series as $item)
							<li class="list-group-item">
								<a href="{{ route('website.series.show', $item->slug) }}">{{ $item->title }}</a>
							</li>
						@endforeach
					</ul>
				@else
					<p>No series found for this creator.</p>
				@endif
			</div>
		</div>
	</div>
</x-guest-layout>
