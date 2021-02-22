<?php

namespace App\Http\Controllers;

use App\FoodMenu;
use App\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        $table = FoodMenu::all();
        return view('admin.menu.menu',compact('table'));
    }

    public function create(){
        $cats = MenuCategory::all();
        return view('admin.menu.create_menu',compact('cats'));
    }

    public function store(Request $request){

        //dd($request->all());
        $table = new FoodMenu();
        $table->menu_category_id = $request->menu_category_id;
        $table->name = $request->name;
        $table->price = $request->price;
        $table->save();
        return redirect('admin/menu');
     }

     public function del($id)
    {
        $table = FoodMenu::find($id);
        $table->delete();
        return back();
    }

    public function update_page($id)
    {
        $cats = MenuCategory::all();
        $table = FoodMenu::find($id);
        return view('admin.menu.update',compact('table','cats'));
    }

    public function update(Request $request)
    {
       //dd($request->all());
       $table = FoodMenu::find($request->id);
       $table->menu_category_id = $request->menu_category_id;
       $table->name = $request->name;
       $table->price = $request->price;
       $table->save();
       return redirect('admin/menu');
    }
}
