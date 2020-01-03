@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery Travel </h1>
            <a href="{{route('gallery.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery Travel</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Travel</th>
                      <th>Images</th>
                      <th>Action</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @forelse($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->travel_package->title}}</td>
                      <td><img src="{{Storage::url($item->image)}}" width="150px" class="img-thumbnail" alt=""></td>
                      <td>
                        <a href="{{route('gallery.edit',$item->id)}}"  class="btn btn-info" title=""><i class="fas fa-pencil"></i>Edit</a>

                        <form action="{{route('gallery.destroy',$item->id)}}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                        </form>
                      </td>
                    </tr> 
                    @empty
                    <tr>
                      <td class="text-center" colspan="7">Data Kosong</td>
                    </tr> 
                    @endforelse
                  </tbody>



                </table>
              </div>
            </div>
          </div>
         
@endsection