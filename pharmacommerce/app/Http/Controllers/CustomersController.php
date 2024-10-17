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

    public function edit_customers($id, Request $request){
        $data['getRecord'] = CustomersModel::getSingle($id);
        return view('admin.customers.edit', $data);
    }

    public function update_customers($id, Request $request)
    {
        $customer = CustomersModel::getSingle($id);
        $customer->name = $request->name;
        $customer->contact_number = $request->contact_number;
        $customer->address = $request->address;
        $customer->doctor_name = $request->doctor_name;
        $customer->doctor_address = $request->doctor_address;

        // Save the customer to the database
        $customer->save();

        return redirect('admin/customers')->with('success', 'Customer added successfully!');
    }

    public function delete_customers($id){
        $delete_record = CustomersModel::find($id);
        $delete_record->delete();
        return redirect('admin/customers')->with('error', 'Customer Successfully Deleted');
    }
}
