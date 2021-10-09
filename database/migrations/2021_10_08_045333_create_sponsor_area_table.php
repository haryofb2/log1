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
            $table->string('nama_brand');
            $table->string('nama_cp');
            $table->string('nomor_cp');
            $table->string('email');
            $table->integer('category_sponsor_id');
            $table->text('brief');
            $table->integer('type_sponsor');
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
        Schema::dropIfExists('sponsor_area');
    }
}
