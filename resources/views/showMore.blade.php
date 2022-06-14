@include('Components.header')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogo.png')}}"></a></div>
    </div>
</div>

<div class="container">
    <div class="row mt-4 mb-4">
        <div class="page-title d-flex justify-content-center"><h2>Brand Name</h2></div>
    </div>
	<div class="row">
    @for($i=0; $i<=9; $i++)
        <div class="col col-md-6 col-lg-3 mb-4">
            <div class="card" style="width: 18rem;">
                <a href=""><img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-between">
                        
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Show Detail
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add To Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-12 col-md-6">
      			<div class="cloth-details">
	  				<div class="name">
	  					<h3>Fabric Name</h3>
	  			</div>
  				<div class="type">
  					<h6>Stich.Unstich</h6>
  				</div>
  				<div class="price mb-2">
  					<h6>Rs. 2,340</h6>
  				</div>
  				<div class="description mb-3">
  					<h5 class="product-detail">Detail</h5>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  				</div>
  				<div class="stock pb-4 border-bottom">
  					<h5>Availabilty : <span class="fs-6">In stock</span></h5>
  					<h5>Product Code : <span class="fs-6">#4353465</span></h5>
  				</div>
  				<div class="cart-section pt-4 pb-5 border-bottom">
  					<div class="add-to-cart d-flex">
  						<div class="cart-btn me-4"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Add to Cart</button></div>
        <div class="d-flex align-middle"><button type="button" class="btn btn-light"><i class="far fa-minus"></i></button>
        <span>1</span>
        <button type="button" class="btn btn-light"><i class="far fa-plus"></i></button>
    </div>
  						
  					</div>
  				</div>
  			</div>
      		</div>
      		<div class="col-12 col-md-6">
      			<img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg">
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@include('Components.footer')