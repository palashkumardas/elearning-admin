<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('course_id');
            $table->text('course_details')->nullable();
            $table->string('course_type');
            $table->string('price');
            $table->string('special_price');
            $table->string('course_level');
            $table->string('course_feature');
            $table->string('instructor_id')->nullable();
            $table->string('image');
            $table->string('total_time');
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
