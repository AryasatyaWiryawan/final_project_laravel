<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersModel;

class CustomersController extends Controller
{
    public function customers(Request $request){
        $data['getRecord'] = CustomersModel::get();
        return view('admin.customers.list', $data);
    }
    public function add_customers(Request $request)
    {
        return view('admin.customers.add');
    }
    public function insert_add_customers(Request $request)
    {
        $customer = new CustomersModel;
        $customer->name = $request->name;
        $customer->contact_number = $request->contact_number;
        $customer->address = $request->address;
        $customer->doctor_name = $request->doctor_name;
        $customer->doctor_address = $request->doctor_address;

        // Save the customer to the database
        $customer->save();

        return redirect('admin/customers')->with('success', 'Customer added successfully!');
    }
}
