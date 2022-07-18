<div class="modal fade" id="product{{ $product->id }}Modal" tabindex="-1" aria-labelledby="product{{ $product->id }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="product{{ $product->id }}ModalLabel">{{ $product->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mx-4">
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid" src="{{ asset('storage/images/products/' . $product->image) }}">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="name">
                            <h3>{{ $product->title }}</h3>
                        </div>
                        <div class="type">
                            <h6><strong>Brand:</strong></h6>
                            <h6>{{ $product->brand }}</h6>
                        </div>
                        <div class="price mb-2">
                            <h6><strong>Price:</strong></h6>
                            <h6>
                                @if($product->discount > 0)
                                    <span class="text-decoration-line-through text-danger">PKR {{ $product->price }}</span>
                                @endif
                                <span>PKR {{ ceil($product->price - (($product->price * $product->discount) / 100)) }}</span>
                            </h6>
                        </div>
                        <div class="description mb-3">
                            <h6><strong>Detail:</strong></h6>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div>
                            <h6><strong>Availability:</strong></h6>
                            <h6>
                                @if($product->quantity > 0)
                                    <span class="text-primary">In stock</span>
                                @else
                                    <span class="text-danger">Out of stock</span>
                                @endif
                            </h6>
                        </div>
                        <!-- <div class="cart-section pt-4 ">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <p class="fs-5" > Add to bag</p>
                                        <button class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity")'>-</button>
                                        <input type="number" id="quantity" class="form-control border-primary text-center" value="1" min="1">
                                        <button class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity")'>+</button>
                                    </div> 
                                </div>
                                <div class="col-12">
                                    <div class="btn-group w-100">
                                        <button type="button" onclick="addToCart('6664', '#quantity')" class="btn btn-outline-success" data-bs-dismiss="modal" data-bs-target="#my-modal" aria-label="Close"><i class="fal fa-shopping-bag fs-5 mx-2"></i>Add to Bag</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="accordion container pb-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button  p-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fal fa-comments me-2"></i><strong>Comments</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form method="post" action="test">
                                    <div class="input-group mb-3">
                                        <textarea type="text" class="form-control" rows="1" placeholder="Type your commnet here..." aria-label="Comment" aria-describedby="button-addon2"></textarea>
                                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Send</button>
                                    </div>
                                </form>
                                <div class="overflow-auto" style="height: 150px;">
                                    <p><span class="shadow-sm p-1 bg-light border rounded"><strong>User Name: </strong>Regular shadow</span></p>
                                    <p><span class="shadow-sm p-1 bg-light border rounded"><strong>User Name: </strong>Regular shadow Regular shadow Regular shadow Regular shadow Regular shadow Regular shadow </span></p>
                                    <p><span class="shadow-sm p-1 bg-light border rounded"><strong>User Name: </strong>Regular shadow</span></p>
                                    <p><span class="shadow-sm p-1 bg-light border rounded"><strong>User Name: </strong>Regular shadow</span></p> 
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
    function addToCart(productID, quantity)
    {

        console.log(productID, document.querySelector(quantity).value);

        const data = { username: 'example' };

        fetch('/addToCart',
            {
                method: 'GET', // or 'PUT'
                headers: {'Content-Type': 'application/json',},
                body: JSON.stringify(data),
            }
        )
        .then(response => response.json())
        .then(data => {
        console.log('Success:', data);
        })
        .catch((error) => {
        console.error('Error:', error);
        });
        // alert("addToCartButton");
    }
</script>
<!-- <script>
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
</script> -->