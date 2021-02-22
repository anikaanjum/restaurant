<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employees(){
        $table = Employee::all();
        return view('admin.employees.employees',compact('table'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }
    
    public function store(Request $request)
    {
       //dd($request->all());
       $table = new Employee();
       $table->name = $request->name;
       $table->employeeCode = $request->code;
       $table->phone = $request->phone;
       $table->nid = $request->nid;
       $table->address = $request->address;
       $table->save();
       return redirect('admin/employees');
    }

    public function del($id)
    {
        $table = Employee::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $table = Employee::find($id);
        return view('admin.employees.update',compact('table'));
  
    }


    public function update(Request $request)
    {
       //dd($request->all());
       $table = Employee::find($request->id);
       $table->name = $request->name;
       //$table->slug = str_slug($request->name);
       $table->employeeCode = $request->code;
       $table->phone = $request->phone;
       $table->nid = $request->nid;
       $table->address = $request->address;
       $table->save();
       return redirect('admin/employees');
    }
}
