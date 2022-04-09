<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_mobile');
            $table->string('user_role');
            $table->string('user_pass');
            $table->string('user_cpass');
            $table->string('user_status');
            $table->string('user_img');
            $table->string('user_date');
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
};
