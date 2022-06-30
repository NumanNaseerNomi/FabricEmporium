<div class="col-lg-3 col-md-6 col-sm-12  mb-4">
    <div class="card" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 18rem;">
        <img src="https://i.pinimg.com/236x/df/ed/00/dfed0051cf3051df61dfd545a50e02b2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title ">Card title</h5>
            <p class="card-text">
                <span class="text-decoration-line-through text-danger">PKR 15000</span>
                <span>PKR 10000</span>
            </p>
            <div class="input-group mb-3">
                <button class="btn btn-outline-primary" type="button" onclick='decrementValue("#quantity")'>-</button>
                <input type="number" id="quantity" class="form-control border-primary text-center" value="1" min="1">
                <button class="btn btn-outline-primary" type="button" onclick='incrementValue("#quantity")'>+</button>
            </div>
            <!-- <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="button">Show Detail</button>
            </div> -->
        </div>
    </div>
</div>