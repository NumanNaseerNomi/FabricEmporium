@include('Components.header')
<div class="container mb-5">
<div class = "deliver-section border">
    <div class="page-heading text-center mb-4 border-bottom">
        <h4 class="py-1">Choose shipping method</h4>
    </div>
<nav>
  <div class="nav nav-tabs nav-pills  justify-content-center mb-5" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Delivery</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Payment Method</button>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
		<div class="row justify-content-center">

            <div class="col-12 col-md-4 border shadow px-3 py-4">
	                <h2 class=" d-flex justify-content-center"> Delivery</h2>
	                <form class="row g-3">
                
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <!--<div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>-->
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="inputEmail4">
                    </div>
                   
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div> 
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Special Instructions</label>
                        <textarea class="form-control" id="inputPassword4"></textarea>
                    </div>
                    
                    <!--<div class="col-12  mb-3">
                        <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                        </div>-->
                    </div>
                </form>
	        </div>
	    </div>
        <div class="row mt-5">
            <div class="shipping-method">
                <h4 class="text-center">Shipping Method</h4>
                <div class="method-detail d-flex justify-content-between">
                    <p>Charges</p>
                    
                    <p>Carrior</p>
                <div>
            </div>
        </div>

   </div>



    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
  	<div class="row justify-content-center">
  		<div class="col-12 col-md-4 border shadow px-3 py-4 mb-3">
                <h3 class ="d-flex justify-content-center mb-3 border-bottom pb-3">Payment Method</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Credit / debit Card
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                       Cash on delivery
                    </label>
                </div>
                
                


            </div>
  	</div>
  </div>
 

</div>
</div>
</div>
@include('Components.footer')