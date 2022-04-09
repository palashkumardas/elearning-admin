<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class EnrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_info',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('course_id');
            $table->string('student_id');
            $table->string('student_phone');
            $table->text('enroll_date');
            $table->string('enroll_status')->nullable();
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
