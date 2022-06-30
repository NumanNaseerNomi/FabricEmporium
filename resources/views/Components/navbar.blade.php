<nav class="navbar navbar-expand-lg   ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center mb-3" id="navbarNavDropdown">
    @for($i=0; $i<=3; $i++)
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle color-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Summer Collection
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a href="{{ url('/showMore') }}" class="dropdown-item" type="button">Stiched</a></li>
			<li><a href="{{ url('/showMore') }}" class="dropdown-item" type="button">Un-Stiched</a></li>  
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
      </ul>
      @endfor
    </div>
  </div>
</nav>