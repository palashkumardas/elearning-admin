<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_content',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('course_title');
            $table->string('course_id');
            $table->string('cat_title');
            $table->string('content_title');
            $table->string('content_link');
            $table->string('content_time');
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
