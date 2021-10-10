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
            $table->string('name')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->text('quote')->nullable();
            $table->text('image')->nullable();
            $table->integer('job_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('moms', function (Blueprint $table) {
            $table->foreign('job_id')->references('profesi_id')->on('profesi');
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
