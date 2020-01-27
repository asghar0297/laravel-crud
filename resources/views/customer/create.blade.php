@extends('layouts.app')
@section('title','Customer')

@section('content')

    <div class="row">
        <div class="col-12">
        
            <h1>Customer</h1>
            {{ Form::open(['route' => 'customer.store']) }}
            
               @include('customer.form')
                
                <input type="submit" class="btn btn-primary"/>
                @csrf

            {{ Form::close() }}
        </div>
    </div>    

   
@endsection    