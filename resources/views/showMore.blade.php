@include('Components.header')
@include('Components.navbar')
<div class="container">
    <div class="row mb-4">
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4"><a href=""><img class="brand-logo" src="{{ asset('images/logos/brandLogoBrown.png')}}"></a></div>
    </div>
</div>
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="page-title d-flex justify-content-center"><h2>Brand Name</h2></div>
    </div>
	<div class="row">
        @for($i=0; $i<=9; $i++)
            @include('Components.productItem')
            @include('Components.productDetail')
        @endfor
    </div>
</div>
@include('Components.footer')