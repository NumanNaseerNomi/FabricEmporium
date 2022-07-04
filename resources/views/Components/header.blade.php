
<!DOCTYPE html>
<html>
<head>
	<title>Fabric Emporieum Online</title>
	<link rel="icon" type="image/x-icon" href="{{asset('images/logos/favicon.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/fontAwesome/css/fontAwesomeAll.min.css') }}" rel = "stylesheet">
	<link href="{{ asset('css/style.css') }}" rel = "stylesheet" />

	<!-- <script src="{{asset('js/app.js') }}" defer></script> -->
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
	<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
</head>
<body>
	<div class="container-fluid bg-clr fw-normal fs-6 text-white">
		<div class="d-flex justify-content-center text-white">Shop our Latest Collection of Unstitched Fabrics, Ready to Wear and more.</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 border-bottom">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarScroll">
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
					<form class=" d-flex">
						<input class="form-control me-2" type="search" placeholder="Search here...." aria-label="Search">
						<i class="fa fa-search srch" style="font-size:24px"></i>
					</form>
				</ul>
				<ul class="icons">
					<li class="me-5 mt-4">
						<a class="fa-icon position-relative" href="{{ url('/myBag') }}"><i class="fal fa-shopping-bag"></i>
							<span class="position-absolute start-100 bottom-0 translate-middle px-1 opacity-75  bg-dark fs-6 rounded-circle text-white">
								9+
							</span>
						</a>
					</li>
					<li class="me-5 mt-4">
						<!-- <a class="fa-icon" href="{{ url('/myProfile') }}"> -->
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fal fa-user"></i>
						</a>

						<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li><a class="dropdown-item" href="#">User name</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#"><i class="fal fa-power-off me-2"></i>Logout</a></li>
							
						</ul>
					</div>
						<!-- <i class="fal fa-user"></i> -->
					<!-- </a> -->
				</li>
				</ul>
			</div>
		</div>
	</nav>
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

