<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_area', function (Blueprint $table) {
            $table->increments('sponsor_area_id');
            $table->string('nama_brand')->nullable();
            $table->string('nama_cp')->nullable();
            $table->string('nomor_cp')->nullable();
            $table->string('email')->nullable();
            $table->integer('category_sponsor_id')->nullable();
            $table->text('brief')->nullable();
            $table->integer('type_sponsor')->unsigned();
            $table->timestamps();
        });

        Schema::table('sponsor_area', function (Blueprint $table) {
            $table->foreign('type_sponsor')->references('type_sponsor_id')->on('type_sponsor');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsor_area');
    }
}
