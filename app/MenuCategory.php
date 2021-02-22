<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    protected $table = "menu_categories";

    public function menu()
    {
        return $this->hasMany('App\FoodMenu','menu_category_id');
    }
}
