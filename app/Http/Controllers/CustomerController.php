<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function getCustomers()
    {
        if ($customers = Customer::all()->toJson(JSON_PRETTY_PRINT)) {
            return response($customers, 200);
        } else {
            return response()->json([
                "message" => "Stundents not found"
            ], 404);
        }
    }

    public function getCustomer($id)
    {
        if (Customer::where('id', $id)->exists()) {
            $customer = Customer::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($customer, 200);
        } else {
            return response()->json([
                "message" => "Customer not found"
            ], 404);
        }
    }

    public function create()
    {
        $customer = new Customer();

        return view('customer.create', compact('customer'));
    }

    public function store()
    {

        $customer = Customer::create($this->validatedData());

        return redirect('/customer/' . $customer->id);
    }

    public function show(Customer $customer)
    {


        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        Customer::create($this->validatedData());

        $customer->update($data);

        return redirect('/customer');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customer');
    }

    protected function validatedData()
    {
        return request()->validate([
            'name'  => 'required',
            'email' => 'required|email'
        ]);
    }
}
