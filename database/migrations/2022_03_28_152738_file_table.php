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
        Schema::create('file',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('file_title');
            $table->string('file_status');
            $table->string('file_link');
            $table->string('file_datetime');
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
