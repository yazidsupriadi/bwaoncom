@extends('layout.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Travel Package {{$item->users->name}}</h1>
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
              <table class=" table table-bordered"> 
                <thead>
                  <tr>
                    <th>ID</th>
                    <td >{{$item->id}}</td>
                  </tr>
                  <tr>  
                   <th>Paket travel</th>
                    <td >{{$item->travel_package->title}}</td>
                   
                  </tr>
                  <tr> 
                       <th>Pembeli</th>
                    <td >{{$item->users->name}}</td>
                   
                   </tr>

                  <tr> 
                       <th>Visa</th>
                    <td >{{$item->additional_visa}}</td>
                   
                   </tr>

                  <tr> 
                       <th>Total transaksi</th>
                    <td >{{$item->transaction_total}}</td>
                   
                   </tr>

                  <tr> 
                       <th>Status Transaksi</th>
                    <td >{{$item->transaction_status}}</td>
                   
                   </tr>

                  <tr> 
                       <th>Pembelian</th>
                       <td>
                         
                         <table>  
                           <tr>
                             <th>ID</th>

                             <th>Nama</th>
                             <th>Nationality</th>
                             <th>Visa</th>
                             <th>Doe Passport</th>
                           </tr>
                          @foreach($item->transaction_details as $detail)
                           <tr>
                             <td>{{$detail->id}}</td>

                             <td>{{$detail->username}}</td>
                             <td>{{$detail->nationality}}</td>
                             <td>{{$detail->is_visa ? '30 Days ' : 'N/A'}}</td>

                             <td>{{$detail->doe_pasport}}</td>
                           </tr>
                           @endforeach
                         
                       </table>
                       </td>
                   </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
         
@endsection