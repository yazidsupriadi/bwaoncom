@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Travel Package</h1>
           
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
                      <th>User</th>
                      <th>Visa</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr> 
                  </thead>
                  <tbody>
                    @forelse($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->travel_package->title}}</td>
                      <td>{{$item->users->name}}</td>
                      <td>{{$item->additional_visa}}</td>
                      <td>{{$item->transaction_total}}</td>
                      <td>{{$item->travel_status}}</td>
                      <td>

                        <a href="{{route('transaction.show',$item->id)}}"  class="btn btn-primary" title=""><i class="fas fa-eye"></i>Edit</a>
                        <a href="{{route('transaction.edit',$item->id)}}"  class="btn btn-info" title=""><i class="fas fa-pencil"></i>Edit</a>

                        <form action="{{route('transaction.destroy',$item->id)}}" method="post" class="d-inline">
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