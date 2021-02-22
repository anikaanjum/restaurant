<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
   public function expense(){
       $table = Expense::all();
       return view('admin.expense.expense',compact('table'));
   }

   public function create()
    {
        return view('admin.expense.create');
    }

    public function store(Request $request)
    {
       //dd($request->all());
       $table = new Expense();
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/expense');
    }

    public function del($id)
    {
        $table = Expense::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $table = Expense::find($id);
        return view('admin.expense.update',compact('table'));
  
    }


    public function update(Request $request)
    {
       //dd($request->all());
       $table = Expense::find($request->id);
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/expense');
    }
}
