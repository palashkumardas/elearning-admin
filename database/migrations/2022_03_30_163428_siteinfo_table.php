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
        Schema::create('siteinfo',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('site_title');
            $table->string('site_herotitle');
            $table->string('site_herosubtitile');
            $table->string('site_address');
            $table->string('site_mobile');
            $table->string('site_email');
            $table->string('site_weblink');
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
