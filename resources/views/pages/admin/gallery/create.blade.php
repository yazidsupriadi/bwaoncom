@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Gallery Package</h1>
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
              <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Travel</label>
                  <select name="travel_packages_id" class="form-control" >
                    <option value="">Select Travel</option>
                    @foreach($travel_package as $tp)
                    <option value="{{$tp->id}}">{{$tp->title}}</option>}
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="image" placeholder="iamage" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         
@endsection