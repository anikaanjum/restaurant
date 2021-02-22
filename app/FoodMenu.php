<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    protected $table = 'food_menus';

    public function category()
    {
        return $this->belongsTo('App\MenuCategory','menu_category_id');
    }
}
