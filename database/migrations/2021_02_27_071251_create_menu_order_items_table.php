<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('menu_order_id')->index();
            $table->foreign('menu_order_id')->references('id')->on('menu_orders')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('food_menu_id')->index();
            $table->foreign('food_menu_id')->references('id')->on('food_menus')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('quantity')->default(0);
            $table->double('price')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_order_items');
    }
}
