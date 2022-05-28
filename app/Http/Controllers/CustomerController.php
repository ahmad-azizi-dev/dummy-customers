<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the Customers.
     */
    public function index()
    {
        return view('customer.index')->with([
            'customers' => Customer::orderBy('lastname', 'asc')->paginate(8)
        ]);
    }


    /**
     * Store a newly created Customer in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->input());

        return redirect()->back()->with('successStore', 'The customer stored successfully!');
    }

}
