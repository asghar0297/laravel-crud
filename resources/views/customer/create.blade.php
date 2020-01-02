@extends('layout.master')
@section('title','Customer')

@section('content')

    <div class="row">
        <div class="col-12">
        
            <h1>Customer</h1>
            <form action="{{url('customer')}}" method="POST">
            
                <div class="form-group">
                    <label >Customer Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                    <div>{{$errors->first('name')}}</div>
                </div>
                
                <div class="form-group">
                    <label >Customer Email</label>
                    <input type="text" name="email" value="{{ old('email')  }}" class="form-control" />
                    <div>{{$errors->first('email')}}</div>
                </div>

                <div class="form-group">
                    <label for="">Company</label>
                    <select name="company_id" class="form-control" >
                        <option value="" disable>Select Company</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                        <div>{{$errors->first('status')}}</div>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control" >
                        <option value="" disable>Select Status</option>
                        <option value="1" >Active</option>
                        <option value="2" >Inactive</option>
                    </select>
                        <div>{{$errors->first('status')}}</div>
                </div>
                
                <input type="submit" class="btn btn-primary"/>
                @csrf

            </form>
        </div>
    </div>    

   
@endsection    