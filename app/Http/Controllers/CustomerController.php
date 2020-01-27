<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('auth')->except(['index']);
    }
    public function index()
    {
        $customers = Customer::paginate(6);
        $companies = Company::all();
        $counter = 1;
        return view('customer.index',compact('customers','companies','counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::pluck('name','id');
        return view('customer.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Customer::create($this->validateRequest());
        Session::flash('message','Data Submit Successfully');
        Session::flash('alert-class','alert-success');  
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $companies = Company::pluck('name','id');
        return view('customer.edit',compact('companies','customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($this->validateRequest());
        Session::flash('message','Data Update Successfully');
        Session::flash('alert-class','alert-success');
        return redirect('customer/'.$customer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        Session::flash('message','Data Deleted Successfully');
        Session::flash('alert-class','alert-danger');
        return redirect('customer');
    }

    public function validateRequest(){

        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'company_id' => 'required',
            'status' => 'required'
        ]);
        
    }
}
