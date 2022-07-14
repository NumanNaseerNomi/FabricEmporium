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
                            <h3>Fabric Name</h3>
                        </div>
                        <div class="type">
                            <h6>Stich.Unstich</h6>
                        </div>
                        <div class="price mb-2">
                            <h6>
                                @if($product->discount > 0)
                                    <span class="text-decoration-line-through text-danger">PKR {{ $product->price }}</span>
                                @endif
                                <span>PKR {{ ceil($product->price - (($product->price * $product->discount) / 100)) }}</span>
                            </h6>
                        </div>
                        <div class="description mb-3">
                            <h5 class="product-detail">Detail</h5>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="stock pb-4 border-bottom">
                            <h5>Availabilty : <span class="fs-6">In stock</span></h5>
                        </div>
                        <div class="cart-section pt-4 ">
                            <div class="row">
                                <!-- <div class="col-6">
                                    <div class="input-group mb-3">
                                        <p class="fs-5" > Add to bag</p>
                                        <button class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity")'>-</button>
                                        <input type="number" id="quantity" class="form-control border-primary text-center" value="1" min="1">
                                        <button class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity")'>+</button>
                                    </div> 
                                </div> -->
                                <div class="col-12">
                                    <div class="btn-group w-100">
                                        <button type="button" onclick="addToCart('6664', '#quantity')" class="btn btn-outline-success" data-bs-dismiss="modal" data-bs-target="#my-modal" aria-label="Close"><i class="fal fa-shopping-bag fs-5 mx-2"></i>Add to Bag</button>
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