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

                    <tr>
                        <td>{{ $customer->name  }}</td>
                        <td>{{ $customer->email  }}</td>
                        <td>{{ $customer->company->name }}</td>
                        <td>{{ $customer->status }}</td>
                    </tr>
               
        </tbody>
        </table>
    </div>
</div>
  

@endsection