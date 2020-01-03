@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Gallery </h1>
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
              <form action="{{route('gallery.update',$item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Travel</label>
                  <select name="travel_packages_id" class="form-control" >
                    <option value="{{$item->travel_packages_id}}">Jangan diubah</option>
                    @foreach($travel_package as $tp)
                    <option value="{{$tp->id}}">{{$tp->title}}</option>}
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="image" placeholder="image" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         
@endsection