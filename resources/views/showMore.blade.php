@include('Components.header')
<div class="container">
    <div class="row mt-4 mb-4">
        <h2 class="page-title d-flex justify-content-center">{{ $products[0]->category }}</h2>
    </div>
	<div class="row">
        @foreach($products as $product)
            @include('Components.productItem')
            @include('Components.productDetail')
        @endforeach
    </div>
</div>
@include('Components.footer')