
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
					@if(Session::get('user'))
						<li class="me-5 mt-4">
							<a class="fa-icon position-relative" href="{{ url('/myBag') }}"><i class="fal fa-shopping-bag"></i>
								<span class="position-absolute start-100 bottom-0 translate-middle px-1 opacity-75  bg-dark fs-6 rounded-circle text-white">
									9+
								</span>
							</a>
						</li>
					@endif
					<li class="me-5 mt-4">
						<div class="btn-group">
							<a class="dropdown-toggle-t text-dark" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fal fa-user"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								@if(Session::get('user'))
									<li><a class="dropdown-item" href="{{ url('/myProfile') }}"><i class="fal fa-user me-2"></i>{{Session::get('user')->name}}</a></li>
									@if(Session::get('user')->isAdmin)
										<li><a class="dropdown-item" href="{{ url('/manageProducts') }}"><i class="fal fa-user-cog me-2"></i>Admin Panel</a></li>
									@endif
									<hr class="dropdown-divider">
									<li><a class="dropdown-item" href="{{ url('/logout') }}"><i class="fal fa-power-off me-2"></i>Logout</a></li>
								@else
									<li><a class="dropdown-item" href="{{ url('/login') }}"><i class="fas fa-sign-in  me-2"></i>Login</a></li>
								@endif
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	