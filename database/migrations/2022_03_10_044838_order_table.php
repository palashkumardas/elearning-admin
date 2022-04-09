<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('course_id');
            $table->string('student_id');
            $table->string('student_phone');
            $table->string('payment');
            $table->text('order_date');
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
