<div class="col-lg-3 col-md-6 col-sm-12  mb-4">
    <div class="card position-relative" style="width: 18rem;">
        <img src="{{ asset('storage/images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
        <div class="card-body text-center bg-white">
            @if($product->discount > 0)
                <div class="bg-danger text-white fw-bold position-absolute top-0 start-0 p-1 m-1 rounded">{{ $product->discount }}% OFF</div>
            @endif
            <button type="button" class="btn btn-danger position-absolute top-0 end-0 m-1" onClick="addToMyWishlist({{ $product->id }})">
                <i class="far fa-heart" ></i>
            </button>
            <h5 class="card-title">{{ $product->title }}</h5>
            <p class="card-title">{{ $product->brand }}</p>
            <p class="card-text">
                @if($product->discount > 0)
                    <span class="text-decoration-line-through text-danger">PKR {{ $product->price }}</span>
                @endif
                <span>PKR {{ ceil($product->price - (($product->price * $product->discount) / 100)) }}</span>
            </p>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="button" role="button" data-bs-toggle="modal" data-bs-target="#product{{ $product->id }}Modal">Show Detail</button>
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