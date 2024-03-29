<!DOCTYPE html>
<html>
<head>
	<title>Fabric Emporium Online</title>
	<link rel="icon" type="image/x-icon" href="{{asset('images/logos/favicon.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('plugins/fontAwesome/css/fontAwesomeAll.min.css') }}" rel = "stylesheet">
	<link href="{{ asset('css/style.css') }}" rel = "stylesheet" />
</head>
<body>
	<div class="container-fluid bg-clr fw-normal fs-6 text-white">
		<div class="d-flex justify-content-center text-white">Shop our Latest Collection of Un-stitched Fabrics, Ready to Wear and more.</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-white mb-3 border-bottom">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarScroll">
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
					<form class="d-flex" method="post" action="{{ url('/search') }}">
						@csrf
						<input class="form-control me-2" name="search" type="search" placeholder="Search here...." aria-label="Search">
						<button type="submit" class="btn btn-link"><i class="fa fa-search text-black" style="font-size:24px"></i></button>
						<!-- <button type="submit"><i class="fa fa-search srch" style="font-size:24px"></i></button> -->
					</form>
				</ul>
				<ul class="icons">
					<li class="me-5 mt-4">
						<a class="fa-icon position-relative" href="{{ url('/myBag') }}"><i class="fal fa-shopping-bag"></i>
							@if(Session::get('user'))
								<span class="position-absolute bottom-50 start-100 translate-middle p-1 bg-danger rounded-circle"></span>
							@endif
						</a>
					</li>
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
	