<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('paidAmount')->default(0);
            $table->double('deliveryCharge')->default(0);
            $table->string('paymentType', 50)->default('Cash');
            $table->string('paymentStatus', 20)->default('Unpaid');
            $table->string('orderStatus', 20)->default('Pending');
            $table->string('contactNo')->nullable();
            $table->string('address')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('menu_orders');
    }
}
