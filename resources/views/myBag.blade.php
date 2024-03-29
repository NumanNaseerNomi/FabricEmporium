@include('Components.header')
<div class="container ">
    <div class="row">
        <div class="col-12 col-md-5 mb-3">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-heart me-1"></i>My Wishlist</h5>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($myWishlist as $item)
                                <tr>
                                    <td >
                                        <img style="width:50px;" src="{{ asset('storage/images/products/' . $item->productDetail->image) }}" class="img-tmbnail">
                                    </td>
                                    <td>{{ $item->productDetail->title }}</td>
                                    <td>
                                        <span>PKR {{ $item->productDetail->getDiscountedPrice() }}</span>
                                        @if($item->productDetail->discount > 0)
                                            <br/>
                                            <span class="text-decoration-line-through text-danger">PKR {{ $item->productDetail->price }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-eye"></i></button> -->
                                        <!-- {{-- <button type="button" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></button> --}} -->
                                        <!-- <button type="button" class="btn btn-outline-success"><i class="fal fa-shopping-bag"></i></button> -->
                                        <div class="row">
                                            <div class="col m-0 p-0">
                                                <form class="m-0 p-0" method="post" action="{{ url('/addToShoppingBag') }}">
                                                    @csrf
                                                    <input type="number" name="id" value="{{ $item->id }}" hidden required />
                                                    <button type="submit" class="btn btn-outline-success"><i class="fal fa-shopping-bag"></i></button>
                                                </form>
                                            </div>
                                            <div class="col m-0 p-0">
                                                <form method="post" action="{{ url('/removeFromWishlist') }}">
                                                    @csrf
                                                    <input type="number" name="id" value="{{ $item->id }}" hidden required />
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fal fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7 mb-4">
            <div class="card" style="width:100% !important;">
                <h5 class="card-header"><i class="fal fa-shopping-bag"></i> My Bag</h5>
                <div class="card-body overflow-auto">
                    <table class="table table-bordered table-striped table-hover text-center align-middle table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $totalPrice = 0; @endphp
                            @foreach($bagItems as $item)
                                <tr>
                                    <td >
                                        <img style="width:50px;" src="{{ asset('storage/images/products/' . $item->productDetail->image) }}" class="img-tmbnail">
                                    </td>
                                    <td>{{ $item->productDetail->title }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        <span>PKR {{ $item->productDetail->getDiscountedPrice() }}</span>
                                        @if($item->productDetail->discount > 0)
                                            <br/>
                                            <span class="text-decoration-line-through text-danger">PKR {{ $item->productDetail->price }}</span>
                                        @endif
                                    </td>
                                    <td>PKR {{ $item->productDetail->getDiscountedPrice() }}</td>
                                    <!-- <td>PKR {{ ceil(($item->productDetail->price - (($item->productDetail->price * $item->productDetail->discount) / 100)) * $item->quantity) }}</td> -->
                                    <td>
                                        <!-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-eye"></i></button> -->
                                        <div class="row">
                                            <!-- <div class="col m-0 p-0">
                                                <form class="m-0 p-0" method="post" action="{{ url('/addToShoppingBag') }}">
                                                    @csrf
                                                    <input type="number" name="id" value="{{ $item->id }}" hidden required />
                                                    <button type="submit" class="btn btn-outline-success"><i class="fal fa-shopping-bag"></i></button>
                                                </form>
                                            </div> -->
                                            <div class="col m-0 p-0">
                                                <form method="post" action="{{ url('/removeFromShoppingBag') }}">
                                                    @csrf
                                                    <input type="number" name="id" value="{{ $item->id }}" hidden required />
                                                    <button type="submit" class="btn btn-outline-primary"><i class="fal fa-heart"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- @include('Components.productDetail') --}}
                                </tr>
                                @php $totalPrice = $totalPrice + $item->productDetail->getDiscountedPrice(); @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col" colspan="2">TOTAL:</th>
                                <th scope="col">{{ $bagItems->sum('quantity') }}</th>
                                <th scope="col">PKR {{ $totalPrice }}</th>
                                <th scope="col">PKR {{ $totalPrice }}</th>
                                <!-- <th scope="col">Total Price</th> -->
                                <th scope="col">
                                    <form method="post" action="{{ url('/checkout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Checkout</button>
                                    </form>
                                </th>
                            </tr>
                        </tfoot>
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
