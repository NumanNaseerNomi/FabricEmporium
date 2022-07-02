@if(count($banners))
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @for($i=0; $i<count($banners); $i++)
                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="{{ $i }}" class="@if($i==0) active @endif" aria-current="@if($i==0) true @endif" aria-label="Slide {{ $i+1 }}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @for($i=0; $i<count($banners); $i++)
                <div class="carousel-item @if($i==0) active @endif">
                    <img src="{{ asset($banners[$i]->image)}}" class="d-block w-100" alt="...">
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endif
