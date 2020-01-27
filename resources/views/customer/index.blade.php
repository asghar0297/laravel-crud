@extends('layouts.app')
@section('title','Customer')

@section('content')
<style>
.btn-group button {
  color: white; /* White text */
  padding: 10px 24px ; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

</style>
<div class="row pt-3">
    <div class="col-md-12">
    <h1>Customer List</h1>
    <a href="customer/create" class="btn btn-primary">Add New Customer</a>
        <table class="table table-hover mt-3">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th>Email</th>
            <th scope="col">Company</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
      
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{ $customer->name  }}</td>
                        <td>{{ $customer->email  }}</td>
                        <td>{{ $customer->company->name }}</td>
                        <td>{{ ($customer->status == '1') ? 'Active' : 'Inactive' }}</td>
                        <td>
                          <div class="btn-group" style="width:100%">
                            <a href="{{route('customer.edit',$customer->id)}}" class="btn btn-sm btn-outline-primary " >Edit</a>
                            <a href="{{route('customer.show',$customer->id)}}" class="btn btn-sm btn-outline-warning " >Show</a>
                            {{ Form::open( ['route' => ['customer.destroy' , $customer->id]] )}}
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger" style="float:left" >Delete</button>
                            {{ Form::close() }}
                         </div>
                        </td>
                    </tr>
                    
                @endforeach
                    <tr class="text-center d-flex ">
                        <td colsapn="5"class="justify-content-center" >{{  $customers->links()}}</td>
                    </tr>
            
        </tbody>
        </table>
    </div>
</div>
        
    <!-- <div class="row">
        <div class="col-md-12">
            
            @foreach($companies as $company)
            <h3>{{$company->name}}</h3>
                @foreach($company->customers as $customer)
                    <li>{{$customer->name}}</li>
                @endforeach
            @endforeach
            
        </div>
    </div> -->

@endsection