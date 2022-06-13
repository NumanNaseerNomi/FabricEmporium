@include('Components.header')
<div class="container">
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
</div>
<div class="container-fluid">
	<div class="row mt-4 mb-4">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://img.freepik.com/free-vector/slider-zip-with-jeans-texture_134830-780.jpg?t=st=1655060824~exp=1655061424~hmac=3cc22f176330e23d5dc712671e04c2e3154633816cebf242e611ad4aa2efda87&w=1060"class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://pbs.twimg.com/media/B_H-2r9U0AAopJH.jpg"class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://3.bp.blogspot.com/-iLWBDhpF1_I/UxYhztmRToI/AAAAAAAARHM/Fsj4Eo3kxaU/w1200-h630-p-k-no-nu/Khaadi-Lawn.jpg"class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<div class="container">
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Summer Collection</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Winter Collection</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Ladies</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Gents</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Bride</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Groom</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Kids</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
		<div>
			<div class="row mb-4">
				<div class="d-flex heading justify-content-center">
					<h2 class="fw-bold">Party Wear</h2>
				</div>
			</div>
			<div class="row mb-4">
				@for($i=0; $i<=3; $i++)
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
						<a href="{{ url('#') }}"><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-thumbnail" alt="..."></a>
					</div>
				@endfor
			</div>
			<div class="row mb-5">
				<div class="d-flex justify-content-center"><a class="btn bg-clr rounded-pill px-4 py-2 fs-6" href="">View More</a></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center mb-4">
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 px-4 py-4 justify-content-center bg-clr border border-light">
			<h3 class="text-white text-center">Emporium Store</h3>
			<p class="text-white pb-4 border-bottom text-center">16M Abdul Haque Rd, Trade Centre Commercial Area Phase 2 Johar Town, Lahore, Punjab 54000</p>
			<p class="text-white text-center fs-5 fw-bold">Opening Hours</p>
			<p class="text-white text-center">Monday to Sunday : 10AM to 11PM</p>
		</div>
	</div>
</div>
@include('Components.footer')