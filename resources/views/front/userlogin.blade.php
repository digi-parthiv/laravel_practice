@include('front.header')
<style type="text/css">
 	.section-top {
 		background: url('{{ url('assets/img/' . $Setting->testimonial_image) }}') no-repeat center center;
 	}
 	.ahover:hover{
 		color: #4d54fd;
 	}
    
 </style>
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Login</h1>
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li> / Login</li>
					</ul>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- START LOGIN -->
	<section class="login_register section-padding">
		<div class="container">
		<form action="{{url('user_login')}}" id="contact-form" method="POST">
			@csrf
			<div class="row">				
				<div class="col-lg-6 offset-lg-3 col-xs-12">
					<div class="login">
						<h4 class="login_register_title">Already a member? Sign in:</h4>
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" id="email" class=" form-control requiredField input-label" name="email">
							 @if ($errors->has('email'))
                                 <span class="text-danger">{{ $errors->first('email') }}</span>
                             @endif
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" id="password" class="form-control requiredField input-label" style="margin-bottom:unset;" name="password" >
							<div class="row">
                                        <div class="col-lg-6">
                                            <a class="ahover" href="{{ route('password.request') }}" title="Forgot Password?">Forgot Password?</a>
                                       </div>
                                   </div>
							@if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
						</div>
						<div style="padding-top: 20px;" class="form-group col-lg-12">
							<button class="btn_one" type="submit" name="submit">login</button>
						</div>
						<p>Don't have an account? <a href="{{url('userregister')}}">Register Now</a></p>
					</div>
				</div><!--- END COL -->	
			</div><!--- END ROW -->
		</form>
		</div><!--- END CONTAINER -->
	</section>
@include('front.footer')