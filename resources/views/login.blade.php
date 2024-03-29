@include('Components.header')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 border shadow px-3 py-4">
            <h2 class=" d-flex justify-content-center">Login</h2>
            <form action="{{ url('/login') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div> 
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <a href="{{ url('/resetPassword') }}" class="text-decoration-none">Forgot Password? Reset</a>
                <hr/>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-outline-primary" href="{{ url('/register') }}" role="button">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@include('Components.footer')