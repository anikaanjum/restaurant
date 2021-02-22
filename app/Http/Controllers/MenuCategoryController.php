<?php

namespace App\Http\Controllers;
use App\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuCategoryController extends Controller
{
    public function index()
    {
        $table = MenuCategory::all();
        return view('admin.category.category',compact('table'));
    }

    public function create()
    {
        return view('admin.category.create_category');
    }

    public function store(Request $request)
    {
        $table = new MenuCategory();
        $table->name = $request->name; 
        $table->slug = str_slug($request->name);
        $table->save();
       return redirect('admin/menu/category');
        
    }

    public function del($id)
    {
        $table = MenuCategory::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $table = MenuCategory::find($id);
        return view('admin.category.update',compact('table'));
    }

    public function update(Request $request)
    {
       //dd($request->all());
       $table = MenuCategory::find($request->id);
       $table->name = $request->name; 
       $table->slug = str_slug($request->name);
       $table->save();
       return redirect('admin/menu/category');
    }
}
