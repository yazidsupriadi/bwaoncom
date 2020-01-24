@extends('layout.detail')
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
								<li class="breadcrumb-item "><a href="" title="">Details</a></li>
								<li class="breadcrumb-item active"><a href="" title="">Checkout</a></li>
						
							</ol>
						</nav>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8 pl-lg-0">
						<div class="card card-details">
							<h1>Who is Going ?</h1>
							<P>Trip to  {{$items->travel_package->title}},{{$items->travel_package->location}}</P>

							<div class="attender ml-3 mr-auto">
								
								<table class="table table-responsive text-center align-content-center">
									
									<thead>
										<tr>
											<td>Photo</td>
											<td>Name</td>
											<td>Nationality</td>
											<td>Visa</td>
											<td>Pasport</td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										@forelse($items->transaction_details as $details)	
										<tr>
											<td> 
												<img src="https://ui-avatars.com/api/?name={{$details->username}}" alt="" class="rounded-circle">
											</td>
											<td class="align-middle">{{$details->username}}</td>

											<td class="align-middle">{{$details->nationality}}</td>
											<td class="align-middle">{{$details->is_visa ? '30 Days' : 'N/A'}}</td>
											<td class="align-middle">{{\Carbon\Carbon::createFromDate($details->doe_pasport) > \Carbon\Carbon::now() ? 'Active' : 'In Active'}}</td>
											<td class="align-middle"><a href="{{route('checkout-remove',$details->id)}}" title=""> X </a></td>
										</tr>
										@empty
										<td> No Visitor</td>

										@endforelse

									</tbody>

								</table>
							</div>
							 <div class="member mt-3">
							 	
							 	<h5 class="ml-4">Add Member</h5>
							 	<form action="{{route('checkout-create',$items->id)}}" method="POST" accept-charset="utf-8" class="form-inline">
							 		@csrf
							 		<label class="sr-only">Name</label>
							 		<input type="text"  class=" form-control ml-2 mr-10" id="inputusername" name="username" placeholder="Masukan username..">
							 		
							 		<label class="sr-only">Visa</label>

							 		<select name="is_visa" class="custom-select mb-2 mt-sm-2 mr-2">
							 			<option value="" Selected> Visa</option>
							 			<option value="1"> 30 Days</option>
							 			<option value="0"> N/A</option>
							 			
							 		</select>

							 		<label class=""><span class="text-sm-center mr-2 font-weight-bold">DOE Pasport</span></label>
							 		<input type="date"  class=" form-control ml- 10mr-2" id="inputusername" name="doe_pasport" placeholder="Masukan username..">
							 		<br>	

							 		<label class=""><span class="text-sm-center mr-2 font-weight-bold">Nationality</span></label>
							 		<input type="text"  class=" form-control mr-2 mr-4" id="inputusername" name="nationality" placeholder="Masukan nationality..">
							 		
							 		<button type="submit" class="btn btn-add-now mb-2 px-4" style="	background-color: #071C4D;
										color: #fff;"	>
							 			
							 			ADD NOW
							 		</button>

								</form>

								<h3 class="ml-4"> NOTE</h3>
								<p class="disclaimer mb-0 text-muted ml-4" style="font-size: 14px;"> Jika ada yg ditanya hubungi 0910919091 </p>

							 </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-details card-right">
							
							<hr>
							<h2>Trip Information</h2>

							<table class="trip-information">
									<tr>
										<th width="50%">Members</th>
												<td width="50%" class="text-right">{{$items->transaction_details->count()}} person </td>
								
									</tr>
										<tr>
										<th width="50%">Additional Visa</th>
												<td width="50%" class="text-right">{{$items->additional_visa}}</td>
								
									</tr>
									<tr>
										<th width="50%">Trip Price </th>
												<td width="50%" class="text-right">{{$items->travel_package->price}}/ person</td>
								
									</tr>
									<tr>
										<th width="50%">Sub Total</th>
												<td width="50%" class="text-right">{{$items->transaction_total}}/person</td>
								
									</tr>
											<tr>
										<th width="50%"> Total (+ unique code)</th>
												<td width="50%" class="text-right"><span class="text-primary">{{$items->transaction_total}}</span>,<span class="text-danger">{{mt_rand(0,99)}}</span></td>
								
									</tr>
								
								
							</table>
							<hr>

							<h2> Payment Instruction</h2>
							<p class="payment-instruction"> Please complete your payment</p>
							<div class="bank">
								
								<div class="bank-item pb-3">
								<img src="frontend/images/content/bank.jpg"  height="30px" alt="" style=" float: left;">
									<div class="description ml-4" style="margin-left: 10px; overflow: hidden; float: left;  ">
										<h3> Oncom Corp</h3>
										<p>9019091019
											<br>
										Bank Central Asia</p>

									</div>
									<div class="clearfix">
										
									</div>		
								</div>

								<div class="bank-item pb-3 ">
								<img src="frontend/images/content/bank.jpg"  height="30px" alt="" style="float: left; mr-5">
									<div class="description ml-4" style="margin-left: 10px; overflow: hidden; float: left;  ">
										<h3> Oncom Corp</h3>
										<p>9019091019
											<br>
										Bank Central Asia</p>

									</div>
									<div class="clearfix">
										
									</div>
								</div>
							</div>
						</div>
						<div class="join-container">
							<a href="{{route('checkout-success',$items->id)}}" title="" class="btn btn-block btn-join-now mt-3 py-2">Book Now</a>

							<a href="" title="" class="btn btn-block text-muted  py-2">Cancel book</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection