<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InstructorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('instructor',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('instructor_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('username');
            $table->string('designation');
            $table->string('password');
            $table->string('confirmpass');
            $table->string('facebooklink')->nullable();
            $table->string('twiterlink')->nullable();
            $table->string('youtubechannel')->nullable();
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
