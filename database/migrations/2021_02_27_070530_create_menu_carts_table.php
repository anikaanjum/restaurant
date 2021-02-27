<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sessionID');
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
        Schema::dropIfExists('menu_carts');
    }
}
