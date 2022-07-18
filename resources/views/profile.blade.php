@include('Components.header')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header"><i class="fal fa-user me-3"></i>My Profile</h5>
                <div class="card-body">
                    <form action="{{ url('/updateProfile') }}" method="post">
                        <div class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{Session::get('user')->name}}" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{Session::get('user')->email}}" class="form-control" required readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="number" value="{{Session::get('user')->contactNumber}}" name="contactNumber" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value="{{Session::get('user')->address}}" name="address" class="form-control" required>
                            </div>
                            <div class="col-12  mb-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header"><i class="fal fa-key me-3"></i>Change Password</h5>
                <div class="card-body">
                    <form action="{{ url('/updatePassword') }}" method="post" class="row g-3">
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
    </div>
</div>
@include('Components.footer')