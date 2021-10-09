<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnership', function (Blueprint $table) {
            $table->increments('partnership_id');
            $table->integer('partnership_type_id');
            $table->string('nama_perusahaan');
            $table->string('nama_brand');
            $table->string('nama_cp');
            $table->string('no_cp');
            $table->string('email');
            $table->integer('category_partnership_id');
            $table->text('brief');
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
        Schema::dropIfExists('partnership');
    }
}
