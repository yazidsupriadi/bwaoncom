@extends('layout.app')

@section('title')
	Oncom Travel
@endsection
@section('content')

	<!-- header -->
	<header id="header" class="text-center">
		<h1> Explore your beautifull world <br> and make the unforgetable moment</h1>
		<p> you will see the moment <br> that you never forget 	</p>

		<a href="" title="" class="btn btn-get-started px-4 mt-4">Get Started</a>
	</header><!-- /header -->


	<main>
		<div class="container">
			<div class="section-stats row justify-content-center" id="stats">
				<div class="col-3 col-md-3 stats-detail">	
					<h2>20k</h2>
					<p>Members</p>
				</div>
				<div class="col-3 col-md-3 stats-detail">	
					<h2>15</h2>
					<p>Countries</p>
				</div><div class="col-3 col-md-3 stats-detail">	
					<h2>50k</h2>
					<p>Hotels</p>
				</div><div class="col-3 col-md-3 stats-detail">	
					<h2>100k</h2>
					<p>Partners</p>
				</div>
			</div>
		</div>

		<section class="section-popular" id="popular">
			<div class="container">

				<div class="row">
					<div class="col text-center section-popular-heading">
					 	<h2>Popular Wisata</h2>
					 	<p>Disini kami menyediakan wisata <br> yang indah dan menakjubkan</p>
					 </div> 
				</div>
			</div>
		</section>

		<section class="section-popular-content" id="popular-content">
			<div class="container">
				<div class="row section-popular-travel justify-content-center">
					
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column
						" style="background-image: url('frontend/images/content/popular1.jpg');">
							<div class="travel-country">
								Indonesia
							</div>
							<div class="travel-location">
								Jakarta,Indonesia
							</div>
							<div class="travel-button mt-auto">
								
								<a href="" title="" class="btn btn-travel-details px-4">View Details</a>

							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column
						" style="background-image: url('frontend/images/content/popular2.jpg');">
							<div class="travel-country">
								Malaysia
							</div>
							<div class="travel-location">
								Kuala Lumpur,Malaysia
							</div>
							<div class="travel-button mt-auto">
								
								<a href="" title="" class="btn btn-travel-details px-4">View Details</a>

							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column
						" style="background-image: url('frontend/images/content/popular3.jpg'); background-size: cover;">
							<div class="travel-country">
								Saudi Arabia
							</div>
							<div class="travel-location">
								Mecca,Saudi Arabia
							</div>
							<div class="travel-button mt-auto">
								
								<a href="" title="" class="btn btn-travel-details px-4">View Details</a>

							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="card-travel text-center d-flex flex-column
						" style="background-image: url('frontend/images/content/popular4.jpg');">
							<div class="travel-country">
								Germany
							</div>
							<div class="travel-location">
								Hamburg,Germany
							</div>
							<div class="travel-button mt-auto">
								
								<a href="" title="" class="btn btn-travel-details px-4">View Details</a>

							</div>
						</div>
					</div>


				</div>
			</div>
		</section>

		<section class="section-network" id="networks">
			
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>Our Networks</h2>
						<p>We collaborate with trusted company</p>
					</div>
					<div class="col-md-8 text-center">
						<img src="frontend/images/content/network1.jpg" height="80px" alt="">

						<img src="frontend/images/content/network2.jpg" height="80px" alt="">

						<img src="frontend/images/content/network3.jpg" height="80px" alt="">
					</div>
				</div>
			</div>

		</section>

		<section class="section-testimonial-heading" class="testimonial-heading">
			
			<div class="container">
				<div class="row">
				 	<div class="col text-center">
				 		<h2>They Are Loving Us</h2>
				 		<p>The unforgettable moments <br> that they are telling to us</p>
				 	</div>
				 </div> 
			</div>

		</section>

		<section class="section-testimonial-content" id="testimonialContent">
			<div class="container">
				<div class="row section-popular-travel justify-content-center">
					<div class="col-md-6 col-sm-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="frontend/images/content/user1.jpg" class=" mb-4 rounded-circle"alt="">
								<h3 class="mb-4">Maria</h3>
								<p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

								<hr>
								<p class="trip-to mt-2">Trip to Bandung</p>
							</div>
						</div>
						
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="frontend/images/content/user2.jpg" class=" mb-4 rounded-circle"alt="">
								<h3 class="mb-4">Desy</h3>
								<p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

								<hr>
								<p class="trip-to mt-2">Trip to Ubud</p>
							</div>
						</div>
						
					</div><div class="col-md-6 col-sm-6 col-lg-4">
						<div class="card card-testimonial text-center">
							<div class="testimonial-content">
								<img src="frontend/images/content/user3.jpg" class=" mb-4 rounded-circle"alt="">
								<h3 class="mb-4">Melody</h3>
								<p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

								<hr>
								<p class="trip-to mt-2">Trip to Lombok</p>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<a href="#" title="" class="btn btn-need-help px-4 mt-4 mx-1 border-dark">I Need Help</a>

						<a href="#" title="" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection