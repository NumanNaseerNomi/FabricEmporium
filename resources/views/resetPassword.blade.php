@include('Components.header')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 border shadow px-3 py-4">
            <h2 class=" d-flex justify-content-center">Reset Password</h2>
            @if(empty(Session::get('setPassword')))
                <form action="{{ url('/sendResetPasswordEmail') }}" method="post" class="row g-3">
                    <div class="col-md-12">
                        <label for="email" class="form-label">Enter Your Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </div>
                    </div>
            @else
                <form action="{{ url('/setPassword') }}" method="post" class="row g-3">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            A <strong>OTP</strong> has been sent to email <br/> <strong>{{ Session::get('userData')->email }}</strong>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ Session::get('userData')->id }}" required>
                    <div class="col-md-12">
                        <label for="otp" class="form-label">Enter OTP</label>
                        <input type="password" name="otp" class="form-control" required>
                    </div> 
                    <div class="col-md-12">
                        <label for="password" class="form-label">Enter New Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
            @endif
                    @csrf
                    <hr/>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-primary" href="{{ url('/login') }}" role="button">Login</a>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-primary" href="{{ url('/register') }}" role="button">Register</a>
                    </div>
                </form>
        </div>
    </div>
</div>
@include('Components.footer')