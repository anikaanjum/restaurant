<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('employeeID');
            $table->string('employeeType',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('father',100)->nullable();
            $table->string('mother',100)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('mobile',30)->nullable();
            $table->string('address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('postCode',30)->nullable();
            $table->string('country',100)->nullable();
            $table->string('nid',30)->nullable();
            $table->string('email',160)->nullable();
            $table->integer('userID')->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
            $table->unique(['name', 'mobile', 'email', 'userID']);
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
        Schema::dropIfExists('employee');
    }
}
