                @csrf
                <div class="form-group">
                    <label >Customer Name</label>
                    {{ Form::text('name' ,null , ['class' => 'form-control'] ) }}
                    <div>{{$errors->first('name')}}</div>
                </div>
                
                <div class="form-group">
                    <label >Customer Email</label>
                    {{ Form::email('email' ,null , ['class' => 'form-control'] ) }}
                    <div>{{$errors->first('email')}}</div>
                </div>
        
               <div class="form-group">
                    <label for="">Company </label>
                        {{Form::select('company_id', $companies,null, ['placeholder' => 'Select Company' , 'class' => 'form-control'])}}
                        <div>{{$errors->first('company_id')}}</div>
                </div>

                

                <div class="form-group">
                    <label for="">Status</label>
                    {{Form::select('status', ['0' => 'Inactive' , '1' => 'Active'], null, ['placeholder' => 'Select Status' , 'class' => 'form-control'])}}
                    <div>{{$errors->first('status')}}</div>
                </div>
