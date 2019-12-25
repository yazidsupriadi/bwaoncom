@extends('layout.success')
@section('content')
	
	<main class="mt-5 ">
		<div class="section-success d-flex align-items-center-center">
			<div class="col text-center">
			<img src="{{url('frontend/images/content/logo4.png')}}" alt="" height="100px" width="100px">
			<h1>Yay ,Success!</h1>
			<p> We have sent you an email </p>
			<br>
			<p>Please read it as well </p>
			<a href="" title="" class="btn btn-primary">Go To Homepage</a>
			</div>
		</div>
	</main>
@endsection