@extends('layouts.frame')
@section('frame')
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-8 ftco-animate mt-5 pt-md-5" data-scrollax=" properties: { translateY: '70%' }">
					<div class="row">
						<div class="col-md-7">
							<p class="mb-4 pl-md-5 line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We Are Experienced In <br>Every Kinds of Software Solution</p>
						</div>
					</div>
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome To Mtaani-Tech Hub!</h1>
					<p><a href="{{url('/about-us')}}" class="btn btn-primary px-4 py-3">Our History</a></p>
				</div>
			</div>
		</div>
	</div>
	
	<section class="ftco-intro">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-7">
					<div class="row no-gutters d-flex align-items-stretch">
						<div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="services-1">
								<div class="line"></div>
								<div class="icon"><span class="flaticon-web-programming"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Software Development </h3>
								</div>
							</div>      
						</div>
						<div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="services-1 color-1">
								<div class="line"></div>
								<div class="icon"><span class="flaticon-presentation"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Digital Marketing </h3>
								</div>
							</div>      
						</div>
						<div class="col-md-4 d-flex align-self-stretch ftco-animate">
							<div class="services-1 color-2">
								<div class="line"></div>
								<div class="icon"><span class="flaticon-stats"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Data Analysis </h3>
								</div>
							</div>      
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-lg-6 heading-section text-center ftco-animate">
					<h2 class="mb-4">Why <span>Mtaani-Tech</span> Hub?</h2>
					<p>The hub is well equipped with highly talented,innovative and hardworking team from institutions of higher learning who are well versed and knowledgeable with modern programming skills,architectural and design skills,Data collection and Analysis Skills as well as Academic research and writing skills.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="services-2 text-center">
						<div class="icon">
							<span class="flaticon-handshake"></span>
						</div>
						<div class="text">
							<h3>Charity Work</h3>
							<p>Besides technological skills, the hub takes part in giving back to the society by participating in some of the important community services such as charity work,children welfares,taking part in youth mentorship programmes as well as counselling services as a way of bringing hopes to the less fortunate individuals and those with psychological trauma in the society.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="images/services.svg" class="img-fluid" alt="">
				</div>
				<div class="col-md-4">
					<div class="services-2 text-center">
						<div class="icon">
							<span class="flaticon-art"></span>
						</div>
						<div class="text">
							<h3>Art Work </h3>
							<p>The art work is also part and parcel of Mtaani-Tech hub. We design attractive and eye appealing Bronchures, Logos, Business Cards,adverts,posters and signboards through Graphic designig skills as well as architectural drawings. Finally,The hub also offers the basic secretarial services,online application services at pocket friendly prices.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="section-counter">
		<div class="container">
			<div class="row no-gutters d-flex">
				<div class="col-md-6 d-flex">
					<div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
				</div>
				<div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section heading-section-white ftco-animate">
							<h2 class="mb-4">Message From <span>Developers</span></h2>
							<p>The type of kick one gets from writing code is not one that can be explained by words. Usually, your passion keeps you going despite the many challenges ranging from hindering factors such as bugs and fatigue. Personally, what fascinates me most is the broad extent of diversity in the single field of computing. The flexibility of the profession also makes it the only thing that can satisfy the urge of mystery and fulfill the experience of twists.
							  </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="120">0</strong>
									<span>Project Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="65">0</strong>
									<span>Happy Clients</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="8">0</strong>
									<span>Business Partners</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
							<div class="block-18 mb-4">
								<div class="text">
									<strong class="number" data-number="5">0</strong>
									<span>Year of Experience</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Our Gallery</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text text-center">
						</div>
						<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text text-center">
						</div>
						<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text text-center">
						</div>
						<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<div class="img">
							<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
						</div>
						<div class="text text-center">
						</div>
						<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<section class="ftco-section ftco-no-pb testimony-section" style="background-image: url(images/bg_1.jpg);">
		<div class="overlay-1"></div>
		<div class="container-fluid">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2 class="mb-4">Testimonials</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12 testimonial">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(images/testimony-1.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Donna Scott</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(images/testimony-2.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(images/testimony-3.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(images/testimony-4.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex align-items-stretch" style="background-image: url(images/testimony-5.jpg);">
								<div class="overlay"></div>
								<div class="text">
									<div class="line"></div>
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Roger Scott</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 half ftco-animate">
					<h2 class="mb-4">Don't hesitate to contact us</h2>
					<form action="#" class="appointment">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Services</option>
												<option value="">Web Development</option>
												<option value="">Database Analysis</option>
												<option value="">Server Security</option>
												<option value="">UX/UI Strategy</option>
												<option value="">Branding</option>
												<option value="">Applications</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection