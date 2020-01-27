@extends('layouts.app')
@section('title','Customer')

@section('content')

    <div class="row">
        <div class="col-12">
        
            <h1>Customer</h1>
           
            {{ Form::model( $customer , ['route' => ['customer.update',$customer->id]] ) }}
                @method('PATCH')
           
                @include('customer.form')

                
                
                {{ Form::submit('Update',['class' => 'btn btn-primary']) }}

           {{ Form::close() }}
        </div>
    </div>    

   
@endsection    