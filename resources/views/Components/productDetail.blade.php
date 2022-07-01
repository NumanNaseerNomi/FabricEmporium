<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Card title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mx-4">
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid" src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg">
                    </div>
                    <div class="col-12 col-lg-6">
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
                            
                        </div>
                        <div class="cart-section pt-4 ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity")'>-</button>
                                        <input type="number" id="quantity" class="form-control border-primary text-center" value="1" min="1">
                                        <button class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity")'>+</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="btn-group">
                                        <a href="{{ url('/myBag') }}" class="btn btn-outline-success">Add to Cart</a>
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
</script>