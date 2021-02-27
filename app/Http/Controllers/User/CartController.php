<?php

namespace App\Http\Controllers\User;
use App\MenuCart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
class CartController extends Controller
{
    public function add_cart(Request $request){

        $isExist = MenuCart::where('sessionID', Cookie::get('unique_session'))
        ->where('food_menu_id', $request->foodID)->first();
    
            if($isExist == null){
                $table = new MenuCart();
                $table->sessionID = Cookie::get('unique_session');
                $table->food_menu_id = $request->foodID;
                $table->price = $request->price;
                $table->quantity = 1;
                $table->save();
            }else{
                $old_qty = $isExist->quantity;
                MenuCart::where('sessionID', Cookie::get('unique_session'))
                ->where('food_menu_id', $request->foodID)->update(['quantity' => ($old_qty + 1)]);
            }
    
            return 0;
    
       }

       public function show_list(){
        $table = MenuCart::where('sessionID', Cookie::get('unique_session'))->sum('quantity');
        return $table;
    }
}
