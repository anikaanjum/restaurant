<?php

namespace App\Http\Controllers;
use App\FoodMenu;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function front()
    {
        $table = FoodMenu::all();
        return view('frontend.frontend',compact('table'));
    }




}
