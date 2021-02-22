<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150)->nullable();
            $table->string('price',150)->nullable();
            $table->unsignedBigInteger('menu_category_id');
            $table->foreign('menu_category_id')->references('id')->on('menu_categories')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('food_menus');
    }
}
