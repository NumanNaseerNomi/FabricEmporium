@include('Components.header')
<div class="container ">
    <div class="row">
        <div class=" col-6 col-md-6 mb-3">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-truck me-1"></i>Delivery Details</h5>
                <div class="card-body overflow-auto">
                <form class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <!--<div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>-->
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="inputEmail4">
                </div>
               
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div> 
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Special Instructions</label>
                    <textarea class="form-control" id="inputPassword4"></textarea>
                </div>
                <div class="col-12  mb-3">
                    <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark">Order Now</button>
                    </div>
                </div>
                
                </div>
            </form>
                   
                </div>
            </div>
        
        <div class="col-6 col-md-6 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-money-bill me-1"></i>Payment Method</h5>
                <div class="card-body overflow-auto">
                    <!-- <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="active btn btn-dark " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Cash</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="  btn btn-dark" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Credit Card</button>
                        </li>
                       
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"><button type="button" class="btn btn-outline-dark">Cash on delivery</button></div>
                    <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"> -->
                    <form class="row g-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash on delivery
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Pay online
                            </label>
                        </div>
                    
                                <!-- <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Card number</label>
                                    <input type="number" class="form-control" id="inputEmail4">
                                </div>
                            
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Expiry date</label>
                                    <input type="date" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Card holder name</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                            
                                <div class="col-md-12">
                                    <label for="inputPassword4" class="form-label">Security code</label>
                                    <input type="number" class="form-control" id="inputEmail4">
                                </div> 
                                
                                
                                <div class="col-12  mb-3">
                                    <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-dark">Pay</button>
                                    </div>
                                </div> -->
                    </form>
                    </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@include('Components.footer')

<script>
    function incrementValue(argument)
    {
        document.querySelector(argument).value++;
    }

    function decrementValue(argument)
    {
        let element = document.querySelector(argument);
        
        if(element.value>1)
        {
            element.value--;
        }
    }
    
    function updateTotalPrice(price, quantity, total)
    {
        price = parseFloat(document.querySelector(price).innerHTML.split(" ")[1]);
        quantity = parseFloat(document.querySelector(quantity).value);
        document.querySelector(total).innerHTML = "PKR " + (price * quantity);
    }
</script>
