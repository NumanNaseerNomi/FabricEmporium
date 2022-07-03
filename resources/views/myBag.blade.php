@include('Components.header')
@include('Components.navbar')

<!-- <div class="container">
    <div class="row ">
        <div class="col-6 fw-bold fs-5">My Wishlist</div>
        <div class="col-6 fw-bold fs-5">My Bag</div>
    </div>
</div> -->


<div class="container ">
    <div class="row">
        <div class=" col-12 col-md-6 mb-3">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-heart me-1"></i>My Wishlist</h5>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <!-- <th scope="col">Size</th>
                                <th scope="col">Quantity</th> -->
                                <th scope="col">Price</th>
                                <!-- <th scope="col">Total Price</th> -->
                                <th scope="col">Edit Card</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td >
                                    <img style="width:50px;" src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-tmbnail">
                                </td>
                                <td>Shirt</td>
                                <!-- <td>Small</td> -->
                                <!-- <td>
                                    <div class="input-group w-75 align-middle justify-content-center">
                                        <button id="minusButton" class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity");updateTotalPrice("#price","#quantity", "#total");'>-</button>
                                        <input type="number" id="quantity" class="form-control border-primary text-center" style="width:20px" value="1" min="1">
                                        <button id="plusButton" class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity");updateTotalPrice("#price","#quantity", "#total");'>+</button>
                                    </div>
                                </td> -->
                                <td id="price">PKR 1000</td>
                                <!-- <td id="total">PKR 5000</td> -->
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-outline-success"><i class="fal fa-shopping-bag"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-shopping-bag"></i> My Bag</h5>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <!-- <th scope="col">Size</th> -->
                                <!-- <th scope="col">Quantity</th> -->
                                <th scope="col">Price</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Edit Card</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td >
                                    <img style="width:50px;" src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="img-tmbnail">
                                </td>
                                <td>Shirt</td>
                                <!-- <td>Small</td> -->
                                <!-- <td>
                                    <div class="input-group w-75 align-middle justify-content-center">
                                        <button id="minusButton" class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity");updateTotalPrice("#price","#quantity", "#total");'>-</button>
                                        <input type="number" id="quantity" class="form-control border-primary text-center" style="width:20px" value="1" min="1">
                                        <button id="plusButton" class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity");updateTotalPrice("#price","#quantity", "#total");'>+</button>
                                    </div>
                                </td> -->
                                <td id="price">PKR 1000</td>
                                <td id="total">PKR 5000</td>
                                <td>
                                    
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></button>
                                </td>
                                @include('Components.productDetail')
                            </tr>
                        </tbody>
                    </table>
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
