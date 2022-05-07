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
        Schema::create('subcategory',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('cat_name');
            $table->string('sub_cate');
            $table->string('subcate_dis')->nullable();
            $table->string('subcate_img')->nullable();
            $table->string('level');
            $table->string('subcate_id');
            $table->string('instructor_name');
            $table->string('status');
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
