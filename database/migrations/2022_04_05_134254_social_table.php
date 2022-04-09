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
        Schema::create('social',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('youtube_link');
            $table->string('linkedin_link');
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
