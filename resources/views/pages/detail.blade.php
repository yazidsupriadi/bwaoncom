@extends('layout.checkout')

@section('title')

	Detail Travel
@endsection
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
							<h1>{{$items->title}}</h1>
							<P>{{$items->location}}</P>
							<div class="gallery">
									<div class="xzoom-container">
										<img src="{{Storage::url($items->galleries->first()->image)}}" alt="" class="xzoom" id="xzoom-default" xoriginal = "{{Storage::url($items->galleries->first()->image)}}">
									</div>
									<div class="xzoom-thumbs">
									@foreach($items->galleries as $gallery)
										<a href="" title="">
											<img src="{{Storage::url($gallery->image)}}" class="xzoom-gallery" width="128" xpreview="frontend/images/content/user1.jpg">	
										</a>
									@endforeach
									</div>
							</div>
							<h3>Detail Wisata</h3>
							<p>{{$items->about}}</p>

							<div class="features row">
								<div class="col-md-4">
									<img src="{{url('frontend/images/content/logo1.png')}}" alt="" width="20px"class="features-image">
									<div class="description">
										<h4> Featured Event</h4>
										<p> {{$items->featured_event}}</p>		
									</div>		
								</div>	
								<div class="col-md-4">

									<img src="{{url('frontend/images/content/logo2.png')}}"he alt="" class="features-image">
										<div class="description">
										<h4> Language</h4>
										<p> {{$items->language}}</p>		
									</div>	
								</div>	
								<div class="col-md-4">

									<img src="{{url('frontend/images/content/logo3.png')}}" alt="" class="features-image">
										<div class="description">
										<h4> Local Foods</h4>
										<p> {{$items->foods}}</p>		
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
												<td width="50%" class="text-right">{{\Carbon\Carbon::create($items->departure_date)->format('F n, Y')}}</td>
								
									</tr>
										<tr>
										<th width="50%">Duration</th>
												<td width="50%" class="text-right">{{$items->duration}} </td>
								
									</tr>
									<tr>
										<th width="50%">Type </th>
												<td width="50%" class="text-right">{{$items->type}}</td>
								
									</tr>
									<tr>
										<th width="50%">Price</th>
												<td width="50%" class="text-right">Rp. {{$items->price}},00/person</td>
								
									</tr>
								
								
							</table>
						</div>
						<div class="join-container">
							@auth
							<form action="{{route('checkout',$items->id)}}" method="POST" accept-charset="utf-8">
								@csrf
									<button class="btn btn-block btn-join-now mt-3 py-2" style="background-color: #ffa621; color: #fff;">Join Now</button>
								
								
							</form>
							@endauth

							@guest
									<a href="{{route('login')}}" title="" class="btn btn-block btn-join-now mt-3 py-2 btn-danger" style=" color: #fff;">Join Now</a>
						

							@endguest
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection