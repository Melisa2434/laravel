<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() 
    {
        $customers = Customer::all();
       //return view('customers.list' , compact('customers'));
       return response()->json($customers);
    }


    public function create() 
    {

        return view('customers.create');

    }

    public function store(Request $request) 
    {

        //dd($request->post());

        $customer = Customer::create([
            'name' => $request->post('name'),
            'surname' => $request->post('surname'),
            'birtYear' => $request->post('birthYear'),
            'gender' => $request->post('gender'),
            'address' => $request->post('adress'),
        ]);

        //return response()->json($customer);

        return response()->json(true);

        //return view('customers.list');
        //return redirect()->route('customers.index');

       // Customer::create($request->post());

    }

    public function show(Customer $customer) 
    {
        //
    }

    public function edit(Customer $customer) 
    {
        $customer->update([
            'adress' => 'Beyazıt'
        ]);

        dd(Customer::all());
    }

    public function update(Request $request, Customer $customer) 
    {
        //
    }

    public function destroy(Customer $customer, Request $request) 
    {
        $customer = Customer::where('id', 4)->first();
        $customer->delete();
        
        return response()->json('sildim gitti..');
    }
}
