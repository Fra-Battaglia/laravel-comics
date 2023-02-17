<header>
	<div class="container px-0">
		<div class="row">
			<div class="col py-3"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""></div>
			<div class="col">
				<nav class="h-100">
					<ul class="d-flex align-items-center mb-0 h-100 fw-bold p-0 gap-4">
						@foreach ($pages as $item)
							<li class="h-100 d-flex align-items-center nav-voice"><a href="#">{{ $item['voice'] }}</a></li>
						@endforeach
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>