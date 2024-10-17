<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicinesModel;

class MedicinesController extends Controller
{
    public function medicines(Request $request){
        $data['getRecord'] = MedicinesModel::get();
        return view('admin.medicines.list', $data);
    }

    public function add_medicines(Request $request)
    {
        return view('admin.medicines.add');
    }

    public function insert_add_medicines(Request $request)
    {
        $medicine = new MedicinesModel;
        $medicine->name = $request->name;
        $medicine->packing = $request->packing;
        $medicine->generic_name = $request->generic_name;
        $medicine->supplier_name = $request->supplier_name;

        // Save the Medicine to the database
        $medicine->save();

        return redirect('admin/medicines')->with('success', 'Medicine added successfully!');
    }

    public function edit_medicines($id, Request $request){
        $data['getRecord'] = MedicinesModel::getSingle($id);
        return view('admin.medicines.edit', $data);
    }

    public function update_medicines($id, Request $request)
    {
        $medicine = MedicinesModel::getSingle($id);
        $medicine->name = $request->name;
        $medicine->packing = $request->packing;
        $medicine->generic_name = $request->generic_name;
        $medicine->supplier_name = $request->supplier_name;

        // Save the Medicine to the database
        $medicine->save();

        return redirect('admin/medicines')->with('success', 'Medicine added successfully!');
    }

    public function delete_medicines($id){
        $delete_record = MedicinesModel::find($id);
        $delete_record->delete();
        return redirect('admin/medicines')->with('error', 'Medicine Successfully Deleted');
    }
}

