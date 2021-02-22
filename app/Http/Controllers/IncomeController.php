<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function income(){
        $table = Income::all();
        return view('admin.income.income',compact('table'));
    }

    public function create()
    {
        return view('admin.income.create');
    }

    public function store(Request $request)
    {
       //dd($request->all());
       $table = new Income();
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/income');
    }

    public function del($id)
    {
        $table = Income::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $table = Income::find($id);
        return view('admin.income.update',compact('table'));
  
    }


    public function update(Request $request)
    {
       //dd($request->all());
       $table = Income::find($request->id);
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/income');
    }
}
    
