<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('email');
            $table->string('phone');
            $table->string('username');
            $table->string('password');
            $table->string('confirmpass');
            $table->string('socialinfo');
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
