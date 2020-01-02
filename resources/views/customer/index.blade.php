@extends('layout.master')
@section('title','Customer')

@section('content')

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
            </tr>
        </thead>
        <tbody>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{ $customer->name  }}</td>
                        <td>{{ $customer->email  }}</td>
                        <td>{{ $customer->company->name }}</td>
                        <td>{{ $customer->status }}</td>
                    </tr>
                @endforeach
            
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