<?php

namespace App\Http\Controllers;

use App\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    public function invest(){
        $table = Invest::all();
        return view('admin.invest.invest',compact('table'));
    }
    public function create(){
        return view('admin.invest.create');
    }
    public function store(Request $request){

       //dd($request->all());
       $table = new Invest();
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/invest');
    }

    public function del($id)
    {
        $table = Invest::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $table = Invest::find($id);
        return view('admin.invest.update',compact('table'));
    }

    public function update(Request $request)
    {
       //dd($request->all());
       $table = Invest::find($request->id);
       $table->type = $request->type;
       $table->source = $request->source;
       $table->amount = $request->amount;
       $table->description = $request->description;
       $table->save();
       return redirect('admin/invest');
    }


}
