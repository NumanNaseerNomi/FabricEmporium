@include('Components/adminpanel.header')
<div class="container">
    <!-- <div class= "row mb-3">
        <div class="col-6 text-center">
            <h2>Product Page</h2>
        </div>
    </div> -->
    <!-- <div class= "row ">
        <div class="col-4 ">
        <form class="row g-3">
                
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Size</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">Color</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
               
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Price</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div> 
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Discounted price</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Percentage off</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                
                <div class="col-12  mb-3">
                    <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-outline-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
    <div class="row">
        <div class=" col-12 col-md-4 mb-3">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header text-center">Add Product</h5>
                <div class="card-body overflow-auto">
                <form class="row g-3">
                
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Size</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">Color</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
               
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Price</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div> 
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Discounted price</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Percentage off</label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                
                <div class="col-12  mb-3">
                    <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-outline-primary">Add</button>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header text-center"> Stock Managment</h5>
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
                                <th scope="col">Quantity</th>
                                <th scope="col">Edit</th>
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
                                <td id="quantity">3</td>
                                <td>
                                    
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-edit"></i></button>
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
@include('Components/adminpanel.footer')



