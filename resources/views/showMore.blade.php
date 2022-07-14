@include('Components.header')
@include('Components.navbar')
<!-- <div class="container">
    <div class="row mb-4">
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
    </div>
</div> -->
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