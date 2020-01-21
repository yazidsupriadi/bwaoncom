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
              <form action="{{route('transaction.update',$item->id)}}" method="post" >
                
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Status</label>
                  <select name="travel_status" class="form-control">
                    <option value="{{$item->travel_status}}">JANGAN DIUBAH ({{$item->travel_status}})</option>
                    <option value="IN_CART">IN CART</option>
                    <option value="SUCCESS" >SUCCESS</option>
                    <option value="CANCEL">CANCEL</option>}
                    <option value="PENDING">PENDING</option>
                    <option value="FAILED">FAILED</option>}
                    option
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
         
@endsection