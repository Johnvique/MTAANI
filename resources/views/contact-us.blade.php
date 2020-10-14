@extends('layouts.frame')
@section('frame')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Get In Touch</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Connect With  Us <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper px-md-4">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Main  Office Address:</span> Mtaani-Tech Hub Limited,<br>
										P.O Box 22-40300, <br>
									Homa Bay,Kenya. </p>
									</div><br>

									<div class="text">
										<p><span>Branch Address :</span>
										P.O Box 236-40222, <br>
									Oyugis,Kenya. </p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Call:</span> <a href="{{url('tel://+254712220054')}}">+254712220054</a></p><br>
										<p><span>Whatsapp:</span> <a href="{{url('tel://1234567920')}}">+ 1235 2355 98</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Inquiry:</span> <a href="{{url('mailto:info@mtaanitech-hub.co.ke')}}">info@mtaanitech-hub.co.ke</a></p>
										<p><span>Training:</span> <a href="{{url('mailto:career@mtaanitech-hub.co.ke')}}">career@mtaanitech-hub.co.ke</a></p>
										<p><span>General:</span> <a href="{{url('mailto:mtaanitech2019@gmail.com')}}">mtaanitech2019@gmail.com</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Website</span> <a href="{{url('http://mtaanitech-hub.co.ke/')}}">www.mtaanitech-hub.co.ke</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="10" rows="2" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 order-md-first d-flex align-items-stretch">
								<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.575916137517!2d34.50600191487242!3d-0.6315872354408052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d4cd42dd7b9aaf%3A0x4039fb8b3912f51d!2sMtaani-Tech%20Hub%20Limited!5e0!3m2!1sen!2ske!4v1599295915137!5m2!1sen!2ske" width="400" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection