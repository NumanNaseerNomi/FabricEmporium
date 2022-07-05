<div class="col-lg-3 col-md-6 col-sm-12  mb-4">
    <div class="card position-relative" style="width: 18rem;">
        <img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center bg-white">
            @if(true)
                <div class="bg-danger text-white fw-bold position-absolute top-0 start-0 p-1 m-1 rounded">20% OFF</div>
            @endif
            <button type="button" class="btn btn-danger position-absolute top-0 end-0 m-1" onClick="addToMyWishlist(45)">
                <i class="far fa-heart" ></i>
            </button>
            <h5 class="card-title ">Card title</h5>
            <p class="card-text">
                @if(false)
                    <span class="text-decoration-line-through text-danger">PKR 15000</span>
                @endif
                <span>PKR 10000</span>
            </p>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="button" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Show Detail</button>
            </div>
        </div>
    </div>
</div>

<script>
    function addToMyWishlist(id)
    {
        alert(id + " is added to your wishlist, you can checkout later.");
    }
</script>