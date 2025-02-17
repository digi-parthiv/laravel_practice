@include('front.header')
<style type="text/css">
 	.section-top {
 		background: url('{{ url('assets/img/' . $Setting->testimonial_image) }}') no-repeat center center;
 	}
    
 </style>
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Register Page</h1>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li> / Register</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->


	<!-- START LOGIN AND REGISTER -->
	<section class="login_register section-padding">
		<div class="container">
			 <form action="{{url('RegisterUser')}}" id="contact-form" method="POST">
			 	@csrf
			<div class="row">				
				<div class="col-lg-6 offset-lg-3 col-xs-12">
					<div class="register">
						<h4 class="login_register_title">Create a new account:</h4>
						<div class="form-group">
							<label for="">Full Name</label>
							<input type="text" id="name" class=" form-control requiredField input-label" name="name">
							 @if ($errors->has('name'))
                                 <span class="text-danger">{{ $errors->first('name') }}</span>
                             @endif
						</div>
						<div class="form-group">
							<label for="">Email Address</label>
							<input type="email" id="email" class="form-control requiredField input-label" name="email" >
							@if ($errors->has('email'))
                                 <span class="text-danger">{{ $errors->first('email') }}</span>
                             @endif
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="number" id="phone_number" class=" form-control requiredField input-label" name="phone_number">
							@if ($errors->has('phone_number'))
                                 <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                             @endif
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" id="password" class="form-control requiredField input-label" name="password" >
							@if ($errors->has('password'))
                                 <span class="text-danger">{{ $errors->first('password') }}</span>
                             @endif
						</div>
						<div class="form-group">
							<label for="">Confirm Password</label>
							<input type="password" class="form-control requiredField input-label" id="confirm-password_confirmation" name="password_confirmation" >
							@if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
						</div>
						<div class="form-group col-lg-12">
							<button class="btn_one" type="submit" name="submit">Signup now</button>
						</div>
						<p>Already have an account? <a href="{{url('userlogin')}}">Login</a></p>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</form>
		</div><!--- END CONTAINER -->
	</section>
@include('front.footer')