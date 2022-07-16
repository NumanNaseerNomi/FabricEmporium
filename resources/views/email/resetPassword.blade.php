<img  src="{{ asset('images/logos/brandLogoBrown.png')}}" width="180px">
<h3>Hi {{ $configs->user->name }}!</h3>
<p>Welcome back to Fabric Emporium.</p>
<p>To reset your password please verify OTP.</p>
<p><strong>Your OTP is: </strong>{{ $configs->otp }}</p>