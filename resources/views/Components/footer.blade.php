		<div class="container-fluid bg-clr">
			<div class="container pt-4 pb-4">
				<div class="row border-bottom px-4 py-5">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 center">
						<div class="footer-logo">
							<a href="{{ url('/') }}"><img class="logo" src="{{ asset('images/logos/footerLogo.png')}}"></a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="footer-heading ">
							<h4 class="text-white">Get In Touch</h4>
							<div class="footer-address">
								<p class="text-white fs-6">Address<br />
									<span class="text-white font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</span>
								</p>
								<p class="text-white fs-6">Phone<br />
									<span class="text-white font">042-7383839</span>
								</p>
								<p class="text-white fs-6">Email<br />
									<span class="text-white font">abc@gmail.com</span>
								</p>
							</div>
						</div>	
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
						<div class="footer-heading ">
							<h4 class="text-white">Site Links</h4>
							<ul class="type lh-lg">
								<li class="text-white">Home</li>
								<li class="text-white">About</li>
								<li class="text-white">Contact</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="Social-links d-flex">
							<a class="links" href="{{ url('#') }}"><i class="fs-4 text-white link fab fa-instagram"></i></a>
							<a class="links" href="{{ url('#') }}"><i class="fs-4 text-white link fab fa-facebook-f"></i></a>
							<a class="links" href="{{ url('#') }}"><i class="fs-4 text-white link fab fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="row pt-3">
					<div class="copyright d-flex justify-content-between">
						<p class="text-white">&copy Copright 2022</p>
						<p class="text-white">All rights are reserved</p>
					</div>
				</div>
			</div>
		</div> 
	</body>
	<script src="{{asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- <script src="{{asset('js/main.js') }}"></script> -->
</html>

<script>
    function incrementValue(argument)
    {
        document.querySelector(argument).value++;
    }

    function decrementValue(argument)
    {
        let element = document.querySelector(argument);
        
        if(element.value>1)
        {
            element.value--;
        }
    }
</script>