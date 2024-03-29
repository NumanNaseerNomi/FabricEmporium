@include('Components.header')

<div class="container-fluid">
	@include('Components.banners')
	<div class="container">
		@foreach($categories as $category)
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">{{ $category }}</h2>
				</div>
			</div>
			<div class="row mb-4">
				@foreach($productsByCategory[$category] as $product)
					@include('Components.productItem')
					@include('Components.productDetail')
				@endforeach
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center">
					<form action="{{ url('/showMore') }}" method="post">
						@csrf
						<input type="hidden" name="category" value="{{ $category }}" required>
						<button type="submit" class="btn btn-dark px-5">View More</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</div>
@include('Components.footer')