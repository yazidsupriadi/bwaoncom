@extends('layout.app')

@section('content')
	<main>
		<section class="section-details-header"></section>
		<section class="section-details-content">
			<div class="container">
				<div class="row">
					<div class="col p-0">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="" title="">Paket Travel</a></li>
								<li class="breadcrumb-item active"><a href="" title="">Details</a></li>
							</ol>
						</nav>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8 pl-lg-0">
						<div class="card card-details">
							<h1>Nusa Penida</h1>
							<P>Republic of Indonesia</P>
							<div class="gallery">
									<div class="xzoom-container">
										<img src="frontend/images/content/user1.jpg" alt="" class="xzoom" id="xzoom-default" xoriginal = "frontend/images/content/user1.jpg">
									</div>
									<div class="xzoom-thumbs">
										<a href="" title="">
											<img src="frontend/images/content/user1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a>
										<a href="" title="">
											<img src="frontend/images/content/user1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a><a href="" title="">
											<img src="frontend/images/content/user1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a><a href="" title="">
											<img src="frontend/images/content/user1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a><a href="" title="">
											<img src="frontend/images/content/user1.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a>
									</div>
							</div>
							<h3>Detail Wisata</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							<div class="features row">
								<div class="col-md-4">
									<img src="frontend/images/content/logo1.png" alt="" width="20px"class="features-image">
									<div class="description">
										<h4> Featured Event</h4>
										<p> Tari Kecak</p>		
									</div>		
								</div>	
								<div class="col-md-4">

									<img src="frontend/images/content/logo2.png"he alt="" class="features-image">
										<div class="description">
										<h4> Language</h4>
										<p> Bahasa Indonesia</p>		
									</div>	
								</div>	
								<div class="col-md-4">

									<img src="frontend/images/content/logo3.png" alt="" class="features-image">
										<div class="description">
										<h4> Local Foods</h4>
										<p> Makanan Bali</p>		
									</div>	
								</div>	
							</div>
					
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-details card-right">
							<h2> Members are going</h2>
							<div class="members my-2">
								<img src="frontend/images/content/user2.jpg" class="member-image" alt="">
								<img src="frontend/images/content/user2.jpg" class="member-image" alt=""><img src="frontend/images/content/user2.jpg" class="member-image" alt=""><img src="frontend/images/content/user2.jpg" class="member-image" alt=""><img src="frontend/images/content/user2.jpg" class="member-image" alt="">	
							</div>

							<hr>
							<h2>Trip Information</h2>

							<table class="trip-information">
									<tr>
										<th width="50%">Date Of Deaparture</th>
												<td width="50%" class="text-right">23, August 2019</td>
								
									</tr>
										<tr>
										<th width="50%">Duration</th>
												<td width="50%" class="text-right">2 Hours</td>
								
									</tr>
									<tr>
										<th width="50%">Type </th>
												<td width="50%" class="text-right">Open Trip</td>
								
									</tr>
									<tr>
										<th width="50%">Price</th>
												<td width="50%" class="text-right">$80/person</td>
								
									</tr>
								
								
							</table>
						</div>
						<div class="join-container">
							<a href="" title="" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection