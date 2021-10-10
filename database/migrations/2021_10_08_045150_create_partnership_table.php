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
            $table->integer('partnership_type_id')->unsigned();
            $table->string('nama_perusahaan')->nullable();
            $table->string('nama_brand')->nullable();
            $table->string('nama_cp')->nullable();
            $table->string('no_cp')->nullable();
            $table->string('email')->nullable();
            $table->integer('category_partnership_id')->unsigned();
            $table->text('brief')->nullable();
            $table->timestamps();
        });

        Schema::table('partnership', function (Blueprint $table) {
            $table->foreign('partnership_type_id')->references('partnership_type_id')->on('partnership_type');
            $table->foreign('category_partnership_id')->references('category_partnership_id')->on('category_partnership');
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
