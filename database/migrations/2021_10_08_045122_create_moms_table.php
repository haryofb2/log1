<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moms', function (Blueprint $table) {
            $table->increments('mom_id');
            $table->string('name');
            $table->string('link_instagram');
            $table->string('link_facebook');
            $table->string('link_tiktok');
            $table->text('quote');
            $table->text('image');
            $table->integer('job_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moms');
    }
}
