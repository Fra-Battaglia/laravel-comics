<section class="series">
	<div class="container">
		<div class="row">

			{{-- comics --}}
			@foreach ($comics as $item)
				<div class="col">
					<div class="comic">
						<img src="{{ $item['thumb'] }}" alt="">
						<div class="text-uppercase">{{ $item['series'] }}</div>
					</div>
				</div>
			@endforeach

		</div>
	</div>
</section>