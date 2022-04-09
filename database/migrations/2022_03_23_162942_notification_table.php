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
        Schema::create('notification',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('notifi_title');
            $table->string('notifi_des');
            $table->string('notifi_status');
            $table->string('notifi_datetime');
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
