@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Travel Package {{$item->title}}</h1>
          </div>

          @if($errors ->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>


          @endif
          <!-- Content Row -->
          <div class="card-shadow">
            <div class="card-body">
              <form action="{{route('travel-package.update',$item->id)}}" method="post" >
                
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" placeholder="title" value="{{$item->title}}">
                </div>
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" class="form-control" name="location" placeholder="Location" value="{{$item->location}}">
                </div>
                <div class="form-group">
                  <label>About</label>
                  <textarea name="about" rows="10" class=" w-100 form-control">{{$item->about}}</textarea>
                </div>

                <div class="form-group">
                  <label>Featured Events</label>
                  <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{$item->featured_event}}">
                </div>

                <div class="form-group">
                  <label>Language</label>
                  <input type="text" class="form-control" name="language" placeholder="Language" value="{{$item->language}}">
                </div>


                <div class="form-group">
                  <label>Foods</label>
                  <input type="text" class="form-control" name="foods" placeholder="foods" value="{{$item->foods}}">
                </div>
                <div class="form-group">
                  <label>Departure Date</label>
                  <input type="date" class="form-control" name="departure_date"  value="{{$item->departure_date}}">
                </div>
                <div class="form-group">
                  <label>Duration</label>
                  <input type="text" class="form-control" name="duration" placeholder="duration" value="{{$item->duration}}">
                </div>
                <div class="form-group">
                  <label>Type</label>
                  <input type="text" class="form-control" name="type" placeholder="Type" value="{{$item->type}}">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         
@endsection