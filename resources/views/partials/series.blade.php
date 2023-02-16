<section class="series my-bg-dark">
	<div class="container py-4 position-relative">
		<h2 class="title-label">CURRENT SERIES</h2>
		<div class="row">

			{{-- comics --}}
			@foreach ($comics as $item)
				<div class="col-6 col-md-4 col-lg-2 comic pb-4">
					<img src="{{ $item['thumb'] }}" alt="" class="mb-2">
					<div class="text-uppercase">{{ $item['series'] }}</div>
				</div>
			@endforeach

		</div>
		<div class="row justify-content-center load-more">
			<a href="#" class="w-auto fw-bold">LOAD MORE</a>
		</div>
	</div>
</section>