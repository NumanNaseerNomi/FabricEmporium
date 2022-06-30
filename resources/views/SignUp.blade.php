@include('Components.header')
<div class="container mb-5">
<nav>
  <div class="nav nav-tabs nav-pills  justify-content-center mb-5" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sign Up</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
		<div class="row justify-content-center">

				<div class="col-12 col-md-4 border shadow px-3 py-4">
	                <h2 class=" d-flex justify-content-center"> Login</h2>
	                <form action="/user" method="post" class="row g-3">
                        @csrf
	                    <div class="col-md-12">
	                        <label for="inputEmail4" class="form-label">Email</label>
	                        <input type="email" class="form-control" id="inputEmail4">
	                    </div>
	                   
	                     <div class="col-md-12">
	                        <label for="inputPassword4" class="form-label">Password</label>
	                        <input type="password" class="form-control" id="inputPassword4">
	                    </div> 
	                    <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
	                        
	                    </div>
	                </form>
	            </div>
	    </div>
   </div>



  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
  	<div class="row justify-content-center">
  		<div class="col-12 col-md-4 border shadow px-3 py-4 mb-3">
                <h3 class ="d-flex justify-content-center mb-3">Sign Up</h3>
                <form class="row g-3">
                
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="inputEmail4">
                    </div>
                   
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div> 
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    
                    <div class="col-12  mb-3">
                        <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>


            </div>
  	</div>
  </div>
 

</div>
</div>
@include('Components.footer')