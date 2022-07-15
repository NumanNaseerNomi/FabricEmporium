@include('Components.header')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 border shadow px-3 py-4">
            <h2 class=" d-flex justify-content-center">Verify OTP</h2>
            <form action="{{ url('/verifyOTP') }}" method="post" class="row g-3">
                @csrf
                <input type="hidden" name="id" value="{{ Session::get('verifyOTP')->id }}" required>
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        A <strong>OTP</strong> has been sent to email <br/> <strong>{{ Session::get('verifyOTP')->email }}</strong>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="otp" class="form-label">Enter OTP</label>
                    <input type="password" name="otp" class="form-control" id="otp" required>
                </div> 
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('Components.footer')