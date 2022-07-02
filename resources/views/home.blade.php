@include('Components.header')
@include('Components.navbar')
<!-- <div class="container">
	<div class="row">
		<div class="bar-links">
			<ul class="bar-link-list d-flex justify-content-center  fs-5">
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Summer Collection</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Winter Collection</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Ladies</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Gents</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Bride</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Groom</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Kids</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
				<li class="list-item mx-3">
					<div class="dropdown">
						<a  class="drop dropdown-toggle" type="button">Party Wear</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Stiched</a></li>
							<li><a href="{{ url('#') }}" class="dropdown-item" type="button">Un-Stiched</a></li>   
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div> 
</div> -->
<div class="container-fluid">
	@include('Components.banners')
	<div class="container">
		@for($i=0; $i<=3; $i++)
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Summer Collection Title</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($j=0; $j<=3; $j++)
					@include('Components.productItem')
					@include('Components.productDetail')
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center">
					<a class="btn bg-clr rounded-pill px-4 py-2 fs-6 text-white" href="{{ url('/showMore') }}">View More</a>
				</div>
			</div>
		@endfor
	</div>
</div>
<!-- <div class="container">
	<div class="row justify-content-center mb-4">
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 px-4 py-4 justify-content-center bg-clr border border-light">
			<h3 class="text-white text-center">Emporium Store</h3>
			<p class="text-white pb-4 border-bottom text-center">16M Abdul Haque Rd, Trade Centre Commercial Area Phase 2 Johar Town, Lahore, Punjab 54000</p>
			<p class="text-white text-center fs-5 fw-bold">Opening Hours</p>
			<p class="text-white text-center">Monday to Sunday : 10AM to 11PM</p>
		</div>
	</div>
</div> -->
@include('Components.footer')