@include('front.header')
<div class="page-title-area item-bg-6">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="{{url('/')}}">
								Home
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="section-title">
							<h2>Write Us</h2>
							<p>We will be happy to answer you</p>
						</div>
					</div>
				</div>
				<form id="contactForm">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your Email</label>
								<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Your Phone</label>
								<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Your Message</label>
								<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<button type="submit" class="default-btn">
								<span>Send Message</span>
							</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Contact Info Area -->
		<section class="contact-info-area pb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="section-title">
							<h2>Contact</h2>
							<p>Whatever your needs, we're looking forward to hearing from you.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="contacts-info">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<ul class="contacts-text">
										<li>
											<i class="fa fa-phone"></i>
											<span>Phone</span>
											<a href="tel:+25462755">+25462755, 265497466</a>
										</li>
										<li>
											<i class="fa fa-envelope"></i>
											<span>Email</span>
											<a href="mailto:giano@gmail.com">giano@gmail.com</a>
										</li>
										<li>
											<i class="fa fa-map-marker"></i>
											<span>Address</span>
											<a href="contact.html">25 Street, west Cruch, Newzeland</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<div class="contact-map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946234!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1571633944171!5m2!1sen!2sbd"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@include('front.footer')