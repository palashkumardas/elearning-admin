<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_cate',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('course_id');
            $table->string('cat_title');
            $table->text('cat_details')->nullable();
            $table->string('cat_time');
            $table->string('instructor_id')->nullable();
            $table->boolean('ispublish');
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
