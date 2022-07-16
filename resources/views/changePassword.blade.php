@include('Components.header')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4 border shadow px-3 py-4">
            <h2 class="d-flex justify-content-center">Change Password</h2>
            <form action="{{ url('/login') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="oldPassword" class="form-label">Old Password</label>
                    <input type="password" name="oldPassword" class="form-control" required>
                </div> 
                <div class="col-md-12">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('Components.footer')